<?php 
if (isset($_POST['register'])) {

    $nombre = $_POST['nomb'];
    $email = $_POST['email'];
    $telefono = $_POST['tel'];

    echo $nombre;
    echo $email;
    echo $telefono;
  
    // try {
    //   require_once('administracion/include/funciones/bd_conexion.php');
    //   $stmt = $conn->prepare("");
    //   $stmt->bind_param("ssss", $nombre, $usuario, $password_hashed, $status);
    //   $stmt->execute();
    // } catch (\Exception $e) {
    //   echo "error ".$e->getMessage();
    // }
  
    // die(json_encode($respuesta));
  
  
  
  
   }


?>