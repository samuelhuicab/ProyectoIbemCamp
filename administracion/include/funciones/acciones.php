<?php 

if (isset($_POST['login-campers-b'])) {

    $password = $_POST['pwd'];
    $correo = $_POST['correo'];
    $fecha_actual = date("Y-m-d H:i:s");

    try {
      require_once('bd_conexion.php');
      $sql = "SELECT diasCaducidad FROM configuracioncaducidadtoken";
      $caducidadDias = $conn->query($sql);
      $resultado = $caducidadDias->fetch_assoc();
      $diacaducas = $resultado['diasCaducidad'];
      $stmt = $conn->prepare("SELECT usuarioPreInscritoID, nombre, email, iglesiaPerteneciente,token,fechaTokenCreacion FROM usuariopreinscritos WHERE email = ?;");
      $stmt->bind_param("s", $correo);
      $stmt->execute();
      $stmt->bind_result($IDusuarioPre, $nombreusuarioPre, $emailusuarioPre, $iglesiausuarioPre, $tokenusuarioPre, $fechatokenusuarioPre);
      if ($stmt->affected_rows) {
        $existe = $stmt->fetch();
        if ($existe) {
          if (password_verify($password, $tokenusuarioPre)) {
            $fecha1 = DateTime::createFromFormat('Y-m-d H:i:s', $fecha_actual);
            $fecha2 = DateTime::createFromFormat('Y-m-d H:i:s', $fechatokenusuarioPre);
            $fecha1new = $fecha1->format("d-m-Y");
            $fecha2new = $fecha2->format("d-m-Y");
            $fecha1new1 = new DateTime($fecha1new);
            $fecha2new2 = new DateTime($fecha2new);
            $diferenciadias = $fecha1new1->diff($fecha2new2);
            $diff = $diferenciadias->days;
            if ($diff > $diacaducas){
                $respuesta = array('respuesta' => 'TokenVencido' );
            }else{
                session_start();
                $_SESSION['nombre'] = $nombreusuarioPre;
                $respuesta = array('respuesta' => 'exito' );
            }
          }else {
            $respuesta = array('respuesta' => 'password_incorrecto');
          }
        }else {
          $respuesta = array(
            'respuesta' => 'no_existe',
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