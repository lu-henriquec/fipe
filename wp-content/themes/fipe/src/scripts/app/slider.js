'use strict';

require('slick-carousel/slick/slick');

module.exports = function() {

	$('.slide-home').slick({
		arrows: true,
		autoplay: true,
		centerMode: true,
		dots: true,
		fade: true,
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		zIndex:1,
		responsive: [
			{
				breakpoint: 498,
				settings: {
					arrows: false,
					centerMode: false
				}
			}
		]
	});
};