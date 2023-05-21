<?php include_once 'include/funciones/sessionesadministrador.php'; ?>
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
    <?php include_once 'include/templates/navbaradmin2.php'; ?>  
    
      
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3 class="title">Usuarios Comprobante <span>/ Bienvenido</span></h3>
                    </div>
                </div><!-- Page Heading End -->
            </div><!-- Page Headings End -->

            <?php
                try {
                    require_once('include/funciones/bd_conexion.php');
                    $sql = "SELECT a.usuarioPreInscritoID,a.nombre,a.email,a.telefono,b.descripcionArchivo, b.estatus, Case WHEN b.verificacionComprobante = '1' then 'Verificado' ELSE 'Sin Verificar' END AS verificacionComprobante, Case WHEN b.verificacionComprobante = '1' then 'success' ELSE 'warning' END AS color  FROM usuariopreinscritos a INNER JOIN usuarioscomprobante b ON a.usuarioPreInscritoID = b.usuarioPreInscritoID";
                    $resultado = $conn->query($sql);
                } catch (\Exception $e) {
                    echo $e->getMessage();
                }

            ?>
                            
            <div class="col-md-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Comprobantes</h4>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-vertical-middle">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Telefono</th>
                                            <th>Estatus</th>
                                            <th>Archivo</th>
                                            <th>Aceptar Comprobante</th>
                                            <th>Rechazar Comprobante</th>
                                        </tr>
                                    </thead>
                                    <?php while ($usuarios = $resultado->fetch_assoc()) { ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $usuarios['usuarioPreInscritoID']?></td>
                                            <td><?php echo $usuarios['nombre']?></td>
                                            <td><?php echo $usuarios['email']?></td>
                                            <td><?php echo $usuarios['telefono']?></td>
                                            <td><span class="badge badge-<?php echo $usuarios['color']?>"><?php echo $usuarios['verificacionComprobante']?></span></td>
                                            <td>
                                                <div class="table-action-buttons">
                                                    <a class="view button button-box button-xs button-danger" href="comprobantes/<?php echo $usuarios['descripcionArchivo']?>" target="_blank"><i class="fa fa-file-pdf-o"></i></a>
                                                </div>
                                            </td>
                                            <td>
                                                <form role="form" name="form-validacion" id="form-validacion" method="post" action="include/funciones/acciones.php">
                                                    <div class="table-action-buttons">
                                                        <input type="hidden" name="validacion-b-correcta" value="1">
                                                        <input type="hidden" name="usuarioID" value="<?php echo $usuarios['usuarioPreInscritoID']?>">
                                                        <button type="submit" name="validacion-b-correcta" class="edit button button-box button-xs button-success"><i class="ti-check"></i></button>
                                                    </div>
                                                </form>
                                            </td>
                                            <td>
                                                <form role="form" name="form-validacion-mal" id="form-validacion-mal"  method="post" action="include/funciones/acciones.php">
                                                    <div class="table-action-buttons">
                                                        <input type="hidden" name="validacion-b-incorrecta" value="1">
                                                        <input type="hidden" name="usuarioID2" value="<?php echo $usuarios['usuarioPreInscritoID']?>">
                                                        <button type="submit" name="validacion-b-incorrecta" class="delete button button-box button-xs button-danger"><i class="ti-close"></i></button>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        <?php
                                        $conn->close();
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


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