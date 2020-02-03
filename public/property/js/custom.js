(function ($) {

  	"use strict";
	
   	
	$('[data-toggle="popover"]').popover(); 
		
	
	/* ==== Tool Tip ==== */	
    $('[data-toggle="tooltip"]').tooltip();
	
	
	/*==== Premium Agencies ====*/
	$('.premiumengs').owlCarousel({
    loop:true,
    margin:20,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
            nav:true
        },
        800:{
            items:4,
            nav:true
        },
        1200:{
            items:7,
            nav:true,
            loop:true
        }
    	}
	});
	
	/* ==== Featured Properties Slider ==== */	
  	$(".featuredpt").owlCarousel({      
	   loop:false,
		margin:20,
		nav:true,
		autoplay:true,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:false
			},
			768:{
				items:2,
				nav:false
			},
			1170:{
				items:4,
				nav:false,
			}
		}
  	});
	
	
	/*==== Testimonials ====*/
	$('.testimonialsList').owlCarousel({
    loop:true,
    margin:30,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        800:{
            items:1,
            nav:true
        },
        1200:{
            items:2,
            nav:true,
            loop:true
        }
    	}
	});
	
	/*==== Counter ====*/
    $('.counter-item').appear(function() {
    	$('.counter-number').countTo();
    });	
	
	/* ==== Revolution Slider ==== */
	if($('.tp-banner').length > 0){
		$('.tp-banner').show().revolution({
			delay:6000,
			startheight:700,
			startwidth: 1170,
			hideThumbs: 1000,
			navigationType: 'none',
			touchenabled: 'on',
			onHoverStop: 'on',
			navOffsetHorizontal: 0,
			navOffsetVertical: 0,
			dottedOverlay: 'none',
			fullWidth: 'on'
		});
	}
	
	
	
	
})(jQuery);




   