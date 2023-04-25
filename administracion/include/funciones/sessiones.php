<?php
 function usuario_autenticado(){
   if (!revisar_usuario() ) {
     header('Location:login.php');
     exit();
   }

   if(isset($_SESSION['tiempo']) ) {

    //Tiempo en segundos para dar vida a la sesión.
    $inactivo = 1200;//20min en este caso.

    //Calculamos tiempo de vida inactivo.
    $vida_session = time() - $_SESSION['tiempo'];

        //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
        if($vida_session > $inactivo)
        {
            //Removemos sesión.
            session_unset();
            //Destruimos sesión.
            session_destroy();
            //Redirigimos pagina.
            header("Location: login.php");

            exit();
        }
} else {
    //Activamos sesion tiempo.
    $_SESSION['tiempo'] = time();
}
 };

function revisar_usuario(){
  return isset($_SESSION['usuario']);

};



session_start();
usuario_autenticado();

 ?>
