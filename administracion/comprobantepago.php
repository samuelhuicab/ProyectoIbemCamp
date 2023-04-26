<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campamento Juvenil IBEM</title>

    <link rel="shortcut icon" href="img/icono.ico">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/vendor/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/cryptocurrency-icons.css">
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
    

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="assets/css/style-primary.css">
    
</head>
<body>
    <div class="main-wrapper">
    <?php include_once 'include/funciones/sessiones.php'; ?>
    <?php include_once 'include/templates/navbaradmin.php'; ?>  
      
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3 class="title">Alta Comprobante <span>/ Bienvenido</span></h3>
                    </div>
                </div><!-- Page Heading End -->
            </div><!-- Page Headings End -->

            <div class="col-12">
                    <!-- News & Updates Wrap Start -->
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Comprobantes</h4>
                        </div>
                        <div class="box-body">
                            <!-- News & Updates Inner Start -->
                            <div class="news-update-inner">

                                <!-- News Item -->
                                <div class="news-item">

                                    <!-- Content -->
                                    <div class="content">
                                        <!-- Category -->
                                        <div class="categories">
                                            <a href="#" class="product">Importante</a>
                                            <a href="#" class="new">Pago</a>
                                        </div>
                                        <!-- Title -->
                                        <h4 class="title"><a href="#">Sube tu comprobante de pago para terminar el proceso de inscripción</a></h4>
                                        <!-- Meta -->
                                        <ul class="meta">
                                            <li><i class="zmdi zmdi-time"></i>100 Houre ago</li>
                                            <li>Por: <a href="#">Equipo Campamento</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <form role="form" name="form-compro" id="form-compro" method="post" enctype="multipart/form-data" action="include/funciones/comprobanteinsert.php">
                                    <!--Default Uploader Start-->
                                    <div class="col-lg-6 col-12 mb-20">
                                        <h6 class="mb-15">Sube tu archivo aqui:</h6>
                                        <input class="dropify" name="file" id="file" type="file" required="">
                                    </div>
                                    <div class="botoniniciar">
                                        <button name="subcompro" value="Enviar" id="subcompro" class="button button-round button-primary" type="submit">
                                        <input type="hidden" name="usuario" value="<?php echo $_SESSION['nombre'] ?>">
                                        <input type="hidden" name="idusuario" value="<?php echo $_SESSION['IDusuarioPre'] ?>">
                                            <span>Subir Comprobante</span>
                                        </button>
                                    </div>
                                </form>
                                <!--Default Uploader End-->
                            </div><!-- News & Updates Inner End -->
                        </div>
                    </div><!-- News & Updates Wrap End -->
                </div><!-- News & Updates End -->

        </div><!-- Content Body End -->

    <?php include_once 'include/templates/footer.php'; ?> 
    </div>
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugins JS-->
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="assets/js/main.js"></script>
    <script src="admin-ajax.js" type="text/javascript"></script>
    <script src="assets/js/plugins/filepond/filepond.min.js"></script>
    <script src="assets/js/plugins/filepond/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="assets/js/plugins/filepond/filepond-plugin-image-preview.min.js"></script>
    <script src="assets/js/plugins/filepond/filepond.active.js"></script>
    <script src="assets/js/plugins/dropify/dropify.min.js"></script>
    <script src="assets/js/plugins/dropify/dropify.active.js"></script>
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="plugins/jquery/jquery.min.js"></script>
    
</body>
</html>