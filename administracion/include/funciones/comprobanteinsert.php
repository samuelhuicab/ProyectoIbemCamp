<?php 

if (isset($_POST['subcompro'])) {

$usuario = $_POST['usuario'];
$idusuario = $_POST['idusuario'];
$file_name = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$nombrecomprobante = "ComprobantePago".$usuario."".$file_name;
$status = "A";
$route = "../../comprobantes/".$nombrecomprobante;
$insertar = false;

try {
  require_once('bd_conexion.php');
  $stmt = $conn->prepare("SELECT COUNT(*) AS Datos FROM usuarioscomprobante WHERE usuarioPreInscritoID = ?;");
  $stmt->bind_param("s", $idusuario);
  $stmt->execute();
  $stmt->bind_result($cuentadatos);
  $stmt->fetch();
  if ($cuentadatos > 0){
    $respuesta = array(
      'respuesta' => 'ArchivoAlta',             
    );
  }else{
    $stmt->close();
    move_uploaded_file($file_tmp,$route);
    $insertar = true;
  }

  if ($insertar){
    $stmt = $conn->prepare("INSERT INTO usuarioscomprobante(usuarioPreInscritoID,descripcionArchivo,nombreArchivo,rutaArchivo,estatus) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss",$idusuario, $nombrecomprobante, $file_name, $route, $status);
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
  }
  $stmt->close();
  $conn->close();
} catch (\Exception $e) {
  echo "error ". $e->getMessage();
}


die(json_encode($respuesta));


}
?>