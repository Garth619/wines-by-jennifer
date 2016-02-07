<?php
/**
 * Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>



<div class="inner_banner">
	
	
	<div class="banner_overlay">
	
		<h1><img class="ribbon ribbon_left" src="<?php bloginfo('template_directory');?>/images/ribbon.png"/>In the News<img class="ribbon ribbon_right" src="<?php bloginfo('template_directory');?>/images/ribbon-right.png"/></h1>
		
		<a href="<?php bloginfo('url');?>/about-us/in-the-news" class="back_to_blog">Return To In The News Feed</a>
	
	</div><!-- banner_overlay -->
	
		
</div><!-- inner_banner -->

<div class="content_container">
	
	
	<div class="wbj_post">
	
	
		<div id="content">
		
		
		<?php get_template_part( 'loop', 'single' ); ?>
					
		</div><!-- content -->
		
		</div><!-- wbj_post -->
		
		
		
	

	
	
	
</div><!-- content_container -->
		
		
		


		
			







			
	<div class="box_wrapper inner wow fadeIn" data-wow-delay="0.2s">
		
		
		<?php include('boxes.php');?>
		
	</div><!-- box_wrapper -->



<?php get_footer(); ?>
