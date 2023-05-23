<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="QUOTE - Request a quote for every type of companies">
    <meta name="author" content="Ansonika">
    <title>Campamento Juvenil IBEM</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
    <link href="css/magnific-popup.min.css" rel="stylesheet">
    <link href="css/skins/square/yellow.css" rel="stylesheet">
    

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="../css/whatsapp.css" rel="stylesheet">
    

</head>

<body>

    <div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /Loader_form -->



    <div id="main_container" class="visible">

        <!-- <div id="header_in">
            <div id="logo_in"><a href="index.html"><img src="img/logo_black.png" width="160" height="48" alt="Quote"></a></div>
        </div> -->

        <div class="wrapper_in">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab_1">
                        <div class="row">
                            <aside class="col-xl-3 col-lg-4">
                                <h2>Responde este cuestionario</h2>
                                <p class="lead">Con esta información haremos equipos mas equilibrados para que todos tengan una mejor experiencia.</p>
                                <ul class="list_ok">
                                    <li>Dedica un tiempo para responder este cuestionario</li>
                                    <li>Sé 100% sincero con tus respuestas para tener equipos más equilibrados.</li>
                                    <li>Los archivos serán validados</li>
                                    <li>Para poderte registrar ya debiste haber pagado o abonado para el campamento</li>
                                </ul>
                            </aside>

                            <div class="col-xl-9 col-lg-8">
                                <div id="wizard_container">
                                    <div id="top-wizard">
                                        <strong>Progreso</strong>
                                        <div id="progressbar"></div>
                                    </div><!-- /top-wizard -->

                                    <form role="form" name="formregistronuevo" id="formregistronuevo" method="post" enctype="multipart/form-data" action="../incripcionesnueva.php">
                                        <input id="website" name="website" type="text" value=""><!-- Leave for security protection, read docs for details -->
                                        <div id="middle-wizard">
                                            <div class="step">
                                                <h3 class="main_question"><strong>1/7</strong>Ingresa tu comprobante</h3>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="fileupload">
                                                            <input type="file" name="file" id="file" class="required form-control">
                                                        </div>
                                                    </div>
                                                    <label>Ingresa el importe pagado</label>
                                                    <div class="form-group">
                                                        <input type="number" name="importe" class="required form-control" placeholder="$">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="step">
                                                <h3 class="main_question"><strong>2/7</strong>¿Cómo consideras tu habilidad atletica?</h3>

                                                <div class="form-group radio_questions">
                                                    <label>Muy buena
                                                        <input name="pregunta_1" type="radio" value="Muy buena" class="icheck required">
                                                    </label>
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>Buena
                                                        <input name="pregunta_1" type="radio" value="Buena" class="icheck required">
                                                    </label>
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>Ni malo ni bueno
                                                        <input name="pregunta_1" type="radio" value="Ni malo ni bueno" class="icheck required">
                                                    </label>
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>Malo
                                                        <input name="pregunta_1" type="radio" value="Malo" class="icheck required">
                                                    </label>
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>Muy malo
                                                        <input name="pregunta_1" type="radio" value="Muy malo" class="icheck required">
                                                    </label>
                                                </div>

                                            </div><!-- /step 1-->

                                            <div class="step">
                                                <h3 class="main_question"><strong>3/7</strong>¿Practicas algún deporte? si es sí, escribe cúal es</h3>
                                                <div class="styled-select">
                                                        <select class="required" name="deporte">
                                                            <option value="" selected>--Seleccione--</option>
                                                            <option value="si">Si</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                </div>
                                                <div class="form-group textarea_info">
                                                    <textarea name="deporte_practica" class="form-control" style="height:150px;" placeholder=""></textarea>
                                                </div>
                                            </div><!-- /step 2-->

                                            <div class="step">
                                                <h3 class="main_question"><strong>4/7</strong>¿Te consideras bueno en algún arte?</h3>
                                                <div class="styled-select">
                                                        <select class="required" name="arte">
                                                            <option value="" selected>--Seleccione--</option>
                                                            <option value="si">Si</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group textarea_info">
                                                        <textarea name="arte_practica" class="form-control" style="height:150px;" placeholder="como canto, actuación, dibujo, etc."></textarea>
                                                    </div>
                                                </div><!-- /row -->
                                            </div>

                                            <div class="step">
                                                <h3 class="main_question"><strong>5/7</strong>¿Cómo te consideras en conocimiento bíblico?</h3>

                                                <div class="form-group radio_questions">
                                                    <label>Muy bueno
                                                        <input name="pregunta_5" type="radio" value="Muy buena" class="icheck required">
                                                    </label>
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>Bueno
                                                        <input name="pregunta_5" type="radio" value="Buena" class="icheck required">
                                                    </label>
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>Ni malo ni bueno
                                                        <input name="pregunta_5" type="radio" value="Ni malo ni bueno" class="icheck required">
                                                    </label>
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>Malo
                                                        <input name="pregunta_5" type="radio" value="Malo" class="icheck required">
                                                    </label>
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>Muy malo
                                                        <input name="pregunta_5" type="radio" value="Muy malo" class="icheck required">
                                                    </label>
                                                </div>

                                            </div><!-- /step 1-->

                                            <div class="step">
                                                <h3 class="main_question"><strong>6/7</strong>Constesta</h3>
                                                <div class="form-group">
                                                <label>Consideras que los demás te ven como un líder.</label>
                                                    <div class="styled-select">
                                                        <select class="required" name="lider">
                                                            <option value="" selected>--Seleccione--</option>
                                                            <option value="si">Si</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                <label>Anteriormente asististe a un campamento juvenil</label>
                                                    <div class="styled-select">
                                                        <select class="required" name="anteriorasis">
                                                            <option value="" selected>--Seleccione--</option>
                                                            <option value="si">Si</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                <label>¿Asistes a alguna Iglesia?</label>
                                                    <div class="styled-select">
                                                        <select class="required" name="iglesia">
                                                            <option value="" selected>--Seleccione--</option>
                                                            <option value="si">Si</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                    <label>Si tu respuesta es si, indica a qué iglesia asistes.</label>
                                                    <div class="form-group textarea_info">
                                                        <textarea name="iglesia_asistencia" class="form-control" style="height:150px;" placeholder=""></textarea>
                                                    </div>
                                                    <label>¿Sufres alguna alergia?</label>
                                                    <div class="styled-select">
                                                        <select class="required" name="alergia">
                                                            <option value="" selected>--Seleccione--</option>
                                                            <option value="si">Si</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                    <label>Si tu respuesta es si, indica a qué.</label>
                                                    <div class="form-group textarea_info">
                                                        <textarea name="alergia_sufre" class="form-control" style="height:150px;" placeholder=""></textarea>
                                                    </div>
                                                    <label>Mencionanos cómo es que te gusta que te digan.</label>
                                                    <div class="form-group textarea_info">
                                                        <textarea name="apodo" class="form-control required" style="height:150px;" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div><!-- /step 2-->


                                            <div class="submit step">
                                                <h3 class="main_question"><strong>7/7</strong>Ya estamos por finalizar</h3>

                                                <div class="row">

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <label>Nombre Completo</label>
                                                            <input type="text" name="nombre" class="required form-control" placeholder="Nombre completo">
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Número Telefonico</label>
                                                            <input type="number" name="telefono" class="required form-control" placeholder="Número telefonico">
                                                        </div>
                                                    </div><!-- /col-sm-6 -->
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <label>Correo Electronico</label>
                                                            <input type="email" name="email" class="required form-control" placeholder="Email">
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Fecha de nacimiento</label>
                                                            <input type="date" name="nacimiento" step="1" max="2010-07-19" value="2010-07-19" class="required form-control" placeholder="Fecha de nacimiento">
                                                        </div>
                                                        <input name="enviar" type="hidden" value="1">
                                                    </div>
                                                </div><!-- /row -->
                                                <!-- <div class="form-group checkbox_questions">
                                                    <input name="terms" type="checkbox" class="icheck required" value="yes">
                                                    <label>Please accept <a href="#" data-bs-toggle="modal" data-bs-target="#terms-txt">terms and conditions</a> ?
                                                    </label>
                                                </div> -->

                                            </div><!-- /step 4-->

                                        </div><!-- /middle-wizard -->
                                        <div id="bottom-wizard">
                                            <button type="button" name="backward" class="backward">Atras </button>
                                            <button type="button" name="forward" class="forward">Siguiente</button>
                                            <button type="submit" name="enviar" class="submit">Enviar</button>
                                        </div><!-- /bottom-wizard -->
                                    </form>
                                </div><!-- /Wizard container -->

                            </div><!-- /col -->
                        </div><!-- /row -->
                        </div><!-- /TAB 1:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

    <!-- Modal terms -->
    <div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Terms and conditions</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_1" data-bs-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

	<!-- SCRIPTS -->
    <!-- Jquery-->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="../administracion/admin-ajax.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <!-- Common script -->
    <script src="js/common_scripts_min.js"></script>
    <!-- Theme script -->
    <script src="js/functions_no_side_panel.js"></script>
    <!-- Google map -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="js/mapmarker.jquery.js"></script>
    <script src="js/mapmarker_func.jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=+529999703392&text=Hola, vengo de la página del campamento, tengo unas dudas, ¿me puedes ayudar a resolverlas?" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float "></i>
    </a>
</body>

</html>
