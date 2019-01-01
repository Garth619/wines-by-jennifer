<?php
/**
 * Template Name: Wine Recipes
 *
 */

get_header(); ?>




<div class="content_container no_banner">
	
	<div id="content">
	
		<h1 class="centered"><?php the_title();?></h1>
		
		<?php get_template_part( 'loop', 'page' );?>
		
		<div class="cookbook_upsell">
			
			<?php the_field( 'cookbook_upsell' ); ?>
						
		</div><!-- cookbook_upsell -->
	
	</div><!-- content -->
	
</div><!-- content_container -->
		

	
<?php get_footer(); ?>
