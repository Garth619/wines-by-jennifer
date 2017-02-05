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
			<li>&copy; 2017 Wines By Jennifer <sup>&reg;</sup></li>
		</ul><!-- desktop_copyright -->
	</div><!-- footer_col1 -->
	<div class="footer_col2">
		<ul class="menu">
			<li><a href="<?php bloginfo('url');?>/contact-us">Contact</a></li>
			<li><a href="<?php bloginfo('url');?>/about-us/faq">FAQ</a></li>
			<li class="privacy" style="cursor:pointer">Privacy</li>
			<li><a href="<?php bloginfo('url');?>/drink-responsibly/">Please Drink Responsibly</a></li>
			
		</ul>
	</div><!-- footer_col2 -->
	<div class="footer_col3">
		<ul class="language" style="clear:both;">
<!-- 			<li>View In: Eng ESp</li> -->
			<li>&copy; 2017 Wines By Jennifer <sup>&reg;</sup></li>
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
		
		<div class="slider-for">
			<div><img class="car_img" data-lazy="<?php bloginfo('template_directory');?>/images/p1.jpg"/></div>
			<div><img class="car_img" data-lazy="<?php bloginfo('template_directory');?>/images/p2.jpg"/></div>
			<div><img class="car_img" data-lazy="<?php bloginfo('template_directory');?>/images/p3.jpg"/></div>
			<div><img class="car_img" data-lazy="<?php bloginfo('template_directory');?>/images/p4.jpg"/></div>
			<div><img class="car_img" data-lazy="<?php bloginfo('template_directory');?>/images/p5.jpg"/></div>
			<div><img class="car_img" data-lazy="<?php bloginfo('template_directory');?>/images/p6.jpg"/></div>
			<div><img class="car_img" data-lazy="<?php bloginfo('template_directory');?>/images/p7.jpg"/></div>
			<div><img class="car_img" data-lazy="<?php bloginfo('template_directory');?>/images/p8.jpg"/></div>
 		</div>
		
		
		</div><!-- carousel_content -->
		
</div><!-- overlay_inner -->
	
</div><!-- overlay_carousel -->

<?php if(is_handheld()): ?>

<div class="mobile_menu_overlay">
	
	<div class="overlay_inner">
		
		<span style="color:#fff;margin-top:50px;margin-left:20px;display: block;">Mobile Menu Will Go Here</span>
		
	</div><!-- overlay_inner -->
	
</div><!-- mobile_menu_overlay -->

<?php endif;?>

	
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/cycle2.js"></script>
<script src="<?php bloginfo('template_directory');?>/wow/dist/wow.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/slick/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/custom-min.js"></script>


</body>
</html>
