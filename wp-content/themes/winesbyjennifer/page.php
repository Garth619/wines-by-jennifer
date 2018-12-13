<?php
/**
 * Template for displaying all pages */

get_header(); ?>

		<div class="content_container no_banner">
	
	<div id="content">
	
		
		
		<?php get_template_part( 'loop', 'page' );?>
		
		
			</div><!-- content -->
	
</div><!-- content_container -->
		
			
	<div class="box_wrapper inner wow fadeIn" data-wow-delay="0.2s">
		
		<?php include('boxes.php');?>

	</div><!-- box_wrapper -->

<?php get_footer(); ?>
