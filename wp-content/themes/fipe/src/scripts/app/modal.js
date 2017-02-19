'use strict';

module.exports = function() {

	$(document).on('click', '.sobre a', function(e){
		e.preventDefault();
		$('.sobre-modal').removeClass('hide');
	});

	$(document).on('click', '.termos a', function(e){
		e.preventDefault();
		$('.termos-modal').removeClass('hide');
	});

	$(document).on('click', '.politica a', function(e){
		e.preventDefault();
		$('.termos-politica').removeClass('hide');
	});

	$(document).on('click', '.close', function(e){
		e.preventDefault();
		$(this).closest('.themodal-overlay').addClass('hide');
	})

}