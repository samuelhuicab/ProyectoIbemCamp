<?php
 function usuario_autenticadoAdmin(){
   if (!revisar_usuarioAdmin() ) {
     header('Location:login_admin.php');
     exit();
   }

   if(isset($_SESSION['tiempoAdmin']) ) {

    //Tiempo en segundos para dar vida a la sesión.
    $inactivo = 1200;//20min en este caso.

    //Calculamos tiempo de vida inactivo.
    $vida_session = time() - $_SESSION['tiempoAdmin'];

        //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
        if($vida_session > $inactivo)
        {
            //Removemos sesión.
            session_unset();
            //Destruimos sesión.
            session_destroy();
            //Redirigimos pagina.
            header("Location: login_admin.php");

            exit();
        }
} else {
    //Activamos sesion tiempo.
    $_SESSION['tiempoAdmin'] = time();
}
 };

function revisar_usuarioAdmin(){
  return isset($_SESSION['nombreAdmin']);

};



session_start();
usuario_autenticadoAdmin();

?>
