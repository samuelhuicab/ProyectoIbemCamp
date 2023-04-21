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
                        <div class="subheader" id="quote"></div>
                        <div class="row">
                            <aside class="col-xl-3 col-lg-4">
                                <h2>Responde este cuestionario</h2>
                                <p class="lead">Con esta información haremos equipos mas equilibrados para que todos tengan una mejor experiencia.</p>
                                <ul class="list_ok">
                                    <li>Dedica un tiempo para responder este cuestionario</li>
                                    <li>Sé 100% sincero con tus respuestas para tener equipos más equilibrados.</li>
                                </ul>
                            </aside>

                            <div class="col-xl-9 col-lg-8">
                                <div id="wizard_container">
                                    <div id="top-wizard">
                                        <strong>Progress</strong>
                                        <div id="progressbar"></div>
                                    </div><!-- /top-wizard -->

                                    <form name="formsquad" id="formsquad" method="post" action="altainscripcion.php">
                                        <input id="website" name="website" type="text" value=""><!-- Leave for security protection, read docs for details -->
                                        <div id="middle-wizard">
                                            <div class="step">
                                                <h3 class="main_question"><strong>1/4</strong>¿Cómo consideras tu habilidad atletica?</h3>

                                                <div class="form-group radio_questions">
                                                    <label>Muy buena
                                                        <input name="question_1" type="radio" value="Muy buena" class="icheck required">
                                                    </label>
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>Buena
                                                        <input name="question_1" type="radio" value="Buena" class="icheck required">
                                                    </label>
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>Ni malo ni bueno
                                                        <input name="question_1" type="radio" value="Ni malo ni bueno" class="icheck required">
                                                    </label>
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>Malo
                                                        <input name="question_1" type="radio" value="Malo" class="icheck required">
                                                    </label>
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>Muy malo
                                                        <input name="question_1" type="radio" value="Muy malo" class="icheck required">
                                                    </label>
                                                </div>

                                            </div><!-- /step 1-->

                                            <div class="step">
                                                <h3 class="main_question"><strong>2/4</strong>What your poject need?</h3>

                                                <div class="row add_bottom_30">

                                                    <div class="col-sm-6">
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="question_2[]" type="checkbox" value="Custom interface and layout" class="icheck required">Custom interface and layout
                                                            </label>
                                                        </div>
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="question_2[]" type="checkbox" value="Web site design" class="icheck required">Web site design
                                                            </label>
                                                        </div>
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="question_2[]" type="checkbox" value="Seo optimization" class="icheck required">Seo optimization
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="question_2[]" type="checkbox" value="CMS integrations (Wordpress)" class="icheck required">CMS integrations (Wordpress)
                                                            </label>
                                                        </div>
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="question_2[]" type="checkbox" value="Domain registration" class="icheck required">Domain registration
                                                            </label>
                                                        </div>
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="question_2[]" type="checkbox" value="Hosting plan" class="icheck required">Hosting plan
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div><!-- /row-->
                                                <div class="form-group textarea_info">
                                                    <label>Additional info</label>
                                                    <textarea name="addtional_info" class="form-control" style="height:150px;" placeholder="How many pages, other details, etc..."></textarea>
                                                </div>
                                            </div><!-- /step 2-->

                                            <div class="step">
                                                <h3 class="main_question"><strong>3/4</strong>Please answer the following questions:</h3>

                                                <div class="row">

                                                    <div class="col-lg-10">
                                                        <div class="form-group select">
                                                            <label>If you already have an hosting plan, please define:</label>
                                                            <div class="styled-select">
                                                                <select class="required" name="select_1">
                                                                    <option value="" selected>Select</option>
                                                                    <option value="Unix/Linux + Mysql">Unix/Linux + Mysql</option>
                                                                    <option value="Windows + Sql">Windows + Sql</option>
                                                                    <option value="Other">Other</option>
                                                                </select>
                                                            </div>
                                                        </div><!-- /select-->

                                                        <div class="form-group select">
                                                            <label>If you need an hosting plan, please define which one:</label>
                                                            <div class="styled-select">
                                                                <select class="required" name="select_2">
                                                                    <option value="" selected>Select</option>
                                                                    <option value="Hosting Plan 1 year + Mysql database 500MB">1 year + Mysql database 500MB</option>
                                                                    <option value="Hosting Plan 2 year + Mysql database 500MB">2 year + Mysql database 500MB</option>
                                                                    <option value="Hosting Plan 2 year + Mysql database 1GB">2 year + Mysql database 1GB</option>
                                                                </select>
                                                            </div>
                                                        </div><!-- /select-->

                                                        <div class="form-group select">
                                                            <label>If you need a newsletter campaign, please define the provider you prefer:</label>
                                                            <div class="styled-select">
                                                                <select class="required" name="select_3">
                                                                    <option value="" selected>Select</option>
                                                                    <option value="Mailchimp">Mailchimp</option>
                                                                    <option value="CampaignMonitor">CampaignMonitor</option>
                                                                    <option value="MailUp">MailUp</option>
                                                                </select>
                                                            </div>
                                                        </div><!-- /select-->
                                                    </div>
                                                </div><!-- /row-->
                                            </div><!-- /step 3-->

                                            <div class="step">
                                                <h3 class="main_question"><strong>4/5</strong>Please answer the following questions:</h3>
                                                <div class="row">

                                                    <div class="col-lg-10">
                                                        <div class="form-group select">
                                                            <label>Hola que haces:</label>
                                                            <div class="styled-select">
                                                                <select class="required" name="select_1">
                                                                    <option value="" selected>Select</option>
                                                                    <option value="Unix/Linux + Mysql">Unix/Linux + Mysql</option>
                                                                    <option value="Windows + Sql">Windows + Sql</option>
                                                                    <option value="Other">Other</option>
                                                                </select>
                                                            </div>
                                                        </div><!-- /select-->

                                                        <div class="form-group select">
                                                            <label>muy bien:</label>
                                                            <div class="styled-select">
                                                                <select class="required" name="select_2">
                                                                    <option value="" selected>Select</option>
                                                                    <option value="Hosting Plan 1 year + Mysql database 500MB">1 year + Mysql database 500MB</option>
                                                                    <option value="Hosting Plan 2 year + Mysql database 500MB">2 year + Mysql database 500MB</option>
                                                                    <option value="Hosting Plan 2 year + Mysql database 1GB">2 year + Mysql database 1GB</option>
                                                                </select>
                                                            </div>
                                                        </div><!-- /select-->

                                                        <div class="form-group select">
                                                            <label>If you need a newsletter campaign, please define the provider you prefer:</label>
                                                            <div class="styled-select">
                                                                <select class="required" name="select_3">
                                                                    <option value="" selected>Select</option>
                                                                    <option value="Mailchimp">Mailchimp</option>
                                                                    <option value="CampaignMonitor">CampaignMonitor</option>
                                                                    <option value="MailUp">MailUp</option>
                                                                </select>
                                                            </div>
                                                        </div><!-- /select-->
                                                    </div>
                                                </div><!-- /row-->
                                            </div>

                                            <div class="submit step">

                                                <h3 class="main_question"><strong>4/4</strong>Please fill with your details</h3>

                                                <div class="row">

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" name="company_name" class="form-control" placeholder="Your company name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="firstname" class="required form-control" placeholder="First name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="lastname" class="required form-control" placeholder="Last name">
                                                        </div>
                                                    </div><!-- /col-sm-6 -->

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="email" name="email" class="required form-control" placeholder="Your Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="telephone" class="required form-control" placeholder="Your Telephone">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="styled-select">
                                                                <select class="required" name="country">
                                                                    <option value="" selected>Select your country</option>
                                                                    <option value="Europe">Europe</option>
                                                                    <option value="Asia">Asia</option>
                                                                    <option value="North America">North America</option>
                                                                    <option value="South America">South America</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div><!-- /col-sm-6 -->
                                                </div><!-- /row -->

                                                <div class="form-group checkbox_questions">
                                                    <input name="terms" type="checkbox" class="icheck required" value="yes">
                                                    <label>Please accept <a href="#" data-bs-toggle="modal" data-bs-target="#terms-txt">terms and conditions</a> ?
                                                    </label>
                                                </div>

                                            </div><!-- /step 4-->

                                        </div><!-- /middle-wizard -->
                                        <div id="bottom-wizard">
                                            <button type="button" name="backward" class="backward">Atras </button>
                                            <button type="button" name="forward" class="forward">Siguiente</button>
                                            <button type="submit" name="process" class="submit">Submit</button>
                                        </div><!-- /bottom-wizard -->
                                    </form>
                                </div><!-- /Wizard container -->

                            </div><!-- /col -->
                        </div><!-- /row -->
                        </div><!-- /TAB 1:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

                    <div class="tab-pane fade" id="tab_2">
                       <div class="subheader" id="about"></div>
                        <div class="row">
                            <div class="col-lg-8">
                                <h2>Welcome to Quote</h2>
                                <p class="lead">An mei sadipscing dissentiet, eos ea partem viderer facilisi. Brute nostrud democritum in vis, nam ei erat zril mediocrem. No postea diceret vix. Mei eu scripta dolorum voluptatibus, id omnes repudiare pri.</p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="box_feat" id="icon_1">
                                            <span></span>
                                            <h3>Responsive site design</h3>
                                            <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box_feat" id="icon_2">
                                            <span></span>
                                            <h3>Web site check</h3>
                                            <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel.</p>
                                        </div>
                                    </div>
                                    </div><!-- /row -->
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="box_feat" id="icon_3">
                                            <h3>Email campaigns</h3>
                                            <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box_feat" id="icon_4">
                                            <h3>Seo optimization</h3>
                                            <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel.</p>
                                        </div>
                                    </div>
                                </div><!-- /row -->
                                  <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="about_info">
                                                <i class="pe-7s-news-paper"></i>
                                                <h4>A brief about Quote<span>Suas summo id sed, erat erant oporteat cu pri.</span></h4>
                                                <p>Cum iusto nonumes dignissim ad, movet vocent ceteros nec ut. Eu putent utroque ius, ei usu purto doctus, ludus nostrud consectetuer ex pri. Maiorum petentium similique duo id. Sea ex nostro offendit, ius sumo electram theophrastus et. Nam eu dolore aliquid laoreet, ei eos tacimates assueverit inciderint. His deserunt recteque consequat in. Vis mucius virtute consequat ad, suavitate interesset an mei, oporteat temporibus at sea.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about_info">
                                                <i class="pe-7s-light"></i>
                                                <h4>Mission<span>Suas summo id sed, erat erant oporteat cu pri.</span></h4>
                                                <p>Cum iusto nonumes dignissim ad, movet vocent ceteros nec ut. Eu putent utroque ius, ei usu purto doctus, ludus nostrud consectetuer ex pri. Maiorum petentium similique duo id. Sea ex nostro offendit, ius sumo electram theophrastus et. Nam eu dolore aliquid laoreet, ei eos tacimates assueverit inciderint. His deserunt recteque consequat in. Vis mucius virtute consequat ad, suavitate interesset an mei, oporteat temporibus at sea.</p>
                                            </div>
                                        </div>
                                    </div><!-- /row -->
                            </div><!-- /col -->

                            <aside class="col-lg-4">
                                <div class="more_padding_left">
                                    <div class="widget" id="review">
                                        <h4>reviews</h4>
                                        <div class="owl-carousel owl-theme add_bottom_30">
                                            <div class="item">
                                                <blockquote class="testimonial">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Donec hendrerit vehicula est, in consequat. Donec hendrerit vehicula est, in consequat.
                                                    </p>
                                                </blockquote>
                                                <div class="testimonial-arrow-down">
                                                </div>
                                                <div class="testimonial-author">
                                                    <div class="img-thumbnail img-thumbnail-small">
                                                        <img src="img/avatar1.jpg" alt="">
                                                    </div>
                                                    <p>
                                                        <strong>Mark Smith</strong><span>October 2016</span>
                                                    </p>
                                                </div>
                                            </div><!-- /item -->
                                            <div class="item">
                                                <blockquote class="testimonial">
                                                    <p>
                                                        Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Donec hendrerit vehicula est, in consequat. Donec hendrerit vehicula est, in consequat.
                                                    </p>
                                                </blockquote>
                                                <div class="testimonial-arrow-down">
                                                </div>
                                                <div class="testimonial-author">
                                                    <div class="img-thumbnail img-thumbnail-small">
                                                        <img src="img/avatar2.jpg" alt="">
                                                    </div>
                                                    <p>
                                                        <strong>Mark Smith</strong><span>September 2016</span>
                                                    </p>
                                                </div>
                                            </div><!-- /item -->
                                            <div class="item">
                                                <blockquote class="testimonial">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Donec hendrerit vehicula est, in consequat.
                                                    </p>
                                                </blockquote>
                                                <div class="testimonial-arrow-down">
                                                </div>
                                                <div class="testimonial-author">
                                                    <div class="img-thumbnail img-thumbnail-small">
                                                        <img src="img/avatar3.jpg" alt="">
                                                    </div>
                                                    <p>
                                                        <strong>Mark Smith</strong><span>July 2016</span>
                                                    </p>
                                                </div>
                                            </div><!-- /item -->
                                        </div><!-- /carousel -->
                                    </div><!-- /reviews -->
                                    <div class="widget" id="gallery">
                                        <h4>gallery</h4>
                                        <ul class="magnific-gallery">
                                            <li>
                                                <a href="img/gallery/large_1.jpg" title="image title">
                                                    <figure><img src="img/gallery/thumb_1.jpg" alt="thumb"></figure>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="img/gallery//large_2.jpg" title="image title">
                                                    <figure><img src="img/gallery/thumb_2.jpg" alt="thumb"></figure>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="img/gallery/large_3.jpg" title="image title">
                                                    <figure><img src="img/gallery/thumb_3.jpg" alt="thumb"></figure>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="img/gallery/large_4.jpg" title="image title">
                                                    <figure><img src="img/gallery/thumb_2.jpg" alt="thumb"></figure>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="img/gallery/large_5.jpg" title="image title">
                                                    <figure><img src="img/gallery/thumb_3.jpg" alt="thumb"></figure>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- /gallery -->
                                     <div class="widget" id="follow">
                                        <h4>follow us</h4>
                                        <ul>
                                            <li><a href="#"><i class="icon-facebook"></i>Facebook</a></li>
                                            <li><a href="#"><i class="icon-twitter"></i>Twitter</a></li>
                                            <li><a href="#"><i class="icon-google"></i>Google plus</a></li>
                                            <li><a href="#"><i class="icon-instagram"></i>Instagram</a></li>
                                        </ul>
                                    </div><!-- /follow -->
                                </div><!-- /more padding left -->
                            </aside>
                        </div><!-- /row -->
                    </div><!-- /TAB 2:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

                    <div class="tab-pane fade" id="tab_3">

                        <div id="map_contact"></div><!-- /map -->

                        <div id="contact_info">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="box_contact">
                                        <i class="pe-7s-map-marker"></i>
                                        <h4>Address</h4>
                                        <p>Duo magna vocibus electram ad. Sit an amet aeque legimus, paulo mnesarchum et mea, et pri quodsi singulis.</p>
                                        <p>11 Fifth Ave - New York, 45 001238 - USA</p>
										<a href="https://www.google.com/maps/dir//11+5th+Ave,+New+York,+NY+10003,+Stati+Uniti/@40.7322935,-73.9981148,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x89c25990b3af8bb9:0x854ae1d3553155!2m2!1d-73.9959261!2d40.7322935!3e0" class="btn_1" target="_blank">Get directions</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box_contact">
                                        <i class="pe-7s-mail-open-file"></i>
                                        <h4>Email and website</h4>
                                        <p>Duo magna vocibus electram ad. Sit an amet aeque legimus, paulo mnesarchum et mea, et pri quodsi singulis.</p>
                                        <p>
                                            <strong>Email:</strong> <a href="#0">support@domain.com</a><br>
                                            <strong>Website:</strong> <a href="#0">www.quote.com</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box_contact">
                                        <i class="pe-7s-call"></i>
                                        <h4>Telephone</h4>
                                        <p>Duo magna vocibus electram ad. Sit an amet aeque legimus, paulo mnesarchum et mea, et pri quodsi singulis.</p>
                                        <p>
                                        	<strong>Tel:</strong> <a href="#0">+44 543 53433</a><br>
                                            <strong>Fax:</strong> <a href="#0">+44 543 5322</a>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- / row-->
                            <hr>
                            <div id="social">
                                <ul>
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-google"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                </ul>
                            </div><!-- /social -->
                        </div>
                    </div><!-- /TAB 3:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

                </div><!-- /tab content -->
            </div><!-- /container-fluid -->
        </div><!-- /wrapper_in -->
    </div><!-- /main_container -->

    <div id="additional_links">
        <ul>
            <li>© Quote</li>
            <li><a href="#0" class="animated_link">Purchase this template</a></li>
            <li><a href="index_2.html" class="animated_link">Demo Slider</a></li>
			<li><a href="index_3.html" class="animated_link">With UPLOAD</a></li>
            <li><a href="index_4.html" class="animated_link">With Branch</a></li>
            <li><a href="index_5.html" class="animated_link">Full Page View</a></li>
            <li><a href="shortcodes.html" class="animated_link">Shortcodes</a></li>
        </ul>
    </div><!-- /add links -->

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
    <script src="js/jquery-3.6.1.min.js"></script>
    <!-- Common script -->
    <script src="js/common_scripts_min.js"></script>
    <!-- Theme script -->
    <script src="js/functions_no_side_panel.js"></script>
    <!-- Google map -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="js/mapmarker.jquery.js"></script>
    <script src="js/mapmarker_func.jquery.js"></script>

</body>

</html>
