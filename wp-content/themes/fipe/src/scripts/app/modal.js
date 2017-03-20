'use strict';

module.exports = function() {

	//$(document).on('click', '.btn-subscribe', function(e){
	$('.btn-subscribe').on('click', function (e) {
		e.preventDefault();
		$('.subscribe-modal').removeClass('hide');
	});


	//$(document).on('click', '.close', function(e){
	$('.close').on('click', function (e) {
		e.preventDefault();
		$(this).closest('.themodal-overlay').addClass('hide');
	})

}