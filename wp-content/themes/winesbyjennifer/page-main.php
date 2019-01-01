<?php
/**
 * Template Name: Main Page */

get_header(); ?>


	<div class="main_top">
		
		<div class="new_slideshow_wrapper">
		
			<div class="new_slideshow">
				
				<?php if(get_field('slideshow')): ?>
				 
					<?php while(has_sub_field('slideshow')): ?>
				 
						<div class="single_slide">
							
							
							
							<?php if(get_sub_field('slide_image_or_slide_video') == 'Slide Video') : ?>
							
							<?php $slide_image = get_sub_field( 'slide_image' ); ?>
							
								<a href="<?php the_sub_field( 'youtube_link' ); ?>" data-lity>
									
									<div class="single_slide_overlay">
								
										<div class="play">
										
											<?php echo file_get_contents("wp-content/themes/winesbyjennifer/images/play-button.svg"); ?>
										
										</div><!-- play -->
									
										<span class="slide_text"><?php the_sub_field( 'slide_description' ); ?></span><!-- slide_text -->
								
									</div><!-- single_slide_overlay -->
		
									<img src="<?php echo $slide_image['url']; ?>" alt="<?php echo $slide_image['alt']; ?>" />
									
								</a>
							
							<?php endif;?>
								
							
							<?php if(get_sub_field('slide_image_or_slide_video') == 'Slide Image') : ?>
							
							<?php $slide_image = get_sub_field( 'slide_image' ); ?>
							
							<?php if(get_sub_field( 'slide_link' )) : ?>
							
								<a href="<?php the_sub_field( 'slide_link' ); ?>">
									
									<div class="single_slide_overlay">
										
										<span class="slide_text"><?php the_sub_field( 'slide_description' ); ?></span><!-- slide_text -->
										
										<span class="learn_more_button" ><?php the_sub_field( 'slide_button_verbiage' ); ?></span><!-- learn_more_button -->	
																		
									</div><!-- single_slide_overlay -->
		
									<img src="<?php echo $slide_image['url']; ?>" alt="<?php echo $slide_image['alt']; ?>" />
								
								</a>
								
								<?php else:?>
								
									<div class="single_slide_overlay">
										
										<span class="slide_text"><?php the_sub_field( 'slide_description' ); ?></span><!-- slide_text -->
										
									</div><!-- single_slide_overlay -->
								
									<img src="<?php echo $slide_image['url']; ?>" alt="<?php echo $slide_image['alt']; ?>" />
								
							<?php endif;?>
							
							<?php endif;?>
		
						</div><!-- single_slide -->
						
				   <?php endwhile; ?>
				 
				<?php endif; ?>				
				
							
		</div><!-- new_slideshow -->
		
		<div class="slideshow_button_wrapper">
			
			<div class="slideshow_button slideshow_button_left">
				
				<div class="button_inner"></div><!-- button_inner -->
				
			</div><!-- slideshow_button -->
			
			<div class="slideshow_button slideshow_button_right">
				
				<div class="button_inner"></div><!-- button_inner -->
				
			</div><!-- slideshow_button -->
			
		</div><!-- slideshow_button_wrapper -->
		
		</div><!-- new_slideshow_wrapper -->
		
		
	</div><!-- main_top -->



	<div class="box_wrapper">
			<div class="box_row">
			
			<div class="box">
				
				<?php $box_1_image = get_field( 'box_1_image' ); ?>
				
				<?php if ( $box_1_image ) { ?>
				
				<img src="<?php echo $box_1_image['url']; ?>" alt="<?php echo $box_1_image['alt']; ?>" />
				
				<?php } ?>
				
				<div class="box_text_wrap">
					<h2><a href="<?php the_field('box_1_page_link');?>"><?php the_field('box_1_title');?></a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
			
			<div class="box">
				
				
			<?php $box_2_image = get_field( 'box_2_image' ); ?>
			
			<?php if ( $box_2_image ) { ?>
			
			<img src="<?php echo $box_2_image['url']; ?>" alt="<?php echo $box_2_image['alt']; ?>" />
			
			<?php } ?>

				
				<div class="box_text_wrap">
					<h2><a href="<?php the_field('box_2_page_link');?>"><?php the_field('box_2_title');?></a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
		</div><!-- box_row -->
		
		<div class="box_row">
			
			<div class="box">
				
				
				<?php $box_3_image = get_field( 'box_3_image' ); ?>
				
				<?php if ( $box_3_image ) { ?>
				
				<img src="<?php echo $box_3_image['url']; ?>" alt="<?php echo $box_3_image['alt']; ?>" />
				
				<?php } ?>
				
				
				<div class="box_text_wrap">
					<h2><a href="<?php the_field('box_3_page_link');?>"><?php the_field('box_3_title');?></a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
			
			<div class="box">
				
				<?php $box_4_image = get_field( 'box_4_image' ); ?>
				
				<?php if ( $box_4_image ) { ?>
				
				<img src="<?php echo $box_4_image['url']; ?>" alt="<?php echo $box_4_image['alt']; ?>" />
				
				<?php } ?>
				
				<div class="box_text_wrap">
					<h2><a href="<?php the_field('box_4_page_link');?>"><?php the_field('box_4_title');?></a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
	
		</div><!-- box_row -->
	</div><!-- box_wrapper -->
	
	<?php if( is_main_site()) :?>
   


	
