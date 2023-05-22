<?php
include("Negocios/Clases/clsGenericas.php");

if (isset($_POST['enviar'])){
    $pregunta_1 = $_POST['pregunta_1'];
    $deporte = $_POST['deporte'];
    $deporte_practica = $_POST['deporte_practica'];
    $arte = $_POST['arte'];
    $arte_practica = $_POST['arte_practica'];
    $pregunta_5 = $_POST['pregunta_5'];
    $lider = $_POST['lider'];
    $anteriorasis = $_POST['anteriorasis'];
    $iglesia = $_POST['iglesia'];
    $iglesia_asistencia = $_POST['iglesia_asistencia'];
    $alergia = $_POST['alergia'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $nacimiento = $_POST['nacimiento'];
    $apodo = $_POST['apodo'];
    $importe = $_POST['importe'];

    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $nombrecomprobante = "ComprobantePago".$nombre.$file_name;
    $status = "A";
    $route = "administracion/comprobantes/".$nombrecomprobante;

    $status = "A";
    $vacio = "";
    $verificacion = 2;

    $insertacomprobante = false;
    $insertacuestionario = false;
    $registrocorrecto = false;


    $oclsGenericas = new genericas();
    $sContrasena = $oclsGenericas->m_generarContraseña($nombre);
    $opciones = array('cost' =>  12 );
    $password_hashed = password_hash($sContrasena, PASSWORD_BCRYPT, $opciones );
    try {
        require_once('administracion/include/funciones/bd_conexion.php');
        $sql = "SELECT COUNT(*) as Email FROM usuariopreinscritos WHERE email  = '$email'";
        $caducidadDias = $conn->query($sql);
        $resultado = $caducidadDias->fetch_assoc();

        if($resultado['Email'] > 0){
            header("Location: administracion/mensajescuestionario/errorcorreo.php");
            exit;
        }

        $stmt = $conn->prepare("INSERT INTO usuariopreinscritos (nombre,email,telefono,fechaNacimiento,iglesiaPerteneciente,estatus,token) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss",$nombre, $email, $telefono, $nacimiento, $iglesia_asistencia, $status, $password_hashed);
        $stmt->execute();
        $id_registrousuarios = $stmt->insert_id;
        if ($id_registrousuarios > 0) {
            $insertacomprobante = true;
            $stmt->close();
          }else {
            $respuesta = array(
              'respuesta' => 'error',
            );
          }

        if ($insertacomprobante){
            move_uploaded_file($file_tmp,$route);
            $stmt = $conn->prepare("INSERT INTO usuarioscomprobante(usuarioPreInscritoID,descripcionArchivo,nombreArchivo,rutaArchivo,estatus,montoPagado,verificacionComprobante) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssii",$id_registrousuarios, $nombrecomprobante, $file_name, $route, $status, $importe, $verificacion);
            $stmt->execute();
            $id_registroComprobante = $stmt->insert_id;
            if ($id_registroComprobante > 0) {
                $insertacuestionario = true;
                $stmt->close();
            }else {
                $respuesta = array(
                  'respuesta' => 'error',
                );
            }

            if($insertacuestionario){
                $stmt = $conn->prepare("INSERT INTO cuestionario (usuarioPreInscritoID,usuariosComprobanteID,pregunta_1,deporte,deporte_practica,arte,arte_practica,pregunta_5,lider,anteriorasis,iglesia,iglesia_asistencia,alergia,nombre,apodo,telefono,email,nacimiento) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssssssssssssssss",$id_registrousuarios, $id_registroComprobante, $pregunta_1, $deporte, $deporte_practica,$arte,$arte_practica,$pregunta_5,$lider,$anteriorasis,$iglesia,$iglesia_asistencia,$alergia,$nombre,$apodo,$telefono,$email,$nacimiento);
                $stmt->execute();
                $id_registrocuestionario = $stmt->insert_id;
                if ($id_registrocuestionario > 0) {
                    $registrocorrecto = true;
                    $respuesta = array(
                        'respuesta' => 'exito',
                    );
                }else {
                    $respuesta = array(
                      'respuesta' => 'error',
                    );
                }

                if($registrocorrecto){
                    $stmt->close();
                    $conn->close();
                    header("Location: administracion/mensajescuestionario/correcto.php?U=$email&P=$sContrasena");
                    exit;
                }else{
                    $stmt->close();
                    $conn->close();
                    header("Location: cuestionario/index.php");
                    exit;
                }
            }
        }

    } catch (\Exception $e) {
        echo "error ". $e->getMessage();
    }
}



?>