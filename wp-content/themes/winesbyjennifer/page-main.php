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
							
							<div class="single_slide_overlay"></div><!-- single_slide_overlay -->
							
							<?php if(get_sub_field('slide_image_or_slide_video') == 'Slide Video') : ?>
							
							<?php $slide_image = get_sub_field( 'slide_image' ); ?>
							
								<a href="<?php the_sub_field( 'youtube_link' ); ?>" data-lity>
		
									<img src="<?php echo $slide_image['url']; ?>" alt="<?php echo $slide_image['alt']; ?>" />
								
								</a>
							
							<?php endif;?>
								
							
							<?php if(get_sub_field('slide_image_or_slide_video') == 'Slide Image') : ?>
							
							<?php $slide_image = get_sub_field( 'slide_image' ); ?>
							
							<?php if(get_sub_field( 'slide_link' )) : ?>
							
								<a href="<?php the_sub_field( 'slide_link' ); ?>">
		
									<img src="<?php echo $slide_image['url']; ?>" alt="<?php echo $slide_image['alt']; ?>" />
								
								</a>
								
								<?php else:?>
								
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
		<?php include('boxes.php');?>
	</div><!-- box_wrapper -->
	
<div class="press">
			
			<span class="large_header">AS FEATURED IN</span>
			
			<div class="press_slider_wrapper">
				
				<div class="back_button press_button"><span></span></div><!-- back_button -->
				
				<div class="press_slider">
					
					
					<?php if(get_field('press_logos_new')): ?>
					 
						<?php while(has_sub_field('press_logos_new')): ?>
						
							<div class="single_slide">
								
								<?php $press_logo = get_sub_field( 'press_logo' ); ?>
		
									<a href="<?php the_field('press_page_link');?>"><img src="<?php echo $press_logo['url']; ?>" alt="<?php echo $press_logo['alt']; ?>" /></a>
							</div><!-- single_slide -->
							
						<?php endwhile; ?>
					 
					<?php endif; ?>
		
					
				</div><!-- press_slider -->
				
				<div class="next_button press_button"><span></span></div><!-- next_button -->
				
			</div><!-- press_slider_wrapper -->
			
			
			
		</div><!-- press -->



<?php get_footer(); ?>
