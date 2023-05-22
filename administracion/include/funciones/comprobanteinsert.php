<?php 

if (isset($_POST['subcompro'])) {

$usuario = $_POST['usuario'];
$idusuario = $_POST['idusuario'];
$importe = $_POST['importe'];
$file_name = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$nombrecomprobante = "ComprobantePago".$usuario."".$file_name;
$status = "A";
$route = "../../comprobantes/".$nombrecomprobante;
$insertar = false;
$verificacion = 2;

try {
  require_once('bd_conexion.php');
  $stmt = $conn->prepare("SELECT SUM(montopagado) AS ImportePagdo FROM usuarioscomprobante WHERE usuarioPreInscritoID  = ? and verificacionComprobante <> '0';");
  $stmt->bind_param("s", $idusuario);
  $stmt->execute();
  $stmt->bind_result($cuentadatos);
  $stmt->fetch();
  if ($cuentadatos >= 750){
    $respuesta = array(
      'respuesta' => 'ArchivoAlta',             
    );
  }else{
    $stmt->close();
    move_uploaded_file($file_tmp,$route);
    $insertar = true;
  }

  if ($insertar){
    $stmt = $conn->prepare("INSERT INTO usuarioscomprobante(usuarioPreInscritoID,descripcionArchivo,nombreArchivo,rutaArchivo,estatus,montoPagado,verificacionComprobante) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssii",$idusuario, $nombrecomprobante, $file_name, $route, $status,$importe,$verificacion);
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
