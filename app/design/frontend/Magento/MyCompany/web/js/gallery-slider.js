require([
    'jquery',
    'owlCarousel'
], function ($) {
    'use strict';
	
	var timer;
	
    $(document).ready(function () {
		if ($(window).width() <= 768) { // Check if it's a mobile device
			$('.gallery-images').owlCarousel({
				loop: true,
				margin: 10,
				nav: false,
				dots: true,
				items: 1
			});
		} else{
			var $el = $('.gallery-images');

			if ($el.length) {
				$el.on('scroll', function () {
					$el.addClass('scroll');

					clearTimeout(timer);
					timer = setTimeout(function () {
						$el.removeClass('scroll');
					}, 1000);
				});
			}
		}
    });
});
