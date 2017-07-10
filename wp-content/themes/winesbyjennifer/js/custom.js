jQuery(document).ready(function(){
		

	new WOW().init({
	  mobile:       false
	  
  });	
  
  
  
    
  // Video Overlay
  
  
  jQuery('.slideshow').click(function(){
  	
  	jQuery('.video_overlay').addClass('open');
  	
  	
  });
  
  
  jQuery('span.video_close').click(function(){
  	
  	jQuery('.video_overlay').removeClass('open');
  	
  	jQuery('#youtube_player')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*'); 
  	
  	
  });
                                               
  
  
  // Featured Wine Year List
  
  
  
  jQuery('.mysee_more').click(function(){
	  
	  jQuery('.years_list').slideDown();
	  
	 });
	 
	 // Featured Artist List
	 
	 
	 
  jQuery('.mysee_more_artists').click(function(){
	  
	  jQuery('.artist_list').slideDown();
	  
	 });
	 
	 // Tasting Room
	 
	 
	 
	 jQuery('.mysee_more_tasting').click(function(){
	  
	  jQuery('.tasting_drop').slideDown();
	  
	 });
	 
	 
	 
	 jQuery('a.tasting_title').click(function(){
	  
	  jQuery(this).next('.sub_tasting_list').slideToggle(200);
	  
	 });
  
  
  // Search Overlay
  
  
  jQuery('.mysearchicon').click(function(){
	  
	  jQuery('.search_overlay').slideDown();
	  
  });
  
  jQuery('.mysearchclose').click(function(){
	  
	  jQuery('.search_overlay').slideUp();
	  
  });
  
  
  // Mobile Menu
  
  
  jQuery('.sign_in_wrapper').click(function(){
	  
	  
	  jQuery('.mymobile_dropdown').slideDown(300);
	  
	  
  });
  
  
  jQuery('.mymobile_dropdown span.myclose').click(function(){
	  
	  
	  jQuery('.mymobile_dropdown').slideUp(300);
	  
	  
  });
  
  jQuery('.mymobile_dropdown li.menu-item-has-children').click(function(){
	  
	  jQuery(this).find('ul.sub-menu').toggleClass('myopen');
	  
	  
  });
  
  
	
	
	//Overlay
		
			jQuery('.newsletter_overlay_content, .privacy_overlay_content, .carousel_content, .review_content').hide();
			
			jQuery('.newsletter_form').hide();
		
		
			// Newsletter
		
		
			jQuery('.new_free_gift_inner, .mobile_offer').click(function(){
				
				jQuery('.overlay').addClass('open');
				jQuery('.newsletter_overlay_content').fadeIn(50);
				
			});
			
			
			jQuery('.newsletter_button_wrapper').click(function(){
			
			jQuery('.cover').fadeOut(500);
			jQuery('.newsletter_form').delay(1000).fadeIn(500);
			
			});
			
			
			// Privacy
			
			jQuery('li.privacy').click(function(){
				
				jQuery('.overlay').addClass('open');
				jQuery('.privacy_overlay_content').fadeIn(50);
				
				
				
			});
			
			// Mobile Menu
			
			
			
			jQuery('.mobile_menu').click(function(){
				
				jQuery('.mobile_menu_overlay').fadeIn();
				jQuery('.mobile_menu').fadeOut();
				jQuery('.overlay_close_mobile_menu').fadeIn();
				
				
			});
			
			
			
			// Leave a Review
			
			jQuery('.green_bar, .review_icons').click(function(){
				
				jQuery('.overlay').addClass('open');
				jQuery('.review_content').fadeIn(50);
				
				
				
			});
			
			
			// Carousel
			
			
			jQuery('.slider-nav img.car_img').click(function(){
				
				jQuery('.overlay_carousel').addClass('open');
				jQuery('.carousel_content').fadeIn(50);
				
			});
			
			
			//
			
			jQuery('.overlay_close').click(function(){
				
				jQuery('.overlay').removeClass('open');
				jQuery('.overlay_carousel').removeClass('open');
				jQuery('.newsletter_overlay_content, .privacy_overlay_content, .carousel_content, .review_content').fadeOut(400);
				
				
				jQuery('.newsletter_form').fadeOut(500);
				jQuery('.cover').delay(1000).fadeIn(500);
				
			});
			
			
		// Mobile CLose 
		
		
		jQuery('.overlay_close_mobile_menu').click(function(){
		
			jQuery('.mobile_menu').fadeIn();
			jQuery('.overlay_close_mobile_menu, .mobile_menu_overlay').fadeOut();
		
		});
		
		// Faq
		
		
/*
		jQuery('.question').click(function(){
			
			jQuery(this).next('.answer').slideToggle(200);
			jQuery(this).toggleClass('open');
			
		});
*/
		
		
		// Back to Top
		
		
		jQuery('.backtotop').click(function(){
				
			jQuery('html, body').animate({ scrollTop: 0 }, 'slow');
				
		});
		
		
		
		// List View / Grid view
		
		
		jQuery('.post_list').click(function(){
			
			jQuery('.content_container').removeClass('grid_view');
			jQuery(this).addClass('active');
			jQuery('.post_grid').removeClass('active');
			
		});
		
		jQuery('.post_grid').click(function(){
			
			jQuery('.content_container').addClass('grid_view');
			jQuery(this).addClass('active');
			jQuery('.post_list').removeClass('active');
			
			
		});
		

		
		

		

		

/*

    jQuery(".single_bio_wrapper").each(function(e) {
        if (e != 0)
            jQuery(this).hide();
    });
*/

// stackoverflow.com/questions/17064433/show-hide-divs-using-next-previous-button-using-jquery 
/*
    
    jQuery("#next").click(function(){
        if (jQuery(".single_bio_wrapper:visible").next().length != 0)
            jQuery(".single_bio_wrapper:visible").next().show().prev().hide();
        else {
            jQuery(".single_bio_wrapper:visible").hide();
            jQuery(".single_bio_wrapper:first").show();
        }
        return false;
    });

    jQuery("#prev").click(function(){
        if (jQuery(".single_bio_wrapper:visible").prev().length != 0)
            jQuery(".single_bio_wrapper:visible").prev().show().next().hide();
        else {
            jQuery(".single_bio_wrapper:visible").hide();
            jQuery(".single_bio_wrapper:last").show();
        }
        return false;
    });
*/



		
		
		


// Slick





jQuery('.testimonials_slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow: ".my_testimonials .myprev",
  nextArrow: ".my_testimonials .mynext",
  arrows: true
  
});


jQuery('.blog_slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow: ".my_blog .myprev",
  nextArrow: ".my_blog .mynext",
  arrows: true
  
});




