<?php
/**
 * Template Name: Inner Page w/ Form
 *
 */

get_header(); ?>




<div class="content_container no_banner">
	
	<div id="content">
	
		<h1><?php the_title();?></h1>
		
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
		

	
<?php get_footer(); ?>
