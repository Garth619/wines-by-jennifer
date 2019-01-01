<?php
/**
 * Template Name: What they are saying
 *
 */

get_header(); ?>




<div class="content_container no_banner">
	
	<div id="content">
	
		<h1><?php the_title();?></h1>
		
		<div class="page_press_wrapper">
			
			<?php if(get_field('press_page')): ?>
			 
				<?php while(has_sub_field('press_page')): ?>
				
					<?php if(get_sub_field('open_in_new_tab') == "Yes"): ?>
			 
					<div class="single_page_press">
				
						<h2><a href="<?php the_sub_field( 'link' ); ?>" target="_blank"><?php the_sub_field( 'title' ); ?></a></h2>
				
						<div class="press_description">
					
							<?php the_sub_field( 'description' ); ?>

						</div><!-- press_description -->
				
						<a class="button" href="<?php the_sub_field( 'link' ); ?>" target="_blank">Read More</a><!-- button -->
				
					</div><!-- single_page_press -->
					
					<?php else:?>
					
					<div class="single_page_press">
				
						<h2><a href="<?php the_sub_field( 'link' ); ?>"><?php the_sub_field( 'title' ); ?></a></h2>
				
						<div class="press_description">
					
							<?php the_sub_field( 'description' ); ?>

						</div><!-- press_description -->
				
						<a class="button" href="<?php the_sub_field( 'link' ); ?>">Read More</a><!-- button -->
				
					</div><!-- single_page_press -->
					
					<?php endif;?>
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</div><!-- page_press_wrapper -->
	
	</div><!-- content -->
	
</div><!-- content_container -->
		

	
<?php get_footer(); ?>