<div class="press">
			
			<span class="large_header">AS FEATURED IN</span>
			
			<div class="press_slider_wrapper">
				
				<div class="back_button press_button"><span></span></div><!-- back_button -->
				
				<div class="press_slider">
					
					
					<?php if(get_field('press_logos_new')): ?>
					 
						<?php while(has_sub_field('press_logos_new')): ?>
						
							<div class="single_slide">
								
								<?php $press_logo = get_sub_field( 'press_logo' ); ?>
		
									<img src="<?php echo $press_logo['url']; ?>" alt="<?php echo $press_logo['alt']; ?>" />
									
							</div><!-- single_slide -->
							
						<?php endwhile; ?>
					 
					<?php endif; ?>
		
					
				</div><!-- press_slider -->
				
				<div class="next_button press_button"><span></span></div><!-- next_button -->
				
			</div><!-- press_slider_wrapper -->
			
			
			
		</div><!-- press -->
		
		
		<div class="new_testimonials_wrapper">
			
			<span class="large_header">Testimonials</span><!-- large_header -->
			
			<div class="new_test_slideshow_wrapper">
				
				<div class="new_test_button_wrapper">
				
					<span class="test_button_left test_button"></span><!-- slideshow_button_left -->
				
				</div><!-- new_test_button_wrapper -->
			
				<div class="new_test_slideshow">
			
					<?php if(get_field('testimonials')): ?>
					
						<?php while(has_sub_field('testimonials')): ?>
						 
							<div class="new_test_slide">
							
								<span class="new_test_content"<?php the_sub_field('testimonial_content');?></span><!-- new_test_content -->
					
								<span class="new_name"><?php the_sub_field('testimonial_name_new');?></span>
								
								<?php if(get_sub_field( 'testimonial_location' )) :?>
								
									<span class="new_location"><?php the_sub_field( 'testimonial_location' ); ?></span>
								
								<?php endif;?>
							
							</div><!-- new_test_slide -->
							
						<?php endwhile; ?>
								
					<?php endif; ?>
			
				</div><!-- new_test_slideshow -->
				
				<div class="new_test_button_wrapper">
				
					<span class="test_button_right test_button"></span><!-- slideshow_button_right -->
				
				</div><!-- new_test_button_wrapper -->
			
			</div><!-- new_test_slideshow_wrapper -->
			
			<a class="review_button" href="<?php the_field( 'leave_a_review_link' ); ?>"><?php the_field( 'leave_a_review_verbiage' ); ?></a><!-- review_button -->
					
		</div><!-- new_testimonials_wrapper -->
		
		<?php endif;?>

<?php get_footer(); ?>
