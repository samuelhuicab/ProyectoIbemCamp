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
          $stmt->close();
          $sql = "SELECT count(*) as Comprobante FROM usuarioscomprobante WHERE usuarioPreInscritoID = $IDusuarioPre";
          $comprobantecount = $conn->query($sql);
          $dato = $comprobantecount->fetch_assoc();
          $cuentadato = $dato['Comprobante'];
          if($cuentadato > 0){
              session_start();
              $_SESSION['nombre'] = $nombreusuarioPre;
              $_SESSION['correo'] = $emailusuarioPre;
              $_SESSION['IDusuarioPre'] = $IDusuarioPre;
              $respuesta = array('respuesta' => 'exito' );
          }else{
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
                $_SESSION['correo'] = $emailusuarioPre;
                $_SESSION['IDusuarioPre'] = $IDusuarioPre;
                $respuesta = array('respuesta' => 'exito' );
            }
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
    $conn->close();
  } catch (\Exception $e) {
    echo "error ". $e->getMessage();
  }


    die(json_encode($respuesta));

 }


 if (isset($_POST['login-admin-b'])) {

  $usuario = $_POST['user'];
  $password = $_POST['pwd'];

  try {
    require_once('bd_conexion.php');
    $stmt = $conn->prepare("SELECT usuarioID,nombre,usuario,pwd FROM usuariowebadmin WHERE usuario = ?;");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->bind_result($id_admin, $nombre_admin, $usuario_admin, $password_admin);
    if ($stmt->affected_rows) {
      $existe = $stmt->fetch();
      if ($existe) {
        if (password_verify($password, $password_admin)) {
          session_start();
          $_SESSION['usuarioAdminID'] = $id_admin;
          $_SESSION['usuarioAdmin'] = $usuario_admin;
          $_SESSION['nombreAdmin'] = $nombre_admin;
          $respuesta = array('respuesta' => 'exito' );
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






if (isset($_POST['save-user'])) {

  $password = $_POST['pwdadmin'];
  $nombreuser = $_POST['nombreuser'];
  $usuario = $_POST['useradmin'];
  $status = "A";

  $opciones = array('cost' =>  12 );
  $password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones );

  try {
    require_once('bd_conexion.php');
    $stmt = $conn->prepare("INSERT INTO usuariowebadmin (nombre,usuario,pwd,estatus) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nombreuser, $usuario, $password_hashed, $status);
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
    echo "error ". $e->getMessage();
  }


    die(json_encode($respuesta));

 }



 if (isset($_POST['save-confdias-b'])) {

  $dias = $_POST['dias'];

  try {
    require_once('bd_conexion.php');
    $stmt = $conn->prepare("UPDATE configuracioncaducidadtoken SET diasCaducidad = ?;");
    $stmt->bind_param("i", $dias);
    $stmt->execute();
    if ($stmt->affected_rows) {
      $respuesta = array(
        'respuesta' => 'exito',
      );
    }else{
      $respuesta = array(
        'respuesta' => 'fallo',
      );
    }
    $stmt->close();
    $conn->close();
  } catch (\Exception $e) {
    echo "error ". $e->getMessage();
  }


    die(json_encode($respuesta));





 }


 if (isset($_POST['validacion-b-correcta'])) {

  $varificacion = $_POST['validacion-b-correcta'];
  $userid = $_POST['usuarioID'];

  try {
    require_once('bd_conexion.php');
    $stmt = $conn->prepare("UPDATE usuarioscomprobante SET verificacionComprobante = ? WHERE usuarioPreInscritoID = ?;");
    $stmt->bind_param("ss", $varificacion,$userid);
    $stmt->execute();
    if ($stmt->affected_rows) {
      $respuesta = array(
        'respuesta' => 'exito',
      );
    }else{
      $respuesta = array(
        'respuesta' => 'fallo',
      );
    }
    $stmt->close();
    $conn->close();
  } catch (\Exception $e) {
    echo "error ". $e->getMessage();
  }


    die(json_encode($respuesta));





 }

 if (isset($_POST['validacion-b-incorrecta'])) {

   $userid2 = $_POST['usuarioID2'];

  try {
    require_once('bd_conexion.php');
    $stmt = $conn->prepare("SELECT verificacionComprobante FROM usuarioscomprobante WHERE usuarioPreInscritoID = ?;");
    $stmt->bind_param("s", $userid2);
    $stmt->execute();
    $stmt->bind_result($estaverificado);
    $stmt->fetch();
    if ($estaverificado == 1){
      $respuesta = array(
        'respuesta' => 'varificado',
      );
    }else{
      $stmt->close();
      $stmt = $conn->prepare("DELETE FROM usuarioscomprobante WHERE usuarioPreInscritoID = ?;");
      $stmt->bind_param("s",$userid2);
      $stmt->execute();
      if ($stmt->affected_rows) {
        $respuesta = array(
          'respuesta' => 'exito',
        );
      }else{
        $respuesta = array(
          'respuesta' => 'fallo',
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