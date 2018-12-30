<?php


get_header(); ?>

<?php include('banner-single.php');?>

<div class="content_container">
	
	<div id="content">
	

	<div class="featured_wine_wrapper">
		
		
	<div class="single_wine_wrapper">
	
		
		<span class="wine_title"><?php the_field('first_wine_title');?></span><!-- wine_title -->
		<span class="wine_name"><?php the_field('first_wine_name');?></span><!-- wine_name -->
		<span class="wine_location"><?php the_field('first_wine_location');?></span><!-- wine_location -->
		
		
		
		<div class="wine_content">
			
			<?php the_field('first_wine_content');?>
			
		</div><!-- wine_content -->
		
		<img class="mylocation_image" src="<?php the_field('first_wine_location_image');?>"/>
		
	
	</div><!-- single_wine_wrapper -->
	
	
	<div class="single_wine_wrapper">
	
		
		<span class="wine_title"><?php the_field('second_wine_title');?></span><!-- wine_title -->
		<span class="wine_name"><?php the_field('second_wine_name');?></span><!-- wine_name -->
		<span class="wine_location"><?php the_field('second_wine_location');?></span><!-- wine_location -->
		
		
		
		<div class="wine_content">
			
			<?php the_field('second_wine_content');?>
			
		</div><!-- wine_content -->
		
		<img class="mylocation_image" src="<?php the_field('second_wine_location_image');?>"/>
		
	
	</div><!-- single_wine_wrapper -->
	
	<span class="mysee_more">See Past Featured Wines</span><!-- mysee_more -->
	
	
	
	<?php include('featured-wine-featured-list.php');?>
	
	
	</div><!-- featured_wine_wrapper -->

	
	</div><!-- content -->
	
</div><!-- content_container -->
		

 

<?php get_footer(); ?>
