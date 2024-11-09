require([
    'jquery'
], function ($) {
    'use strict';
	
	$('.block-search .label').click(function () {
		$('#search_mini_form').addClass('active');
	});
});
