jQuery(document).ready(function($) {
	var body = $('body');
	var timeout = 15000;

	$(window).on('load', function() {
		// $('.loader').fadeOut();
		// $('.loader-wrapper').delay(350).fadeOut('slow');
		body.addClass('loaded');
		body.delay(350).css({'overflow':'visible'});
	});

	setTimeout(function() {
		body.addClass('loaded');
		body.delay(350).css({'overflow':'visible'});
	}, timeout);

	$('.navbar-btn').on('click', function() {
		$('body').removeAttr('style');
		$('.topbutton') .fadeOut(200);
	});

	$('.close').on('click', function() {
		$('body').css({'overflow':'visible'});
		if ($(window) .scrollTop() >= 100) {
			$('.topbutton') .fadeIn(200);
		}
	});

	$(document).on('keyup', function(evt) {
		if ($('body').hasClass('modal-open') && evt.keyCode == 27) {
			$('body').css({'overflow':'visible'});
			if ($(window) .scrollTop() >= 100) {
				$('.topbutton') .fadeIn(200);
			}
		}
	});
});