/* JavaScript Document */
jQuery(document).ready(function() {
    'use strict';

	jQuery('.main-slider').owlCarousel({
		loop:true,
		margin:0,
		nav:false,
		autoplay:true,
		autoplaySpeed: 2000,
		navSpeed: 2000,
		items:1,
		paginationSpeed: 2000,
		slideSpeed: 2000,
		dots: true,
		navText: ['<i class="la la-angle-left"></i>', '<i class="la la-angle-right"></i>'],
	});
	
	jQuery('.pizza-items-owl').owlCarousel({
		loop:true,
		margin:0,
		nav:false,
		autoplay:true,
		autoplaySpeed: 2000,
		navSpeed: 2000,
		items:7,
		paginationSpeed: 2000,
		slideSpeed: 2000,
		dots: true,
		navText: ['<i class="la la-angle-left"></i>', '<i class="la la-angle-right"></i>'],
	});
	
	/*  testimonial one function by = owl.carousel.js */
	jQuery('.testimonial-one').owlCarousel({
		loop:true,
		margin:30,
		nav:true,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		dots: false,
		navText: ['<i class="ti-arrow-left"></i>', '<i class="ti-arrow-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			
			480:{
				items:1
			},			
			
			767:{
				items:1
			},
			1000:{
				items:1
			}
		}
	})
	
	/*  testimonial one function by = owl.carousel.js */
	jQuery('.blog-carousel').owlCarousel({
		loop:true,
		margin:30,
		nav:true,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		dots: false,
		navText: ['<i class="ti-arrow-left"></i>', '<i class="ti-arrow-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			
			480:{
				items:2
			},			
			
			767:{
				items:2
			},
			1000:{
				items:3
			}
		}
	})
	
	/*  testimonial one function by = owl.carousel.js */
	jQuery('.products-carousel').owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		dots: false,
		navText: ['<i class="ti-arrow-left"></i>', '<i class="ti-arrow-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			
			480:{
				items:2
			},			
			
			767:{
				items:2
			},
			1000:{
				items:4
			}
		}
	})
});


/* Window Resize START */
jQuery(window).on('resize',function () {
	'use strict'; 
	if(jQuery('.main-slider').length > 0)
	{
		setTimeout(function(){
			jQuery('.main-slider').data('owl.carousel')._invalidated.width = true;
			jQuery('.main-slider').trigger('refresh.owl.carousel');
		}, 2000); 
	}
	
});

/* Document .ready END */