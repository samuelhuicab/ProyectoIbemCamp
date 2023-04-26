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
    <?php include_once 'include/funciones/sessionesadministrador.php'; ?>
    <?php include_once 'include/templates/navbaradmin2.php'; ?>  
      
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3 class="title">Alta Usuarios <span>/ Bienvenido</span></h3>
                    </div>
                </div><!-- Page Heading End -->
            </div><!-- Page Headings End -->

                        <!-- Add or Edit Product Start -->
                        <div class="add-edit-product-wrap col-12">
                            <div class="add-edit-product-form">
                                <form name="save-admin" id="save-admin" method="post" action="Include/Funciones/acciones.php">
                                    <h4 class="title">Formulario Alta</h4>
                                    <div class="row">
                                        <div class="col-lg-6 col-12 mb-30"><input class="form-control" name="nombreuser" type="text" placeholder="Nombre*" required=""></div>
                                        <div class="col-lg-6 col-12 mb-30"><input class="form-control" name="useradmin" type="text" placeholder="Usuario*" required=""></div>
                                        <div class="col-lg-6 col-12 mb-30"><input class="form-control" name="pwdadmin" type="password" placeholder="Contraseña*" required=""></div>
                                        <div class="row">
                                            <div class="d-flex flex-wrap justify-content-end col mbn-10">
                                                <input type="hidden" name="save-user" value="1">
                                                <button class="button button-outline button-primary mb-10 ml-10 mr-0" name="save-user" type="submit">Guardar Usuario</button>
                                            </div>
                                        </div>
                                    </div><!-- Button Group End -->
                                </form>
                            </div>
                        </div><!-- Add or Edit Product End -->
                    </div><!-- Content Body End -->

    <?php include_once 'include/templates/footer.php'; ?> 
    </div>
</body>
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>  
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="admin-ajax.js"></script>
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugins JS-->
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/plugins/filepond/filepond.min.js"></script>
    <script src="assets/js/plugins/filepond/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="assets/js/plugins/filepond/filepond-plugin-image-preview.min.js"></script>
    <script src="assets/js/plugins/filepond/filepond.active.js"></script>
    <script src="assets/js/plugins/dropify/dropify.min.js"></script>
    <script src="assets/js/plugins/dropify/dropify.active.js"></script>
</html>