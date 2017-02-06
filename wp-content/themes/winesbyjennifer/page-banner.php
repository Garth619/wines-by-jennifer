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
		
			
	<div class="box_wrapper inner wow fadeIn" data-wow-delay="0.2s">
		
		<?php include('boxes.php');?>
		
	</div><!-- box_wrapper -->
	
	
	<?php include('carousel.php');?>

 

<?php get_footer(); ?>
