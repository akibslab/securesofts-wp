(function ($) {
	"use strict";

	$(document).ready(function () {
		// Header Mobile Menu
		$(".site-header .main_menu").meanmenu({
			meanMenuContainer: ".mobile-menu",
			meanScreenWidth: "991",
			meanExpand: ['<i class="fal fa-angle-down"></i>'],
		});

		$(".site-header .menu_bar a").on("click", function () {
			$(".mobile_menu").addClass("open");
		});

		$(".mobile_menu .close_icon a").on("click", function () {
			$(".mobile_menu").removeClass("open");
		});
		// end: mobile menu

		// Clients Carousel
		$(".clients_carousel").owlCarousel({
			items: 9,
			loop: true,
			dots: false,
			thumbs: false,
			nav: false,
			navText: [
				'<i class="fa fa-angle-left"></i>',
				'<i class="fa fa-angle-right"></i>',
			],
			autoplay: false,
			autoplayTimeout: 1000,
			autoplayHoverPause: true,
			margin: 25,
			responsive: {
				0: {
					items: 3,
				},
				767: {
					items: 6,
				},
				992: {
					items: 9,
				},
			},
		}); // end: Clients Carousel

		// Testimonial .first
		$(".testimonials.first").owlCarousel({
			items: 4,
			loop: true,
			dots: false,
			thumbs: false,
			nav: false,
			navText: [
				'<i class="fa fa-angle-left"></i>',
				'<i class="fa fa-angle-right"></i>',
			],
			autoplay: true,
			autoplayTimeout: 3000,
			smartSpeed: 2000,
			animateIn: "linear",
			animateOut: "linear",
			autoplayHoverPause: true,
			margin: 25,
			responsive: {
				0: {
					margin: 20,
					items: 1,
					autoHeight: true,
					mouseDrag: false,
					touchDrag: true,
				},
				576: {
					margin: 20,
					items: 2,
				},
				767: {
					items: 2,
				},
				992: {
					items: 3,
				},
				1400: {
					items: 4,
				},
			},
		}); // end: testimonial .first

		// testimonial .second
		$(".testimonials.second").owlCarousel({
			items: 3,
			loop: true,
			dots: false,
			thumbs: false,
			nav: false,
			navText: [
				'<i class="fa fa-angle-left"></i>',
				'<i class="fa fa-angle-right"></i>',
			],
			autoplay: true,
			autoplayTimeout: 3000,
			smartSpeed: 2000,
			animateIn: "linear",
			animateOut: "linear",
			autoplayHoverPause: true,
			margin: 30,
			stagePadding: 230,
			rtl: true,
			responsive: {
				0: {
					margin: 20,
					items: 1,
					stagePadding: 0,
					autoHeight: true,
					mouseDrag: false,
					touchDrag: true,
				},
				576: {
					margin: 20,
					items: 1,
					stagePadding: 100,
				},
				768: {
					items: 1,
					stagePadding: 150,
				},
				992: {
					items: 2,
					stagePadding: 130,
				},
				1200: {
					items: 2,
					stagePadding: 200,
				},
				1400: {
					items: 3,
					stagePadding: 230,
				},
			},
		}); //end: testimonial .second

		// testimonial .full-testimonial
		$(".testimonials.full-testimonial").owlCarousel({
			items: 3,
			loop: true,
			dots: false,
			thumbs: false,
			nav: false,
			autoplay: true,
			autoplayTimeout: 3000,
			smartSpeed: 2000,
			autoplayHoverPause: true,
			margin: 30,
			stagePadding: 230,
			responsive: {
				0: {
					margin: 20,
					items: 1,
					stagePadding: 50,
				},
			},
		}); //end: testimonial .second

		// testimonial video
		$(".video_play").magnificPopup({
			type: "iframe",
		}); // end: Testimonial Video

		// Hover Image Changed
		let $image = $(".suited_images .image");
		let $list = $(".suited_list .single_suite");

		$list.on("click mouseenter", function () {
			$image.removeClass("active");
			$list.removeClass("active");

			$image.eq($(this).index()).addClass("active");
			$list.eq($(this).index()).addClass("active");
		});
		// end: hover image changed
	});

	// Sticky Menu
	$(window).on("scroll", function () {
		var scroll = $(window).scrollTop();
		if (scroll < 1) {
			$(".site-header").removeClass("sticky");
		} else {
			$(".site-header").addClass("sticky");
		}
	}); // end: Sticky Menu

	// counterUp
	let counter = $(".count");
	if (counter.length > 0) {
		counter.counterUp({
			delay: 10,
			time: 1000,
		});
	}

	// Start Init Isotope
	var $grid = $("#works-grid").isotope({
		itemSelector: ".grid-item",
		percentPosition: true,
	});
	// filter items on button click
	$(".filter_tabs").on("click", "button", function () {
		var filterValue = $(this).attr("data-filter");
		$grid.isotope({ filter: filterValue });
	});
	//for menu active class
	$(".filter_tabs button").on("click", function (event) {
		$(this).siblings(".active").removeClass("active");
		$(this).addClass("active");
		event.preventDefault();
	});
	// End IsoTope

	//  End Init IsoTope
})(jQuery);
