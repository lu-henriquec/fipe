'use strict';

module.exports = function() {

	$('.map__item').each(function(){
		$(this).click(function(){
			var src = $(this).attr('data-target'),
				target = $('#parts'),
				zoom = target.data('zoom');

			if (target.hasClass('active')) {
				target.removeClass();
				if (zoom !== src) {
					target.data('zoom', src).addClass(src+'--zoom active');
				}
			} else {
				target.data('zoom', src).addClass(src+'--zoom active');
			}
		});
	});



	// ACCORDION CLICK

	$(document).on('click', '.map__item:not(.active)', function(e){
		e.preventDefault();
		$('.map__list').addClass('flipped');

		$('.map__item').removeClass('active');
		$(this).addClass('active');
		
		$('.map-dropdown').removeClass('active');
		$(this).next('.map-dropdown').toggleClass('active');
	});

	$(document).on('click', '.inner-item', function(e){
		e.preventDefault();
		$('.map__list').removeClass('flipped');
	});

}