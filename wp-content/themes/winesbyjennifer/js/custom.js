// @codekit-prepend 'slick.min.js'
// @codekit-prepend 'lity.js'
// @codekit-prepend 'waypoints.js'

jQuery(document).ready(function($){
		

                                           
  
  
  // Featured Wine Year List
  
  
  
  $('.mysee_more').click(function(){
	  
	  $('.see_more_list').slideToggle();
	  
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
  
  $('.mymobile_dropdown li.menu-item-has-children > a').click(function(){
	  
	  $(this).next('ul.sub-menu').toggleClass('myopen');
	  
	  $(this).toggleClass('myopen');
	  
	  
  });
  
  
	
	
	
			
			// Mobile Menu
			
			
			
			$('.mobile_menu').click(function(){
				
				$('.mobile_menu_overlay').fadeIn();
				$('.mobile_menu').fadeOut();
				$('.overlay_close_mobile_menu').fadeIn();
				
				
			});
			
			
			
				
		
		// Back to Top
		
		
		$('.backtotop').click(function(){
				
			$('html, body').animate({ scrollTop: 0 }, 'slow');
				
		});
		
		
		
		// List View / Grid view
		
		
/*
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
*/
		

		
		

		


		
		
		


// Slick

$('.new_slideshow').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed:4000,
  fade:true,
  dots:true,
  prevArrow: ".slideshow_button_left",
  nextArrow: ".slideshow_button_right",
  arrows: true
});



$('.new_test_slideshow').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  adaptiveHeight:true,
  fade:true,
  // autoplay: true,
  // autoplaySpeed:4000,
  fade:true,
  dots:false,
  prevArrow: ".test_button_left",
  nextArrow: ".test_button_right",
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
  
   

   responsive: [
     {
      breakpoint: 615,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        
     }
    },
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        
     }
    },
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
        //centerMode: true,
				variableWidth: true,
     }
    }
   ]
	});
	
	
	/* Waypoints
     --------------------------------------------------------------------------------------- */


    function createWaypoint(triggerElementId, animatedElement, className, offsetVal, functionName, reverse) {
      if($('#' + triggerElementId).length) {
        var waypoint = new Waypoint({
          element: document.getElementById(triggerElementId),
          handler: function (direction) {
            if (direction === 'down') {
              $(animatedElement).addClass(className);

              if (typeof functionName === 'function') {
                functionName();
                this.destroy();
              }

            } else if (direction === 'up') {
              if (reverse) {
                $(animatedElement).removeClass(className);
              }

            }
          },
          offset: offsetVal
          // Integer or percent
          // 500 means when element is 500px from the top of the page, the event triggers
          // 50% means when element is 50% from the top of the page, the event triggers
        });
      }
    }


    createWaypoint('main_trigger', '.new_sticky_header', 'visible', -150, null, true);
    
    
    // currentsite number
    
    $('body').addClass('current-site-'+my_data.sitenumber);
    
	   
		// meet team overlay
		
		
		$('.single_new_meet_team').on('click', function(e) {
			
			$('.new_team_overlay').fadeIn(400);
			
			$(this).find('.grid_name').clone().appendTo('.overlay_name');
			
			$(this).find('.overlay_info').clone().appendTo('.overlay_bio_content');
		  
		});
		
		$('.new_close').on('click', function(e) {
			
			$('.new_team_overlay').fadeOut(400);
			
			
			var timeDelay = 400;       // DELAY IN MILLISECONDS (OR SIMPLY, 5 SECONDS DELAY).
       setTimeout(clearContents, timeDelay);

       function clearContents() {
          $('.overlay_bio_content').empty();
          $('.overlay_name').empty();
       }
			
			
		  
		});

		
	}); /* Document Ready */
