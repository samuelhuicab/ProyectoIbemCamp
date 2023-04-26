
<div class="header-section">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">

                    <!-- Header Logo (Header Left) Start -->
                    <div class="header-logo col-auto">
                        <a href="index2.php">
                            <img src="img/logo2.png" alt="">
                            <img src="img/logo2.png" class="logo-light" alt="">
                        </a>
                    </div><!-- Header Logo (Header Left) End -->

                    <!-- Header Right Start -->
                    <div class="header-right flex-grow-1 col-auto">
                        <div class="row justify-content-between align-items-center">

                            <!-- Side Header Toggle & Search Start -->
                            <div class="col-auto">
                                <div class="row align-items-center">

                                    <!--Side Header Toggle-->
                                    <div class="col-auto"><button class="side-header-toggle"><i class="zmdi zmdi-menu"></i></button></div>


                                </div>
                            </div><!-- Side Header Toggle & Search End -->

                            <!-- Header Notifications Area Start -->
                            <div class="col-auto">

                                <ul class="header-notification-area">

                                    <!--Language-->
                                    <li class="adomx-dropdown position-relative col-auto">
                                        <a class="toggle" href="#"><img class="lang-flag" src="assets/images/flags/flag-3.jpg" alt=""><i class="zmdi zmdi-caret-down drop-arrow"></i></a>

                                        <!-- Dropdown -->
                                        <ul class="adomx-dropdown-menu dropdown-menu-language">
                                            <li><a href="#"><img src="assets/images/flags/flag-3.jpg" alt="">Español </a></li>
                                            <li><a href="#"><img src="assets/images/flags/flag-1.jpg" alt=""> English</a></li>
                                        </ul>

                                    </li>
                                    <!--User-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#">
                                            <span class="user">
                                        <span class="avatar">
                                            <!-- <img src="assets/images/avatar/avatar-1.jpg" alt=""> -->
                                            <span class="status"></span>
                                            </span>
                                            <span class="name"><span class="name"><?php echo $_SESSION['nombreAdmin']?></span></span>
                                            </span>
                                        </a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-user">
                                            <div class="head">
                                                <h5 class="name"><a href="#"><?php echo $_SESSION['nombreAdmin']?></a></h5>
                                            </div>
                                            <div class="body">
                                                <ul>
                                                    <li><a href="altausuarios.php"><i class="zmdi zmdi-account"></i>Alta Usuarios</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-settings"></i>Tiempo Caducidad Token</a></li>
                                                    <li><a href="login_admin.php?cerrar_session=true"><i class="zmdi zmdi-lock-open"></i>Cerrar Sesión</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </li>

                                </ul>

                            </div><!-- Header Notifications Area End -->

                        </div>
                    </div><!-- Header Right End -->

                </div>
            </div>
        </div><!-- Header Section End -->

        <div class="side-header show">
            <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
            <!-- Side Header Inner Start -->
            <div class="side-header-inner custom-scroll">

                <nav class="side-header-menu" id="side-header-menu">
                    <ul>
                        <li><a href="index2.php"><i class="ti-home"></i> <span>Inicio</span></a></li>
                        <li class="has-sub-menu"><a href="#"><i class="fa fa-id-card"></i> <span>Mantenimiento</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="altausuarios.php"><span>Alta Usuarios</span></a></li>
                                <li><a href="tiempocaducidad.php"><span>Tiempo Caducidad Token</span></a></li>
                            </ul>
                        </li>
                        <li><a href="usuariospreinscritos.php"><i class="fa fa-wpforms"></i> <span>Personas Pre Inscritas</span></a></li>
                        <li><a href="visualizacomprobante.php"><i class="fa fa-wpforms"></i> <span>Personas Comprobante</span></a></li>
                        <li><a href="../cuestionario/index.php"><i class="fa fa-wpforms"></i> <span>Personas Cuestionario</span></a></li>
                    </ul>
                </nav>

            </div><!-- Side Header Inner End -->
        </div><!-- Side Header End -->