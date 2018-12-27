<?php
/**
 * Template Name: WBJ Banner Template
 *
 */

get_header(); ?>


<?php include('banner.php');?>


<div class="content_container">
	
	<div id="content">
	

<?php get_template_part( 'loop', 'page' );?>

	
	</div><!-- content -->
	
</div><!-- content_container -->
		



 

<?php get_footer(); ?>
