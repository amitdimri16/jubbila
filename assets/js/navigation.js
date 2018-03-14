$(document).ready(function() {
	$(".main-nav__menu-item").hover(function() {

		$(this).children(".main-nav__menu-item-hvr-line").addClass("main-nav__menu-item-hvr-line--hover");

	}, function() {
		$(this).children(".main-nav__menu-item-hvr-line").removeClass("main-nav__menu-item-hvr-line--hover"); 	

	});

	$('.main-nav__menu-item-link.services-link').click(function() {
        if($(this).attr('data-click-state') == 0) {
            $(this).attr('data-click-state', 1);
            $("ul.services-item-wrap").show();
        }
        else {
            $(this).attr('data-click-state', 0);
            $("ul.services-item-wrap").hide();
        }
    });

	$(".main-nav__login").on('click', function() {
		$(".overlay-modal__login-content-wrapper").addClass("overlay-modal__login-content-wrapper--open");
		$(".whole-wrapper").css({
			"position": "fixed",
			"width": "100%",
			"filter": "blur(4px)",
			"transition": "filter .1s"
		});
		$("footer").css({
			"position": "fixed",
			"margin-top": "100vh",
			"filter": "blur(4px)",
			"transition": "filter .1s"
		});
		$(".bg-tinch").fadeIn(100);
	});

	$(".to-signup").on('click', function() {
		$(".overlay-modal__login-content-wrapper").removeClass("overlay-modal__login-content-wrapper--open");
		$(".overlay-modal__register-content-wrapper").addClass("overlay-modal__register-content-wrapper--open");
	});

	$(".to-login").on('click', function() {
		$(".overlay-modal__register-content-wrapper").removeClass("overlay-modal__register-content-wrapper--open");
		$(".overlay-modal__f-pass-content-wrapper").removeClass("overlay-modal__f-pass-content-wrapper--open");
		$(".overlay-modal__login-content-wrapper").addClass("overlay-modal__login-content-wrapper--open");
	});

	$(".to-f-pass").on('click', function() {
		$(".overlay-modal__login-content-wrapper").removeClass("overlay-modal__login-content-wrapper--open");
		$(".overlay-modal__f-pass-content-wrapper").addClass("overlay-modal__f-pass-content-wrapper--open");
	});

	$(".overlay-modal__login-content-close, .overlay-modal__register-content-close, .overlay-modal__f-pass-content-close, .bg-tinch").on('click', function() {
		$(".overlay-modal__login-content-wrapper").removeClass("overlay-modal__login-content-wrapper--open");
		$(".overlay-modal__register-content-wrapper").removeClass("overlay-modal__register-content-wrapper--open");
		$(".overlay-modal__f-pass-content-wrapper").removeClass("overlay-modal__f-pass-content-wrapper--open");
		$(".bg-tinch").fadeOut(100);
		$(".whole-wrapper").css({
			"filter": "initial",
			"transition": "filter .1s",
			"position": "relative"
		});
		$("footer").css({
			"position": "initial",
			"margin-top": "initial",
			"filter": "initial",
			"transition": "filter .1s"
		});
	});			

	$(document).keyup(function(e) {

		var login_open = $(".overlay-modal__login-content-wrapper").hasClass("overlay-modal__login-content-wrapper--open");
		var register_open = $(".overlay-modal__register-content-wrapper").hasClass("overlay-modal__register-content-wrapper--open");
		var f_pass_open = $(".overlay-modal__f-pass-content-wrapper").hasClass("overlay-modal__f-pass-content-wrapper--open");

		if(e.keyCode == 27 && (login_open == true || register_open == true)) {
			
	        $(".overlay-modal__login-content-wrapper").removeClass("overlay-modal__login-content-wrapper--open");
			$(".overlay-modal__register-content-wrapper").removeClass("overlay-modal__register-content-wrapper--open");
			$(".overlay-modal__f-pass-content-wrapper").removeClass("overlay-modal__f-pass-content-wrapper--open");
			$(".bg-tinch").fadeOut(100);
			$(".whole-wrapper").css({
				"position": "relative",
				"filter": "blur(0)",
				"transition": "all .1s"
			});
		}
	    
	});
	

	$('.main-nav__mobile-menu-icon').click(function() {
        if($(this).attr('data-click-state') == 0) {
            $(this).attr('data-click-state', 1);
            $(".main-nav__menu-wrapper").css('left', '0');
        }
        else {
            $(this).attr('data-click-state', 0);
            $(".main-nav__menu-wrapper").css('left', '-100%');
        }
    });
});