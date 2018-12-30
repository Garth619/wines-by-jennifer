<?php
/**
 * Template Name: Locations
 *
 */

get_header(); ?>




<div class="content_container no_banner">
	
	<div id="content" class="locations_page">
	
		<h1 class="centered"><?php the_title();?></h1>
		
		<?php the_field( 'location_map' ); ?>
		
		<div class="key">
		
			<span class="key_row">
				<?php the_field( 'purple_key' ); ?>
			</span><!-- key_row -->
		
			<span class="key_row">
				<?php the_field( 'green_key' ); ?>
			</span><!-- key_row -->
		
		</div><!-- key -->
		
		
		<?php the_field( 'mytext_editor' ); ?>
	
	</div><!-- content -->
	
</div><!-- content_container -->
		

	
<?php get_footer(); ?>
