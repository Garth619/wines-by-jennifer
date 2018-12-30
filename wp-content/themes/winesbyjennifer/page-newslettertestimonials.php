<?php
/**
 * Template Name: Newsletter Testimonials
 *
 */

get_header(); ?>




<div class="content_container no_banner">
	
	<div id="content">
	
		<h1 class="centered"><?php the_title();?></h1>
		
		<div class="testi_page_wrapper">
			
			<?php if(get_field('newsletter_testimonials')): ?>
					
						<?php while(has_sub_field('newsletter_testimonials')): ?>
						 
							<div class="news_test_single">
							
								<span class="new_test_content"<?php the_sub_field('testimonial_content');?></span><!-- new_test_content -->
					
								<span class="new_name"><?php the_sub_field('testimonial_name_new');?></span>
								
								<?php if(get_sub_field( 'testimonial_location' )) :?>
								
									<span class="new_location"><?php the_sub_field( 'testimonial_location' ); ?></span>
								
								<?php endif;?>
							
							</div><!-- news_test_single -->
							
						<?php endwhile; ?>
								
					<?php endif; ?>
			
			
		</div><!-- testi_page_wrapper -->
		
	</div><!-- content -->
	
</div><!-- content_container -->
		

	
<?php get_footer(); ?>
