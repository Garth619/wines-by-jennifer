<?php
/**
 * Template Name: Testimonials
 *
 */

get_header(); ?>




<div class="content_container no_banner">
	
	<div id="content">
	
		<h1 class="centered"><?php the_title();?></h1>
		
		<div class="testi_page_wrapper">
			
			<?php if(get_field('testimonials')): ?>
					
						<?php while(has_sub_field('testimonials')): ?>
						 
									<div class="single_testimonial_page">
							
							<?php if( get_sub_field('testimonial_type') == 'Testimonial Audio' ): ?>
	
								
								<span class="audio"> Audio Testimonial by <br/><?php the_sub_field('testimonial_name_new');?></span>
								
								
								<div class="audio">
									
									
									
									<?php 
											$attr = array(
											'src'      => get_sub_field('testimonial_audio'),
											'loop'     => '',
											'autoplay' => '',
											'preload' => 'none'
											);
											echo wp_audio_shortcode( $attr );
									?>

										
								</div>
					
								
							
							
							<?php endif; ?>
							
							
							<?php if( get_sub_field('testimonial_type') == 'Testimonial Content' ): ?>
	
								<?php the_sub_field('testimonial_content');?>
					
								<span class="new_name">- <?php the_sub_field('testimonial_name_new');?></span>
							
							
							<?php endif; ?>
							
							
							</div><!-- single_testimonial_page -->
							
							
							
							<?php endwhile; ?>
								
								
						 
						<?php endif; ?>
			
			
		</div><!-- testi_page_wrapper -->
		
	</div><!-- content -->
	
</div><!-- content_container -->
		

	
<?php get_footer(); ?>
