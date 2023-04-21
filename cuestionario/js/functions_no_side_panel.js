(function ($) {

	"use strict";

	/*Aside panel + nav*/
	var $Main_nav = $('.main_nav');
	var $Mc = $('#main_container');
	var $Btn_m = $('#menu-button-mobile');
	var $Tabs_c = $('.main_nav .nav-tabs a');
	
	$Tabs_c.on('click', function (e) {
		var href = $(this).attr('href');
		$('.wrapper_in').animate({
			scrollTop: $(href).offset().top
		}, 'fast');
		e.preventDefault();
		if ($(window).width() <= 767) {
			$Btn_m.removeClass("active");
			$Main_nav.slideToggle(300);
		}
	});
	$Btn_m.on("click", function () {
		$Main_nav.slideToggle(500);
		$(this).toggleClass("active");
	});

	$(window).on("resize", function () {
		var width = $(window).width();
		if (width <= 767) {
			$Main_nav.hide();
		} else {
			$Main_nav.show();
		}
	});
	
	/* Scroll to top small screens: chanhe the top position offset based on your content*/
	var $Scrolbt = $('button.backward,button.forward');
	var $Element = $('.wrapper_in');
	
	if( window.innerWidth < 800 ) {
		$Scrolbt.on("click", function (){
  		$Element.animate({ scrollTop: 500 }, "slow");
  	return false;
	});
	}

	if( window.innerWidth < 600 ) {
		$Scrolbt.on("click", function (){
	  	$Element.animate({ scrollTop: 610 }, "slow");
	  return false;
	});
	}

	/* Tooltip*/
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
	  return new bootstrap.Tooltip(tooltipTriggerEl)
	})

	/* Accordion*/
	function toggleChevron(e) {
		$(e.target)
			.prev('.card-header')
			.find("i.indicator")
			.toggleClass('icon_minus_alt2 icon_plus_alt2');
	}
	$('#accordion').on('hidden.bs.collapse shown.bs.collapse', toggleChevron);
		function toggleIcon(e) {
        $(e.target)
            .prev('.panel-heading')
            .find(".indicator")
            .toggleClass('icon_minus_alt2 icon_plus_alt2');
    };

	/* Video modal*/
	$('.video_modal').magnificPopup({
		type: 'iframe'
	});

	/*  Image popups */
	$('.magnific-gallery').each(function () {
		$(this).magnificPopup({
			delegate: 'a',
			type: 'image',
			gallery: {
				enabled: true
			}
		});
	});

	/* Carousel*/
	$('.owl-carousel').owlCarousel({
		items: 1,
		dots: false,
		loop: true,
		autoplay: true,
		autoHeight: true,
		autoplayTimeout: 3500,
		animateOut: 'fadeOut',
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});

	/*  Wizard */
	jQuery(function ($) {
		"use strict";
		// Chose here which method to send the email, available:
		// Simple phpmail text/plain > quote_send.php (default)
		// PHPMailer text/html > phpmailer/quote_phpmailer.php
		// PHPMailer text/html SMTP > phpmailer/quote_phpmailer_smtp.php
		// PHPMailer with html template > phpmailer/quote_phpmailer_template.php
		// PHPMailer with html template SMTP> phpmailer/quote_phpmailer_template_smtp.php
		$('form#wrapped').attr('action', 'quote_send.php');
		$("#wizard_container").wizard({
			stepsWrapper: "#wrapped",
			submit: ".submit",
			beforeSelect: function (event, state) {
				if ($('input#website').val().length != 0) {
					return false;
				}
				if (!state.isMovingForward)
					return true;
				var inputs = $(this).wizard('state').step.find(':input');
				return !inputs.length || !!inputs.valid();
			}
		}).validate({
			errorPlacement: function (error, element) {
				if (element.is(':radio') || element.is(':checkbox')) {
					error.insertBefore(element.next());
				} else {
					error.insertAfter(element);
				}
			}
		});
		//  progress bar
		$("#progressbar").progressbar();
		$("#wizard_container").wizard({
			afterSelect: function (event, state) {
				$("#progressbar").progressbar("value", state.percentComplete);
				$("#location").text("(" + state.stepsComplete + "/" + state.stepsPossible + ")");
			}
		});
	});

	/* Check and radio input styles */
	$('input.icheck').iCheck({
		checkboxClass: 'icheckbox_square-yellow',
		radioClass: 'iradio_square-yellow'
	});

})(window.jQuery); // JavaScript Document