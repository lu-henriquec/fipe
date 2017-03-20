'use strict';

module.exports = function() {

	$('.menu-open-container').click(function(e) {
		e.preventDefault();
		$(this).find('a.menu-open').toggleClass('active');
		$('.header-menu').toggleClass('active');;
		return false;
	});

	// $('a.search-open').click(function(e) {
	// 	e.preventDefault();
	// 	$('.form-search').toggleClass('active');;
	// 	return false;
	// });

	$('a.search-open').on('click', function(e) {
		e.preventDefault();
		$('.search_mobile').slideToggle();
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

	// ===============================================================
	/* SCROLL TOP */
	// ===============================================================
	$('.btn-top').on('click', function (e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: $(($(this).attr('href') || '').split('?')[0]).offset().top
		}, 'slow');
		return false;
	});


}