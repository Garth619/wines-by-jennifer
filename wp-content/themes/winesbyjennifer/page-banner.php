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
	
	
<div class="slider-nav">
  <div><img class="car_img" data-lazy="<?php bloginfo('template_directory');?>/images/p1.jpg"/></div>
  <div><img class="car_img" data-lazy="<?php bloginfo('template_directory');?>/images/p2.jpg"/></div>
  <div><img class="car_img" data-lazy="<?php bloginfo('template_directory');?>/images/p3.jpg"/></div>
  <div><img class="car_img" data-lazy="<?php bloginfo('template_directory');?>/images/p4.jpg"/></div>
  <div><img class="car_img" data-lazy="<?php bloginfo('template_directory');?>/images/p5.jpg"/></div>
  <div><img class="car_img" data-lazy="<?php bloginfo('template_directory');?>/images/p6.jpg"/></div>
  <div><img class="car_img" data-lazy="<?php bloginfo('template_directory');?>/images/p7.jpg"/></div>
  <div><img class="car_img" data-lazy="<?php bloginfo('template_directory');?>/images/p8.jpg"/></div>
 </div>
 

<?php get_footer(); ?>
