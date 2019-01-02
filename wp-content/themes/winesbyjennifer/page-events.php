<?php
/**
 * Template Name: Special Events
 *
 */

get_header(); ?>




<div class="content_container no_banner">
	
	<div id="content">
	
		<h1 class="centered"><?php the_title();?></h1>
		
		<?php get_template_part( 'loop', 'page' );?>
		
		<div class="special_events_wrapper">
			
			<?php if(get_field('special_events')): ?>
			 
				<?php while(has_sub_field('special_events')): ?>
			 
					<div class="single_event">
				
						<h2 class="centered"><?php the_sub_field( 'title' ); ?></h2>
				
						<div class="events_description">
					
							<?php the_sub_field( 'content' ); ?>
					
						</div><!-- events_description -->
				
				</div><!-- single_event -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
			
			
		</div><!-- special_events_wrapper -->
	
	</div><!-- content -->
	
</div><!-- content_container -->
		

	
<?php get_footer(); ?>
