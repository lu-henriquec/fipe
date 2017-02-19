'use strict';

module.exports = function() {

	$('.tab-item_link').on('click', function(e)  {
		e.preventDefault();
		var currentAttrValue = $(this).attr('data-tab');

		//alert(currentAttrValue);

		$('.tab-item_link').removeClass('active');
		$('.tab').removeClass('active');

		$(this).addClass('active');
		$("#"+currentAttrValue).addClass('active');
	});
}