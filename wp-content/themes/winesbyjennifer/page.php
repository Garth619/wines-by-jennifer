<?php
/**
 * Template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

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
