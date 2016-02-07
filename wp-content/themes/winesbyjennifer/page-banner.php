<?php
/**
 * Template Name: WBJ Banner Template
 *
 */

get_header(); ?>


<div class="inner_banner">
	<div class="banner_overlay">
	
		<h1><img class="ribbon ribbon_left" src="<?php bloginfo('template_directory');?>/images/ribbon.png"/><?php the_title();?><img class="ribbon ribbon_right" src="<?php bloginfo('template_directory');?>/images/ribbon-right.png"/></h1>
	
	</div><!-- banner_overlay -->
	
</div><!-- inner_banner -->

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
