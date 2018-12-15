// @codekit-prepend 'slick.min.js'

jQuery(document).ready(function($){
		

    
  // Video Overlay
  
  
/*
  $('.slideshow').click(function(){
  	
  	$('.video_overlay').addClass('open');
  	
  	
  });
  
  
  $('span.video_close').click(function(){
  	
  	$('.video_overlay').removeClass('open');
  	
  	$('#youtube_player')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*'); 
  	
  	
  });
*/
                                               
  
  
  // Featured Wine Year List
  
  
  
  $('.mysee_more').click(function(){
	  
	  $('.years_list').slideDown();
	  
	 });
	 
	 // Featured Artist List
	 
	 
	 
  $('.mysee_more_artists').click(function(){
	  
	  $('.artist_list').slideDown();
	  
	 });
	 
	 // Tasting Room
	 
	 
	 
	 $('.mysee_more_tasting').click(function(){
	  
	  $('.tasting_drop').slideDown();
	  
	 });
	 
	 
	 
	 $('a.tasting_title').click(function(){
	  
	  $(this).next('.sub_tasting_list').slideToggle(200);
	  
	 });
  
  
  // Search Overlay
  
  
  $('.mysearchicon').click(function(){
	  
	  $('.search_overlay').slideDown();
	  
  });
  
  $('.mysearchclose').click(function(){
	  
	  $('.search_overlay').slideUp();
	  
  });
  
  
  // Mobile Menu
  
  
  $('.sign_in_wrapper').click(function(){
	  
	  
	  $('.mymobile_dropdown').slideDown(300);
	  
	  
  });
  
  
  $('.mymobile_dropdown span.myclose').click(function(){
	  
	  
	  $('.mymobile_dropdown').slideUp(300);
	  
	  
  });
  
  $('.mymobile_dropdown li.menu-item-has-children').click(function(){
	  
	  $(this).find('ul.sub-menu').toggleClass('myopen');
	  
	  
  });
  
  
	
	
	//Overlay
		
			$('.newsletter_overlay_content, .privacy_overlay_content, .carousel_content, .review_content').hide();
			
			$('.newsletter_form').hide();
		
		
			// Newsletter
		
		
/*
			$('.new_free_gift_inner, .mobile_offer').click(function(){
				
				$('.overlay').addClass('open');
				$('.newsletter_overlay_content').fadeIn(50);
				
			});
			
			
			$('.newsletter_button_wrapper').click(function(){
			
			$('.cover').fadeOut(500);
			$('.newsletter_form').delay(1000).fadeIn(500);
			
			});
*/
			
			
			// Privacy
			
			$('li.privacy').click(function(){
				
				$('.overlay').addClass('open');
				$('.privacy_overlay_content').fadeIn(50);
				
				
				
			});
			
			// Mobile Menu
			
			
			
			$('.mobile_menu').click(function(){
				
				$('.mobile_menu_overlay').fadeIn();
				$('.mobile_menu').fadeOut();
				$('.overlay_close_mobile_menu').fadeIn();
				
				
			});
			
			
			
			// Leave a Review
			
/*
			$('.green_bar, .review_icons').click(function(){
				
				$('.overlay').addClass('open');
				$('.review_content').fadeIn(50);
				
				
				
			});
*/
			
			
			// Carousel
			
			
			$('.slider-nav img.car_img').click(function(){
				
				$('.overlay_carousel').addClass('open');
				$('.carousel_content').fadeIn(50);
				
			});
			
			
			//
			
			$('.overlay_close').click(function(){
				
				$('.overlay').removeClass('open');
				$('.overlay_carousel').removeClass('open');
				$('.newsletter_overlay_content, .privacy_overlay_content, .carousel_content, .review_content').fadeOut(400);
				
				
				$('.newsletter_form').fadeOut(500);
				$('.cover').delay(1000).fadeIn(500);
				
			});
			
			
		// Mobile CLose 
		
		
		$('.overlay_close_mobile_menu').click(function(){
		
			$('.mobile_menu').fadeIn();
			$('.overlay_close_mobile_menu, .mobile_menu_overlay').fadeOut();
		
		});
		
		// Faq
		
		
/*
		$('.question').click(function(){
			
			$(this).next('.answer').slideToggle(200);
			$(this).toggleClass('open');
			
		});
*/
		
		
		// Back to Top
		
		
		$('.backtotop').click(function(){
				
			$('html, body').animate({ scrollTop: 0 }, 'slow');
				
		});
		
		
		
		// List View / Grid view
		
		
		$('.post_list').click(function(){
			
			$('.content_container').removeClass('grid_view');
			$(this).addClass('active');
			$('.post_grid').removeClass('active');
			
		});
		
		$('.post_grid').click(function(){
			
			$('.content_container').addClass('grid_view');
			$(this).addClass('active');
			$('.post_list').removeClass('active');
			
			
		});
		

		
		

		


		
		
		


// Slick

$('.slideshow').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed:4000,
  fade:true,
  prevArrow: ".slideshow_button_left",
  nextArrow: ".slideshow_button_right",
  arrows: true
  
});



$('.testimonials_slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow: ".my_testimonials .myprev",
  nextArrow: ".my_testimonials .mynext",
  arrows: true
  
});


$('.blog_slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow: ".my_blog .myprev",
  nextArrow: ".my_blog .mynext",
  arrows: true
  
});




$('.event_slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow: ".new_events_wrapper .myprev",
  nextArrow: ".new_events_wrapper .mynext",
  arrows: true
  
});


    
$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  lazyLoad: 'ondemand',
  arrows: true,
  fade: false,
  swipe: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
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

$('.press_slider').slick({
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
