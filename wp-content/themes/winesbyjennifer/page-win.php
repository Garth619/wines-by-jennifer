<?php
/**
 * Template Name: Win
 *
 */

get_header(); ?>


<?php include('banner.php');?>

<div class="content_container">
	
	<div id="content">
	
		<?php the_field( 'win_intro' ); ?>
		
		<div class="wine_club_wrapper club_wrapper">
		
		<?php the_field( 'new_wine_club' ); ?>
		
		</div><!-- wine_club_wrapper -->
		
		<div class="cellar_club_wrapper club_wrapper">
		
		<?php the_field( 'new_cellar_club' ); ?>
		
		</div><!-- club_wrapper -->
		
		<div class="beer_club_wrapper club_wrapper">
		
		<?php the_field( 'new_beer_club' ); ?>
		
		</div><!-- club_wrapper -->
		
		<div class="featured_wine_wrapper">
			
			<h2 class="wine centered">Featured Wines</h2>
		
			<?php

			$post_object = get_field('featured_wine_featured_post');

			if( $post_object ): 

				// override $post
				$post = $post_object;
				setup_postdata( $post ); 

			?>
   
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

   
   <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
		
		
		<span class="mysee_more">See Past Featured Wines</span><!-- mysee_more -->
	
	
		<?php include('featured-wine-featured-list.php');?>
			
		
	</div><!-- featured_wine_wrapper -->
	
	</div><!-- content -->
	
</div><!-- content_container -->
		

	
<?php get_footer(); ?>