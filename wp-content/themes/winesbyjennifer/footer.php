
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
	
	<div class="mobile_social_icons">
		
		<a class="facebook" href="<?php the_field('facebook_link','option');?>" target="_blank">
								
								<?php echo file_get_contents("wp-content/themes/winesbyjennifer/images/facebook.svg"); ?>
							
							</a>
							
						
						
					
							
							<a class="google" href="<?php the_field('google_plus_link','option');?>" target="_blank">
								
								<?php echo file_get_contents("wp-content/themes/winesbyjennifer/images/google-plus.svg"); ?>
							
							</a>
							
					
							
							<a class="twitter" href="<?php the_field('twitter_link','option');?>" target="_blank">
								
								<?php echo file_get_contents("wp-content/themes/winesbyjennifer/images/twitter.svg"); ?>
							
							</a>
							
					
							
							<a class="youtube" href="<?php the_field('youtube_link','option');?>" target="_blank">
								
								<?php echo file_get_contents("wp-content/themes/winesbyjennifer/images/youtube.svg"); ?>
							
							</a>

		
	</div><!-- mobile_social_icons -->
	
</div><!-- footer -->


<?php wp_footer(); ?>


<?php the_field( 'footer_script','option'); ?>


</body>
</html>
