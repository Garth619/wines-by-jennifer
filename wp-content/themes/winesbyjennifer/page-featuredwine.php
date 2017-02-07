<?php
/**
 * Template Name: Featured Wine Template
 *
 */

get_header(); ?>


<?php include('banner.php');?>

<div class="content_container">
	
	<div id="content">
	

	<div class="featured_wine_wrapper">
		
		
	
<?php include('featured-wine-featured-post.php');?>
		
		
		
<span class="mysee_more">See Past Featured Wines</span><!-- mysee_more -->
	
	
	<?php include('featured-wine-featured-list.php');?>
			
		
	</div><!-- featured_wine_wrapper -->

	
	</div><!-- content -->
	
</div><!-- content_container -->
		
			
	<div class="box_wrapper inner wow fadeIn" data-wow-delay="0.2s">
		
		<?php include('boxes.php');?>
		
	</div><!-- box_wrapper -->
	
	
	<?php include('carousel.php');?>

 

<?php get_footer(); ?>
