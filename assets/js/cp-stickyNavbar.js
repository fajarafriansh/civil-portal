jQuery(document).ready(function($) {
	var navbar = $('.hdr-nav');
	var content = $('.main-page');
	var featured = $('.slider');
	var sticky = 185;

	$(window).scroll(function() {
		if ($('body').hasClass('home') && $(window).scrollTop() > sticky) {
			navbar.addClass('sticky');
			featured.addClass('sticky');
		} else if ($('body').not('.home') && $(window).scrollTop() > sticky) {
			navbar.addClass('sticky');
			content.addClass('sticky');
		} else {
			navbar.removeClass('sticky');
			featured.removeClass('sticky');
			content.removeClass('sticky');
		}
	});
});