jQuery('.event_slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow: ".new_events_wrapper .myprev",
  nextArrow: ".new_events_wrapper .mynext",
  arrows: true
  
});


    
jQuery('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  lazyLoad: 'ondemand',
  arrows: true,
  fade: false,
  swipe: true,
  asNavFor: '.slider-nav'
});
jQuery('.slider-nav').slick({
   slidesToShow: 7,
        slidesToScroll: 7,
  lazyLoad: 'ondemand',
  asNavFor: '.slider-for',
  swipe: true,
  //dots: true,
  //centerMode: true,
  focusOnSelect: true,
  responsive: [
     {
      breakpoint: 2224,
      settings: {
        slidesToShow: 7,
        slidesToScroll: 7,
     }
    },
    
    
    {
      breakpoint: 1224,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 6,
     }
    },
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 5,
     }
    },
    {
      breakpoint: 850,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 380,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }
 
  ]
});
 

// Press

jQuery('.press_slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow: ".press_slider_wrapper .back_button",
  nextArrow: ".press_slider_wrapper .next_button",
  arrows: true,
  mobileFirst:true,
   variableWidth: true,
   centerMode: true,
   
  responsive: [
     {
      breakpoint: 615,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        prevArrow: ".press_slider_wrapper .back_button",
				nextArrow: ".press_slider_wrapper .next_button",
				arrows: true,
     }
    },
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        prevArrow: ".press_slider_wrapper .back_button",
				nextArrow: ".press_slider_wrapper .next_button",
				arrows: true,
     }
    },
    {
      breakpoint: 1040,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
        prevArrow: ".press_slider_wrapper .back_button",
				nextArrow: ".press_slider_wrapper .next_button",
				arrows: true,
     }
    },
    {
      breakpoint: 1204,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1,
        prevArrow: ".press_slider_wrapper .back_button",
				nextArrow: ".press_slider_wrapper .next_button",
				arrows: true,
     }
    }
 
  ]
});


		
	}); /* Document Ready */
