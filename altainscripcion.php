<?php 
if (isset($_POST['register'])) {

    $nombre = $_POST['nomb'];
    $email = $_POST['email'];
    $telefono = $_POST['tel'];
    $status = "A";
  
    try {
        require_once('administracion/include/funciones/bd_conexion.php');
        $stmt = $conn->prepare("INSERT INTO usuariopreinscritos (nombre,email,telefono,estatus) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nombre, $email, $telefono, $status);
        $stmt->execute();
        $id_registro = $stmt->insert_id;
        if ($id_registro > 0) {
          $respuesta = array(
            'respuesta' => 'exito',
          );
        }else {
          $respuesta = array(
            'respuesta' => 'error',
          );
        }
        $stmt->close();
        $conn->close();
      } catch (\Exception $e) {
        echo "error ".$e->getMessage();
      }
  
    die(json_encode($respuesta));
  
  
  
  
   }


?>