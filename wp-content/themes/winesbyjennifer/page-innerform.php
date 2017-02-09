<?php
/**
 * Template Name: Inner Page w/ Form
 *
 */

get_header(); ?>




<div class="content_container no_banner">
	
	<div id="content">
	
		
		
		<?php get_template_part( 'loop', 'page' );?>
		
	
	</div><!-- content -->
	
	<div class="inner_form_wrapper">
		
		<?php 
			$form_object = get_field('gravity_form_option');
			gravity_form_enqueue_scripts($form_object['id'], true);
			gravity_form($form_object['id'], true, false, false, '', true, 12); 
		?>
		
		
		
		
	</div><!-- inner_form_wrapper -->
	
</div><!-- content_container -->
		
			
	<div class="box_wrapper inner wow fadeIn" data-wow-delay="0.2s">
		
		<?php include('boxes.php');?>

	</div><!-- box_wrapper -->
	
	
	
<?php get_footer(); ?>
