'use strict';

module.exports = function() {

	//$(document).on('click', '.btn-subscribe', function(e){
	$('.btn-subscribe').on('click', function (e) {
		e.preventDefault();
		$('.subscribe-modal').removeClass('hide');
		$('.form_part-1').show();
		$('.form_part-2').hide();
	});

	$('.open-form').on('click', function (e) {
		e.preventDefault();
		$('.form_part-1').hide();
		$('.form_part-2').show();
	});


	//$(document).on('click', '.close', function(e){
	$('.close').on('click', function (e) {
		e.preventDefault();
		$(this).closest('.themodal-overlay').addClass('hide');
	})

}