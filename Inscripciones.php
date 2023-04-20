<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Campamento Juvenil IBEM">
    <meta name="keywords" content="IGLESIA, bautista, campamento, El Mesias">
    <meta name="author" content="Samuel_Huicab">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page Title -->
    <title>Campamento Juvenil IBEM</title>

    <link rel="icon" href="img/favicon/demo/favicon.ico" sizes="any">
    <link rel="icon" href="img/favicon/demo/icon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="img/favicon/demo/apple-touch-icon.png">
    <link rel="manifest" href="img/favicon/demo/manifest.webmanifest">
    <!-- Template Favicon & Icons End -->

    <!-- Facebook Metadata Start -->
    <meta property="og:image:height" content="1200">
    <meta property="og:image:width" content="1200">
    <meta property="og:title" content="Campamento Juvenil IBEM">
    <meta property="og:description" content="Campamento Juvenil IBEM">
    <!-- Facebook Metadata End -->

    <!-- Template Styles Start -->
    <link rel="stylesheet" type="text/css" href="css/plugins-demo.css">
    <link rel="stylesheet" type="text/css" href="css/main-demo.css">
    <!-- Template Styles End -->

    <!-- Custom Browser Color Start -->
    <meta name="theme-color" content="#0c0426">
    <meta name="msapplication-navbutton-color" content="#0c0426">
    <meta name="apple-mobile-web-app-status-bar-style" content="#0c0426">
    <!-- Custom Browser Color End -->
</head>
<body class="overflow-hidden">

<!-- Loader Start -->
<div class="loader">
  <div class="loader__content">
    <div class="loader__logo fadeIn">
      <!-- Your Logo Here -->
      <!-- <img src="img/demo/logo-loader.svg" alt="Oomph - Coming Soon & Landing Page Template"> -->
    </div>
  </div>
</div>
<!-- Loader End -->

<!-- Page Content Start -->

<!-- Intro Section Start -->
<section class="intro fullscreen">

  <div class="color-layer color-layer-mobile color-layer-dark"></div>

  <header class="intro__header">
    <div class="container-fluid px-4">
      <div class="row gx-5">
        <div class="col-12">
          <div class="logo">
            <!-- <img src="img/demo/logo-demo.svg" alt="Oomph - Coming Soon and Landing Page Template"> -->
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="intro__content">

    <div class="headline">
      <div class="container-fluid px-4">
          <div class="row gx-5">
            <div class="col-12">
              <span class="headline__subtitle">!Bienvenidos al campamento juvenil "Blindados"¡</span>
              <h1 class="animated-headline">
                <span id="typed-strings">
                  <b>Blindados</b>
                  <b>Blindados</b>
                  <b>Fuertes</b>
                  <b>Resistentes</b>
                  <b>Armados</b>
                  <b>Fortificados</b>
                  <b>Protegidos</b>
                  <b>Cercados</b>
                  <b>Seguros</b>
                </span>
                <span id="typed"></span>
              </h1>
              <p>¡Hola! ¡Bienvenidos al campamento Blindados! Aquí en Blindados, encontrarás una experiencia emocionante y llena de desafíos que te ayudarán a crecer y a prepararte para enfrentar cualquier situación en la vida.
              </p>
              <div class="headline__btngroup">
                <!-- <a class="btn btn-solid" href="http://themeforest.net/cart/add_items?item_ids=29733294" target="_blank">
                  <span class="btn-caption">Buy Now</span>
                </a> -->
                <a href="#live-preview" class="btn btn-outline-light scroll-to-preview">
                  <span class="btn-caption">Llenar Formulario</span>
                </a>
              </div>
            </div>
          </div>
      </div>
    </div>

  </div>

  <a href="#live-preview" class="intro__scroll scroll-to-preview">
    <span></span>
  </a>

</section>
<!-- Intro Section End -->

<!-- Live Preview Links Start -->
<section id="live-preview" class="demo bg-medium first-section">

  <div class="demo__title">
    <div class="container-fluid px-4">
      <div class="row gx-5">
        <div class="col-12 col-xl-6">
          <h2>Formulario Pre Inscripción</h2>
          <p class="title__text">Llena este formulario para hacer una preinscripcion y ocupar tu lugar.
            Asi será una manera más sencilla para todos.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="demo__links">
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-12">
                <form class="form form-dark notify-form" name="form-pre" id="form-pre" method="post" action="altainscripcion.php">
                    <div class="container-fluid px-4">
                        <div class="row gx-5">
                          <div class="col-4">
                            <input class="margin-s transition-el transition-el-4" name="nomb" type="text" placeholder="Nombre Completo*" required>
                            <span class="inputs-description transition-el transition-el-4">*Requerido</span>
                          </div>
                          <div class="col-4">
                            <input class="margin-s transition-el transition-el-4" name="email" type="email" placeholder="Correo Electronico*" required>
                            <span class="inputs-description transition-el transition-el-4">*Requerido</span>
                          </div>
                          <div class="col-4">
                            <input class="margin-s transition-el transition-el-4" name="tel" type="number" placeholder="Número Telefonico*" required>
                            <span class="inputs-description transition-el transition-el-4">*Requerido</span>
                          </div>
                          <div class="col-4">
                            <input class="margin-s transition-el transition-el-4" name="nac" type="date" step="1" max="2010-01-01" value="2010-01-01" placeholder="Fecha Nacimiento*" required>
                            <span class="inputs-description transition-el transition-el-4">*Requerido</span>
                          </div>
                          <div class="col-4">
                            <input class="margin-s transition-el transition-el-4" name="iglesia" type="text" placeholder="Iglesia a la que pertenece">
                            <span class="inputs-description transition-el transition-el-4">Opcional</span>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <input type="hidden" name="register" value="1">
                            <button name="register" type="submit" class="btn btn-primary btn-block">Pre Inscribir</button>
                          </div>
                        </div>
                      </div>
                </form>
            </div>
        </div>
  </div>


</section>
<!-- Live Preview Links End -->

<!-- Footer Start -->
<footer class="footer">
  <div class="container-fluid px-4">
    <div class="row gx-5">
      <div class="col-12">
        <div class="footer__content">
          <div class="footer__logo">
            <!-- <img src="img/demo/logo-demo.svg" alt=""> -->
          </div>
          <p class="footer__caption">2023 Campamento Juvenil IBEM<br>
          </p>
          <div class="footer__btngroup">
            <a class="btn btn-l btn-solid" href="index.php">
              <span class="btn-caption">Inicio</span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="footer__links">
          <div class="container-fluid px-0">
            <div class="row gx-0">
              <div class="col-12 col-xl-6">
                <p>¿Dudas? Escribenos a este correo.
                  <a href="mailto:support@mixdesign.club?subject=Message%20from%20your%20site">IBEM@GMAIL.COM</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Footer End -->

<!-- To Top Button Start -->
<a href="#0" id="to-top" class="to-top">
  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      width="512px" height="512px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
     <polygon points="416,235.3 256,64 96,235.3 115.3,256 241.8,120.7 241.8,457.7 269.8,457.7 269.8,120.3 396.6,256 "/>
  </svg>
</a>
<!-- To Top Button End -->

<!-- Page Content End -->

<!-- Load Scripts Start -->
<script src="js/demo/jquery.min.js"></script>
<script src="js/demo/modernizr.js"></script>
<script src="js/demo/typed.min.js"></script>
<script src="js/demo/demo.js"></script>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
<script src="administracion/admin-ajax.js"></script>
<!-- Load Scripts End -->

</body>
</html>