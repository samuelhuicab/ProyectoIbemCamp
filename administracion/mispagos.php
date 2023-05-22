<?php include_once 'include/funciones/sessiones.php'; ?>
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
    <?php include_once 'include/templates/navbaradmin.php'; ?>  
    <?php
        try {
            require_once('include/funciones/bd_conexion.php');
            $usuario = $_SESSION['IDusuarioPre'];
            $sql = "SELECT usuariosComprobanteID, usuarioPreInscritoID ,montoPagado, fechaCreacion, verificacionComprobante, Case WHEN verificacionComprobante = '1' then 'Verificado' WHEN verificacionComprobante = '0' then 'Rechazado' ELSE 'Sin Verificar' END AS verificacionComprobante, Case WHEN verificacionComprobante = '1' then 'success' WHEN verificacionComprobante = '0' THEN 'warning' ELSE 'primary' END AS color FROM usuarioscomprobante WHERE usuarioPreInscritoID = $usuario;";
            $resultado = $conn->query($sql);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

    ?>
      
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3 class="title">Pagos <span>/ Bienvenido</span></h3>
                    </div>
                </div><!-- Page Heading End -->
            </div><!-- Page Headings End -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="buttons-group">
                    <a class="button button-outline button-primary" href="comprobantepago.php">Documentar Pago</a>
                </div>
            </div>

            <div class="col-12">
                    <!-- News & Updates Wrap Start -->
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Pagos Realizados</h4>
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
                                        <h4 class="title"><a href="#">Mis pagos</a></h4>
                                        <!-- Meta -->
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-vertical-middle">
                                            <thead>
                                                <th>Monto pagado</th>
                                                <th>Fecha pago</th>
                                                <th>Estatus</th>
                                            </thead>
                                            <?php while ($usuarios = $resultado->fetch_assoc()) { ?>
                                            <tbody>
                                                <td>$<?php echo $usuarios['montoPagado']?></td>
                                                <td><?php echo $usuarios['fechaCreacion']?></td>
                                                <td><span class="badge badge-<?php echo $usuarios['color']?>"><?php echo $usuarios['verificacionComprobante']?></span></td>
                                            </tbody>
                                            <?php } ?>
                                            <?php
                                            $conn->close();
                                            ?>
                                        </table>
                                    </div>
                                </div>
                                <!--Default Uploader End-->
                            </div><!-- News & Updates Inner End -->
                        </div>
                    </div><!-- News & Updates Wrap End -->
                </div><!-- News & Updates End -->

        </div><!-- Content Body End -->

    <?php include_once 'include/templates/footer.php'; ?> 
    </div>

</body>
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
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
    <script src="admin-ajax.js"></script>
</html>