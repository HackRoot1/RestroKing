/**
Core script to handle the entire theme and core functions
**/
var RestroKing = function(){
	/* Search Bar ============ */
	siteUrl = '';
	
	var screenWidth = $( window ).width();
	
	/* Header Height ============ */
	var handleResizeElement = function(){
		$('.header').css('height','');
		var headerHeight = $('.header').height();
		$('.header').css('height', headerHeight);
	}
	
		
	/* Load File ============ */
	var dzTheme = function(){
		'use strict';
				
		if(screenWidth <= 991 ){
			jQuery('.navbar-nav > li > a, .sub-menu > li > a').unbind().on('click', function(e){
				//e.preventDefault();
				if(jQuery(this).parent().hasClass('open'))
				{
					jQuery(this).parent().removeClass('open');
				}
				else{
					jQuery(this).parent().parent().find('li').removeClass('open');
					jQuery(this).parent().addClass('open');
				}
			});
		}
		
		if(screenWidth > 991 )
		{
			
			jQuery(document).on('click','.menu-btn', function(){
				jQuery('.pizza-header .header-nav').addClass('active');
			})
			jQuery(document).on('click','.pizza-btn-close', function(){
				jQuery('.pizza-header .header-nav').removeClass('active');
			})
		}
	}
	
	/* Header Fixed ============ */
	var headerFix = function(){
		'use strict';
		/* Main navigation fixed on top  when scroll down function custom */		
		jQuery(window).bind('scroll', function () {
			if(jQuery('.sticky-header').length)
			{
				var menu = jQuery('.sticky-header');
				if ($(window).scrollTop() > menu.offset().top) {
					menu.addClass('is-fixed');
				} 
				else{
					menu.removeClass('is-fixed');
				}
			}
		});
		/* Main navigation fixed on top  when scroll down function custom end*/
	}
	
	/* Counter Number ============ */
	var counter = function(){
		if(jQuery('.counter').length > 0)
		{
			jQuery('.counter').counterUp({
				delay: 10,
				time: 3000
			});	
		}
	}
	
	/* Magnific Popup ============ */
	var MagnificPopup = function(){
		'use strict';	
		if(jQuery('.mfp-gallery').length > 0)
		{
			/* magnificPopup function */
			jQuery('.mfp-gallery').magnificPopup({
				delegate: '.mfp-link',
				type: 'image',
				tLoading: 'Loading image #%curr%...',
				mainClass: 'mfp-img-mobile',
				gallery: {
					enabled: true,
					navigateByImgClick: true,
					preload: [0,1] // Will preload 0 - before current, and 1 after the current image
				},
				image: {
					tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
					titleSrc: function(item) {
						return item.el.attr('title') + '<small></small>';
					}
				}
			});
			/* magnificPopup function end */
		}
		if(jQuery('.video').length > 0)
		{
			/* magnificPopup for paly video function */		
			jQuery('.video').magnificPopup({
				type: 'iframe',
				iframe: {
					markup: '<div class="mfp-iframe-scaler">'+
							 '<div class="mfp-close"></div>'+
							 '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
							 '<div class="mfp-title">Some caption</div>'+
							 '</div>'
				},
				callbacks: {
					markupParse: function(template, values, item) {
						values.title = item.el.attr('title');
					}
				}
			});
		}
		
		if(jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps').length > 0)
		{
			/* magnificPopup for paly video function end*/
			$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
				disableOn: 700,
				type: 'iframe',
				mainClass: 'mfp-fade',
				removalDelay: 160,
				preloader: false,

				fixedContentPos: false
			});
		}
	}
	
	/* handle Bootstrap Select ============ */
	var handleBootstrapSelect = function(){
		/* Bootstrap Select box function by  = bootstrap-select.min.js */ 
		if (jQuery('select').length) {
		    jQuery('select').selectpicker();
		}
		/* Bootstrap Select box function by  = bootstrap-select.min.js end*/
	}
	
	/* handle Bootstrap Touch Spin ============ */
	var handleBootstrapTouchSpin = function(){
		if(jQuery("input[name='demo_vertical2']").length > 0)
		{
			jQuery("input[name='demo_vertical2']").TouchSpin({
				  verticalbuttons: true,
				  verticalupclass: 'ti-plus',
				  verticaldownclass: 'ti-minus'
			});
		}
		
	}
	
	/* Scroll To Top ============ */
	var scrollTop = function (){
		'use strict';
		var scrollTop = jQuery("button.scroltop");
		/* page scroll top on click function */	
		scrollTop.on('click',function() {
			jQuery("html, body").animate({
				scrollTop: 0
			}, 1000);
			return false;
		})

		jQuery(window).bind("scroll", function() {
			var scroll = jQuery(window).scrollTop();
			if (scroll > 900) {
				jQuery("button.scroltop").fadeIn(1000);
			} else {
				jQuery("button.scroltop").fadeOut(1000);
			}
		});
		/* page scroll top on click function end*/
	}
		
	/* Gallery Filter ============ */
	var handleFilterMasonary = function(){
		/* gallery filter activation = jquery.mixitup.min.js */ 
		if (jQuery('#image-gallery-mix').length) {
			jQuery('.gallery-filter').find('li').each(function () {
				$(this).addClass('filter');
			});
			jQuery('#image-gallery-mix').mixItUp();
		};
		if(jQuery('.gallery-filter.masonary').length){
			jQuery('.gallery-filter.masonary').on('click','span', function(){
				var selector = $(this).parent().attr('data-filter');
				jQuery('.gallery-filter.masonary span').parent().removeClass('active');
				jQuery(this).parent().addClass('active');
				jQuery('#image-gallery-isotope').isotope({ filter: selector });
				return false;
			});
		}
		/* gallery filter activation = jquery.mixitup.min.js */
	}
	
	/* WOW ANIMATION ============ */
	var wow_animation = function(){
		if($('.wow').length > 0)
		{
			var wow = new WOW(
			{
			  boxClass:     'wow',      // animated element css class (default is wow)
			  animateClass: 'animated', // animation css class (default is animated)
			  offset:       50,          // distance to the element when triggering the animation (default is 0)
			  mobile:       false       // trigger animations on mobile devices (true is default)
			});
			wow.init();	
		}	
	}
	
	
	var reposition = function (){
		'use strict';
		var modal = jQuery(this),
		dialog = modal.find('.modal-dialog');
		modal.css('display', 'block');
		
		/* Dividing by two centers the modal exactly, but dividing by three 
		 or four works better for larger screens.  */
		dialog.css("margin-top", Math.max(0, (jQuery(window).height() - dialog.height()) / 2));
	}
	
	
	/* Light Gallery ============ */
	var lightGallery = function (){
		if(($('#lightgallery, .lightgallery').length > 0)){
			$('#lightgallery, .lightgallery').lightGallery({
				selector : '.check-km',
				loop:true,
				thumbnail:true,
				exThumbImage: 'data-exthumbimage'
			});
		}
	}
	
	/* Masonry Box ============ */
	var masonryBox = function(){
		'use strict';
		/* masonry by  = bootstrap-select.min.js */
		if(jQuery('#masonry, .masonry').length)
		{
			var self = $("#masonry, .masonry");
			if(jQuery('.card-container').length)
		    {
				self.imagesLoaded(function () {
					self.masonry({
						gutterWidth: 15,
						isAnimated: true,
						itemSelector: ".card-container"
					});
				});
			}
		}
		if(jQuery('.filters').length)
		{
			jQuery(".filters").on('click','li',function(e) {
				e.preventDefault();
				var filter = $(this).attr("data-filter");
				self.masonryFilter({
					filter: function () {
						if (!filter) return true;
						//return $(this).attr("data-filter") == filter;
						return $(this).hasClass(filter);
					}
				});
			});
		}
		/* masonry by  = bootstrap-select.min.js end */
	}	
	
	/* Range ============ */
	var priceslider = function(){
		if($(".price-slide, .price-slide-2").length > 0 ) {
			$("#slider-range,#slider-range-2").slider({
				range: true,
				min: 200,
				max: 4000,
				type:'single',
				values: [200, 4000],
				slide: function(event, ui) {
					var min = ui.values[0],
						max = ui.values[1];
					  $('#' + this.id).prev().val("$"+ min + " - " + "$"+ max);
				}
			});
		}
	}
		
	var handleSupport = function(){
		var support = '<a href="https://1.envato.market/LkVPj" target="_blank" class="bt-buy-now theme-btn"><i class="ti-shopping-cart"></i><span>Buy Now</span></a><a href="https://support.w3itexperts.com" target="_blank" class="bt-support-now theme-btn"><i class="ti-headphone-alt"></i><span>Support</span></a><!-- Go to www.addthis.com/dashboard to customize your tools --><script type="text/javascript" src="../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b221c5e31b4e54b"></script>';
		jQuery('body').append(support);
	}
	
	/* Range ============ */
	var priceslider = function(){
		if($(".price-slide, .price-slide-2").length > 0 ) {
			$("#slider-range,#slider-range-2").slider({
				range: true,
				min: 200,
				max: 4000,
				type:'single',
				values: [200, 4000],
				slide: function(event, ui) {
					var min = ui.values[0],
						max = ui.values[1];
					  $('#' + this.id).prev().val("$"+ min + " - " + "$"+ max);
				}
			});
		}
	}
	
	var btnAware = function (){
		
		$('.box-aware')
			.on('mouseenter', function(e) {
					var parentOffset = $(this).offset(),
					relX = e.pageX - parentOffset.left,
					relY = e.pageY - parentOffset.top;
					$(this).find('.aware').css({top:relY, left:relX})
			})
			.on('mouseout', function(e) {
					var parentOffset = $(this).offset(),
					relX = e.pageX - parentOffset.left,
					relY = e.pageY - parentOffset.top;
				$(this).find('.aware').css({top:relY, left:relX})
		});
	}
	
	/* Function ============ */
	return {
		init:function(){
			wow_animation();
			dzTheme();
			handleResizeElement();
			MagnificPopup();
			scrollTop();
			headerFix();
			lightGallery();
			priceslider();
			jQuery('.modal').on('show.bs.modal', reposition);
			handleSupport();
			priceslider();
			btnAware();
		},
		
		load:function(){
			counter();
			handleBootstrapSelect();
			handleBootstrapTouchSpin();
			masonryBox();
		},
		
		resize:function(){
			screenWidth = $(window).width();
			dzTheme();
			setTimeout(function(){
				handleResizeElement();
			}, 1000); 
		},
		
		headerResize:function(){
			handleResizeElement();
		}
	}
	
}();

/* Document.ready Start */	
jQuery(document).ready(function() {
    'use strict';
	RestroKing.init();
	
	jQuery('.navicon').on('click',function(){
		$(this).toggleClass('open');
	});
	
 	jQuery('.our-works-filter li a').on('mouseover',function(){
		$('.filter-thumb').removeClass('active');
		var imageDivId = $(this).attr('data-image-bx');
		$('#'+imageDivId).addClass('active');
	}); 
	
	$('.tab-form a[data-toggle="tab"]').click(function(){
		// todo remove snippet on bootstrap v4
		$('a[data-toggle="tab"]').click(function() {
		  $($(this).attr('href')).show().addClass('show active').siblings().hide();
		})
	});	
	
});
/* Document.ready END */

/* Window Load START */
jQuery(window).on('load',function () {
	'use strict'; 
	RestroKing.load();
	setTimeout(function(){
		jQuery('#loading-area').fadeOut();
	}, 1000); 
	
});
/*  Window Load END */
/* Window Resize START */
jQuery(window).on('resize',function () {
	'use strict'; 
	RestroKing.resize();
	
});
/*  Window Resize END */