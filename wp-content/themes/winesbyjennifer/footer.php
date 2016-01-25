<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

</div><!-- main -->
</div><!-- wrapper -->
<div class="footer">
	<div class="footer_col1">
		<ul class="desktop_copyright">
			<li>c 2016 Wines By Jennifer r</li>
		</ul><!-- desktop_copyright -->
	</div><!-- footer_col1 -->
	<div class="footer_col2">
		<ul class="menu">
			<li><a href="">Contact</a></li>
			<li><a href="<?php bloginfo('url');?>/faq">FAQ</a></li>
			<li class="privacy">Privacy</li>
			<li><a href="">Please Drink Responsibly</a></li>
		</ul>
	</div><!-- footer_col2 -->
	<div class="footer_col3">
		<ul class="language" style="clear:both;">
			<li>View In: Eng ESp</li>
			<li>c 2015 Wines By Jennifer r</li>
		</ul>
	</div><!-- footer_col3 -->
</div><!-- footer -->



<div class="mobile_shopping_cart">
	
	<?php if( get_post_type() == 'inthenews' || is_page_template('page-inthenews.php') ) : ?>
	
	See Categories | List View | Grid View
	
	<?php endif;?>
Cart | Login | Search

</div><!-- mobile_shopping_cart -->

<div class="overlay">
	
	<div class="overlay_inner">
		<span class="overlay_close">Close X</span>
		
		
	<div class="newsletter_overlay_content">	
		<img src="<?php bloginfo('template_directory');?>/images/gift.png"/>
		<h1>Free Gift!</h1>
		<p><em>"Five Days to Expert&nbsp;Wine"</em></p>
		<div class="cover">
			
			<img class="newsletter_img" src="<?php bloginfo('template_directory');?>/images/test-bg.png"/>
			
			<div class="newsletter_button_wrapper">
				<span class="button">
					Receive Your Gift!
					</span><!-- button -->
			</div><!-- newsletter_button_wrapper -->
		</div><!-- cover -->
		<div class="newsletter_form">
			<?php gravity_form(1, false, false, false, '', true, 12); ?>
		</div><!-- newsletter_form -->
	</div><!-- newsletter_overlay_content -->
	
	
	<div class="privacy_overlay_content">
		wassgood
	
	</div><!-- privacy_overlay_content -->
	
	
	</div><!-- overlay_inner -->
	
	
</div><!-- overlay -->
	
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/cycle2.js"></script>
<script src="<?php bloginfo('template_directory');?>/wow/dist/wow.min.js"></script>


<script>
  new WOW().init({
	  mobile:       false
	  
  });
</script>
<script type="text/javascript">
	
	jQuery(document).ready(function(){
		

		
		//Overlay
		
			jQuery('.newsletter_overlay_content, .privacy_overlay_content').hide();
			
			jQuery('.newsletter_form').hide();
		
		
			// Newsletter
		
		
			jQuery('.newsletter_signup').click(function(){
				
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
			
			
			//
			
			jQuery('.overlay_close').click(function(){
				
				jQuery('.overlay').removeClass('open');
				jQuery('.newsletter_overlay_content, .privacy_overlay_content').fadeOut(400);
				
			
				jQuery('.newsletter_form').fadeOut(500);
				jQuery('.cover').delay(1000).fadeIn(500);
				
			});
		
		
		// Faq
		
		
		jQuery('.question').click(function(){
			
			jQuery(this).next('.answer').slideToggle(200);
			jQuery(this).toggleClass('open');
			
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
		

		
		
		jQuery('.single_team_member_one').click(function(){
			
			jQuery('.team_wrapper').hide(200);
			jQuery('.single_bio_wrapper_one').show(200);
			
		});
		
		
		jQuery('.single_team_member_two').click(function(){
			
			jQuery('.team_wrapper').hide(200);
			jQuery('.single_bio_wrapper_two').show(200);
			
		});
		
		
		jQuery('.single_team_member_three').click(function(){
			
			jQuery('.team_wrapper').hide(200);
			jQuery('.single_bio_wrapper_three').show(200);
			
		});

		
		
		
		
	jQuery('.bio_close').click(function(){
			
			jQuery('.team_wrapper').show(200);
			jQuery('.single_bio_wrapper').hide(200);
			
		});
		
	jQuery('.back_to_bio').click(function(){
			
			jQuery('.team_wrapper').show(200);
			jQuery('.single_bio_wrapper').hide(200);
			
		});
		

		

/*

    jQuery(".single_bio_wrapper").each(function(e) {
        if (e != 0)
            jQuery(this).hide();
    });
*/

// stackoverflow.com/questions/17064433/show-hide-divs-using-next-previous-button-using-jquery 
    
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


		// sticky menu
		
		
		
		jQuery('.mymenu').addClass('original').clone().insertAfter('.mymenu').addClass('cloned').css('position','fixed').css('top','0').css('margin-top','0').css('z-index','500').removeClass('original').hide();

scrollIntervalID = setInterval(stickIt, 10);


function stickIt() {

  var orgElementPos = jQuery('.original').offset();
  orgElementTop = orgElementPos.top;               

  if (jQuery(window).scrollTop() >= (orgElementTop)) {
    // scrolled past the original position; now only show the cloned, sticky element.

    // Cloned element should always have same left position and width as original element.     
    orgElement = jQuery('.original');
    coordsOrgElement = orgElement.offset();
    leftOrgElement = coordsOrgElement.left;  
    widthOrgElement = orgElement.css('width');
    jQuery('.cloned').css('left',leftOrgElement+'px').css('top',0).css('width',widthOrgElement).show();
    jQuery('.original').css('visibility','hidden');
    //jQuery('.logotest').show(100);
    jQuery('.mobile_shopping_cart').show(150);
    
  } else {
    // not scrolled past the menu; only show the original menu.
    jQuery('.cloned').hide();
    jQuery('.original').css('visibility','visible');
    //jQuery('.logotest').hide(100);
    jQuery('.mobile_shopping_cart').hide(150);
  }
}

		
	});

</script>



</body>
</html>
