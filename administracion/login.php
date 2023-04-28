<?php
session_start();
$cerrar_session = isset($_GET['cerrar_session']);
if ($cerrar_session) {
  session_destroy();
}


 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campamento Juvenil IBEM</title>
    <link rel="icon" href="../img/favicon/color-1/favicon.ico" sizes="any">
    <link rel="icon" href="../img/favicon/color-1/icon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="../img/favicon/color-1/apple-touch-icon.png">
    <link rel="manifest" href="..img/favicon/color-1/manifest.webmanifest">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
</head>
<body>
    <div class="row login" style=" margin:0px; padding:0px;">
        <div class="col-5 banner">
            <nav class="navbar">
                <div class="container">
                  <!-- <a class="navbar-brand" href="login_admin.php">
                    <p>Ingresar Admin</p>
                  </a> -->
                </div>
              </nav>
              <div class="contenedorlogin">
                <div class="row">
                    <div class="inicio">
                        <div>
                            <h3>Inicia Sesión</h3>
                            <p>Ingresa tu correo y la contraseña que se te hizo llegar por correo para que puedas ingresar y terminar la inscripción</p>
                        </div>
                    </div>
                    <form role="form" name="login-campers" id="login-campers" method="post" action="include/funciones/acciones.php">
                        <div class="iniciosesion">   
                            <input placeholder="Correo Electronico" name="correo" type="text" class="input" required="">
                        </div>
                        <div class="iniciosesion">   
                            <input placeholder="Contraseña" name="pwd" type="password" class="input" required="">
                        </div>
                        <div class="botoniniciar">
                        <input type="hidden" name="login-campers-b" value="1">
                            <button name="login-campers-b" class="full-rounded" type="submit">
                                <span>Iniciar sesión</span>
                            </button>
                        </div>
                    </form>
                    <div class="passwordreset">
                        <div>
                            <a href="../index.php">Regresar Página Principal</a>
                        </div>
                    </div>
                </div>
              </div>
        </div>
        <div class="col-7 banner2">
            <div class="row">
                <div class="col-6">

                </div>
                <div class="col-4" style="margin-left:8em; font-size: x-small;">
                    <div class="botoniniciar">
                        <a href="login_admin.php">
                            <button class="full-rounded">
                                <span>Ir inicio sesión admin</span>
                            </button>
                        </a> 
                    </div>
                </div>
            </div>
        </div>
    </div>          
    
</body>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="admin-ajax.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
</html>