<?php
include("Negocios/Clases/clsGenericas.php");

if (isset($_POST['register'])) {

    $nombre = $_POST['nomb'];
    $email = $_POST['email'];
    $telefono = $_POST['tel'];
    $nac = $_POST['nac'];
    $iglesia = $_POST['iglesia'];
    $status = "A";
    $fecha_actual = date("Y-m-d H:i:s");
    $insertar = false;
    $update = false;

    $oclsGenericas = new genericas();
    $sContrasena = $oclsGenericas->m_generarContraseña($nombre);
    $opciones = array('cost' =>  12 );
    $password_hashed = password_hash($sContrasena, PASSWORD_BCRYPT, $opciones );
  // $oclsGenericas->m_enviarCorreo($sContraseña, $nombre,$email);
    try {
        require_once('administracion/include/funciones/bd_conexion.php');
        $sql = "SELECT diasCaducidad FROM configuracioncaducidadtoken";
        $caducidadDias = $conn->query($sql);
        $resultado = $caducidadDias->fetch_assoc();
        // $diacaducas = $caducidadDias[0]['diasCaducidad'];
        $diacaducas = $resultado['diasCaducidad'];
        $stmt = $conn->prepare("SELECT email, fechaTokenCreacion FROM usuariopreinscritos WHERE email = ?;");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($emailvalida, $fechatokenvalida);

        if ($stmt->affected_rows){
          $existe = $stmt->fetch();
          if ($existe) {
            $fecha1 = DateTime::createFromFormat('Y-m-d H:i:s', $fecha_actual);
            $fecha2 = DateTime::createFromFormat('Y-m-d H:i:s', $fechatokenvalida);
            $fecha1new = $fecha1->format("d-m-Y");
            $fecha2new = $fecha2->format("d-m-Y");
            $fecha1new1 = new DateTime($fecha1new);
            $fecha2new2 = new DateTime($fecha2new);
            // $fecha2= new DateTime(strval($fechatokenvalida));
            // echo $fecha1;
            // echo $fecha2;
            // $fecha1 = $fecha_actual->format("Y-m-d");
            // $fecha2 = $fechatokenvalida->format("Y-m-d");
            $diferenciadias = $fecha1new1->diff($fecha2new2);
            $diff = $diferenciadias->days;
            if ($diff > $diacaducas){
              $update = true;
              $stmt->close();
            }else{
              $respuesta = array(
                'respuesta' => 'TokenValido',
              );
            }
          }else{
            $insertar = true;
            $stmt->close();
          }
        }else{
          $insertar = true;
          $stmt->close();
        }
        if ($insertar == true){
          require_once('administracion/include/funciones/bd_conexion.php');
          $stmt = $conn->prepare("INSERT INTO usuariopreinscritos (nombre,email,telefono,fechaNacimiento,iglesiaPerteneciente,estatus,token,fechaTokenCreacion) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
          $stmt->bind_param("ssssssss",$nombre, $email, $telefono, $nac, $iglesia,$status,$password_hashed,$fecha_actual);
          $stmt->execute();
          $id_registro = $stmt->insert_id;
          if ($id_registro > 0) {
          $oclsGenericas->m_enviarCorreo($sContrasena, $nombre,$email);
          $respuesta = array(
            'respuesta' => 'exito',
          );
          }else {
          $respuesta = array(
            'respuesta' => 'error',
          );
          }
        }

        if ($update == true){
          require_once('administracion/include/funciones/bd_conexion.php');
          $stmt = $conn->prepare("UPDATE usuariopreinscritos SET token = ?, fechaTokenCreacion = ? WHERE email = ? ");
          $stmt->bind_param("sss", $password_hashed, $fecha_actual, $email);
          $stmt->execute();
          if ($stmt->affected_rows) {
          $oclsGenericas->m_enviarCorreo($sContrasena, $nombre,$email);
          $respuesta = array(
            'respuesta' => 'exito',
          );
          }else {
          $respuesta = array(
            'respuesta' => 'error',
          );
          }
        }
        $stmt->close();
        $conn->close();
      } catch (\Exception $e) {
        echo "error ".$e->getMessage();
      }

    die(json_encode($respuesta));




   }

//    function creapdf($nombre,$email,$telefono){
//     // include class
//     require('plugins/fpdf185/fpdf.php');

//     // create document
//     $pdf = new FPDF();
//     $pdf->AddPage();

//     // config document
//     $pdf->SetTitle('Generar archivos PDF con PHP');
//     $pdf->SetAuthor('Kodetop');
//     $pdf->SetCreator('FPDF Maker');

//     // add title
//     $pdf->SetFont('Arial', 'B', 24);
//     $pdf->Cell(0, 10, 'Generar archivos PDF con PHP', 0, 1);
//     $pdf->Ln();

//     // add text
//     $pdf->SetFont('Arial', '', 12);
//     $pdf->MultiCell(0, 7, utf8_decode('Los archivos PDF se utilizan ampliamente en documentos y reportes que necesitan mantener el diseño y contenido (imágenes, tipos de letra, colores, etc), por ello vamos a aprender a crear archivos PDF utilizando PHP.'), 0, 1);
//     $pdf->Ln();
//     $pdf->MultiCell(0, 7, utf8_decode('FPDF es una clase PHP que permite la generación de archivos PDF de forma sencilla y sin necesidad de instalar librerías adicionales, cuenta con métodos bien documentados que facilitan su uso.'), 0, 1);
//     $pdf->Ln();
//     $pdf->MultiCell(0, 7, utf8_decode('Antes de comenzar lo primero es descargar FPDF e incluir los archivos necesarios en nuestro proyecto.'), 0, 1);
//     $pdf->Ln();


//     // output file
//     $pdf->Output('', 'fpdf-complete.pdf');
//    }


?>
