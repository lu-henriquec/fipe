'use strict';

//load modules
require('app/helpers');

var slider = require('app/slider'),
	modal = require('app/modal'),
	menu = require('app/menu'),
	motor = require('app/motor'),
	mapa = require('app/mapa');


$(function() {
	slider();
	modal();
	menu();
	motor();
	mapa();
});
