<?php
/**
 * Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<?php include('banner-single.php');?>

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
