
</div><!-- main -->
</div><!-- wrapper -->




<div class="footer">
	<div class="footer_col1">
		<ul class="desktop_copyright">
			<li>&copy; <?php echo date("Y"); ?> Wines By Jennifer <sup>&reg;</sup></li>
		</ul><!-- desktop_copyright -->
	</div><!-- footer_col1 -->
	<div class="footer_col2">
		<ul class="menu">
			
			<li><a href="<?php bloginfo('url');?>/contact-us">Contact</a></li>
			<li><a href="<?php bloginfo('url');?>/about-us/faq">FAQ</a></li>
			<li><a href="<?php bloginfo('url');?>/private-policy">Private Policy</a></li>
			<li><a href="<?php bloginfo('url');?>/drink-responsibly/">Please Drink Responsibly</a></li>
			
		</ul>
	</div><!-- footer_col2 -->
	<div class="footer_col3">
		<ul class="language" style="clear:both;">
<!-- 			<li>View In: Eng ESp</li> -->
<!-- 			<li>&copy; <?php echo date("Y"); ?> Wines By Jennifer <sup>&reg;</sup></li> -->
			<li class="backtotop">Back to Top</li>
		</ul>
	</div><!-- footer_col3 -->
</div><!-- footer -->



<div class="mobile_shopping_cart">
	
	<?php if( get_post_type() == 'inthenews' || is_page_template('page-inthenews.php') ) : ?>
	
	 In the News Categories |
	
	<?php endif;?>
	
	<?php if( get_post_type() == 'wbjblog' || is_page_template('page-wbjblog.php') ) : ?>
	
	WBJ Blog<sup>&reg;</sup> Categories  |
	
	<?php endif;?>
	
	
Cart (0) | Search

</div><!-- mobile_shopping_cart -->

<div class="overlay">
	
	<div class="overlay_inner">
		<span class="overlay_close">Close X</span>
		
		
	<div class="newsletter_overlay_content">	
		<img src="<?php bloginfo('template_directory');?>/images/gift.png"/>
		<h1>Free Gift!</h1>
		<p><em>"Five Days to Expert&nbsp;Wine"</em></p>
	
	<div class="newsletter_cover_form_wrapper">
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
	</div><!-- newsletter_cover_form_wrapper -->
	</div><!-- newsletter_overlay_content -->
	
	
	<div class="privacy_overlay_content">
		<h2>Private Policy</h2>
			

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	
	</div><!-- privacy_overlay_content -->
	
	
	
	
	<div class="review_content">
		<h2>Leave A Review</h2>
			

		<p>Five Star Rating Will Go Here</p>
	
	</div><!-- review_content -->
	
	
	
	
	
</div><!-- overlay_inner -->
	
	
</div><!-- overlay -->

<div class="overlay_carousel">

<div class="overlay_inner">
	
	<span class="overlay_close">Close X</span>
	<div class="carousel_content">

		
		</div><!-- carousel_content -->
		
</div><!-- overlay_inner -->
	
</div><!-- overlay_carousel -->



<div class="video_overlay">
	
	<div class="video_overlay_inner_wrapper">
		
		<span class="video_close">X</span><!-- close -->
		
		
		
		
		
	</div><!-- video_overlay_inner_wrapper -->
	
	
</div><!-- video_overlay -->


	
<?php wp_footer(); ?>


<?php the_field( 'footer_script','option'); ?>

<?php if(is_page_template( 'page-meettheteam.php' )):?>

<script type="text/javascript">

jQuery(document).ready(function(){


	<?php if(get_field('testimonials')): ?>
					
					// Testimonial Audio Overlay
					
					<?php $audiocount=1;?>
					
					
						
						 
							<?php while(has_sub_field('testimonials')): ?>
							
							
							
  
  jQuery('span.play_audio_<?php echo $audiocount; ?>').click(function(){
  	
  	
  	jQuery('.testimonial_audio_overlay').addClass('open');
  	
  	
  });
  
  
  jQuery('span.audio_close').click(function(){
  	
  	
  	jQuery('.testimonial_audio_overlay').removeClass('open');
  	
  	
  });

							<?php $audiocount++ ;?>
						 
																
							<?php endwhile; ?>
								
								
						 
						<?php endif; ?>
					


	
			<?php if(get_field('meet_the_team')): ?>
			 
				<?php $count=1;?>
				
				<?php while(has_sub_field('meet_the_team')): ?>
			 
					
					jQuery('.single_team_member_<?php echo $count; ?>').click(function(){
			
						jQuery('.team_wrapper').hide(200);
						jQuery('.single_bio_wrapper_<?php echo $count; ?>').show(200);
			
					});

					
				
				<?php $count++ ;?>
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>		
		
		
		
	jQuery('.bio_close').click(function(){
			
			jQuery('.team_wrapper').show(200);
			jQuery('.single_bio_wrapper').hide(200);
			
		});
		
	jQuery('.back_to_bio').click(function(){
			
			jQuery('.team_wrapper').show(200);
			jQuery('.single_bio_wrapper').hide(200);
			
		});




});

</script>

<?php endif;?>


</body>
</html>
