'use strict';

module.exports = function() {

	$('a.menu-open').click(function(e) {
		e.preventDefault();
		$(this).toggleClass('active');
		$('.header-menu').toggleClass('active');;
		return false;
	});

	$('a.search-open').click(function(e) {
		e.preventDefault();
		$('.form-search').toggleClass('active');;
		return false;
	});

	// ===============================================================
	/* FIXED MENU */
	// ===============================================================
	var header = $('.header');
	function fixedHeader() {
		if ($(window).scrollTop() > 42) {
			header.animate({
				//height: "toggle"
			}, 5000, function() {
				header.addClass('fixed');
				//returnToTop.stop(false, true).fadeIn();
			}).stop(false, true);
		}else{
			header.animate({
				//height: "toggle"
			}, 5000, function() {
				header.removeClass('fixed');
				//returnToTop.stop(false, true).fadeOut();
			}).stop(false, true);
		}
	}
	fixedHeader();

	$(window).on('scroll',function(){
		fixedHeader();
	});
}