<?php
/**
 * Template Name: Main Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>


	<div class="main_top">
		
		<div class="desktop_testimomials">
			<div class="testimonial_top_half">
				
				
				<div class="testi_scroll">
					
					<?php if(get_field('testimonials')): ?>
					
							<?php $audiocount=1;?>
						 
							<?php while(has_sub_field('testimonials')): ?>
						 
									<div class="new_single_testimonial">
							
							<?php if( get_sub_field('testimonial_type') == 'Testimonial Audio' ): ?>
	
								
								<span class="audio"> Audio Testimonial by <br/><?php the_sub_field('testimonial_name');?></span>
								
								
								<p>
									
									
									
									<?php 
											$attr = array(
											'src'      => get_sub_field('testimonial_audio'),
											'loop'     => '',
											'autoplay' => '',
											'preload' => 'none'
											);
											echo wp_audio_shortcode( $attr );
									?>

										
								</p>
					
								
							
							
							<?php endif; ?>
							
							
							<?php if( get_sub_field('testimonial_type') == 'Testimonial Content' ): ?>
	
								<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
					
								<span class="new_name">- <?php the_sub_field('testimonial_name');?></span>
							
							
							<?php endif; ?>
							
							
							</div><!-- new_single_testimonial -->
							
							<?php $audiocount++ ;?>
							
							<?php endwhile; ?>
								
								
						 
						<?php endif; ?>
					

								
				
				</div><!-- testi_scroll -->
					
			
			</div><!-- testimonial_top_half -->
			<div class="testimonial_bottom_half">
			<div style="margin-bottom:5px" class="divider"></div><!-- divider -->
			
				<div class="review_icons">
						
						<div class="review_single_icon">
							<img src="<?php bloginfo('template_directory');?>/images/yelp.jpg"/>
						</div><!-- review_single_icon -->
						<div class="review_single_icon">
							<img src="<?php bloginfo('template_directory');?>/images/trip-advisor.png"/>
						</div><!-- review_single_icon -->
						<div class="review_single_icon">
							<img src="<?php bloginfo('template_directory');?>/images/google.png"/>
						</div><!-- review_single_icon -->
						
				</div><!-- review_icons -->
			
			<div class="green_bar">
				
					<img style="margin-right:3px;" src="<?php bloginfo('template_directory');?>/images/stars.png"/>LEAVE A REVIEW<img style="margin-left:3px;" src="<?php bloginfo('template_directory');?>/images/stars.png"/>
			
			</div><!-- green_bar -->
			
		</div><!-- testimonial_bottom_half -->
			
			
		</div><!-- desktop_testimomials -->
		
			
		
		
			<div class="slideshow">
				
				
				
									
							<?php $imageID = get_field('video_poster_image'); ?>
							<?php $menu_one = wp_get_attachment_image_src(get_field('video_poster_image'), 'mainslides'); ?>
						
				 
							<div class="slide" style="background:url(<?php echo $menu_one[0]; ?>) top center no-repeat;background-size:cover;"></div><!-- slide -->
					
					
				    
		
				
			
				
				
							
		</div><!-- slideshow -->
		
		
		
		
    <div class="desktop_events">
		
		<?php $mymain_query = new WP_Query( array( 'post_type' => array ( 'inthenews', 'wbjblog' ), 'order' => 'DSC' ) ); while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
    
    
			
			<div class="desktop_single_event">
				<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
				<div class="desktop_events_content">
					<?php the_excerpt();?>
					<a class="read_more_main" href="<?php the_permalink();?>">Read More <div class="arrow-right"></div></a>
				</div><!-- events_content -->
			</div><!-- desktop_single_event -->
			<div class="divider"></div><!-- divider -->
    
    
    
    
    <?php endwhile; ?>
   <?php wp_reset_postdata(); // reset the query ?>
		
		
			
		</div><!-- desktop_events -->
		
	</div><!-- main_top -->



	<div class="box_wrapper">
		<?php include('boxes.php');?>
	</div><!-- box_wrapper -->
	
	
	
		
	<div class="new_events_wrapper">

		<div class="inner_event">
			
			<span class="large_header">Events</span><!-- large_header -->
			
			
			<div class="event_slider">
			
			
			<div class="single_event">
			
				<a href="">

				<span class="title">Lorem ipsum dolor</span><!-- description -->
			
				<span class="description">Lorem ipsum dolor sit amet, conse ctetur adi pisicing elit, sed do eiusmod tem por in cid idunt ut labore et dolore magna aliq ua. Ut enim ad minim veniam, quis nostrud ex ercitation ullamco laboris nisi ut aliquip ex ea </span><!-- description -->
			
				<span class="events_read_more">Read More</span><!-- events_read_more -->
			
			</a>
			
			</div><!-- single_event -->
			
			<div class="single_event">
			
				<a href="">

				<span class="title">Lorem ipsum dolor</span><!-- description -->
			
				<span class="description">Lorem ipsum dolor sit amet, conse ctetur adi pisicing elit, sed do eiusmod tem por in cid idunt ut labore et dolore magna aliq ua. Ut enim ad minim veniam, quis nostrud ex ercitation ullamco laboris nisi ut aliquip ex ea </span><!-- description -->
			
				<span class="events_read_more">Read More</span><!-- events_read_more -->
			
			</a>
			
			</div><!-- single_event -->
			
			<div class="single_event">
			
				<a href="">

				<span class="title">Lorem ipsum dolor</span><!-- description -->
			
				<span class="description">Lorem ipsum dolor sit amet, conse ctetur adi pisicing elit, sed do eiusmod tem por in cid idunt ut labore et dolore magna aliq ua. Ut enim ad minim veniam, quis nostrud ex ercitation ullamco laboris nisi ut aliquip ex ea </span><!-- description -->
			
				<span class="events_read_more">Read More</span><!-- events_read_more -->
			
			</a>
			
			</div><!-- single_event -->
			
			<div class="single_event">
			
				<a href="">

				<span class="title">Lorem ipsum dolor</span><!-- description -->
			
				<span class="description">Lorem ipsum dolor sit amet, conse ctetur adi pisicing elit, sed do eiusmod tem por in cid idunt ut labore et dolore magna aliq ua. Ut enim ad minim veniam, quis nostrud ex ercitation ullamco laboris nisi ut aliquip ex ea </span><!-- description -->
			
				<span class="events_read_more">Read More</span><!-- events_read_more -->
			
			</a>
			
			</div><!-- single_event -->
			
			</div><!-- event_slider -->
			
		</div><!-- inner_event -->
		
		
		<div class="myarrows">
			
			<img class="myprev" src="<?php bloginfo('template_directory');?>/images/myleft.png"/>
			<img class="mynext" src="<?php bloginfo('template_directory');?>/images/myright.png"/>
			
		</div><!-- myarrows -->
		
		
		
	</div><!-- new_events -->
	
	
	<div class="my_blog">
		
		<span class="large_header">WBJ Blog</span><!-- large_header -->
		
		
		
		<div class="blog_slider">
		
		
		<div class="main_page_blog_post">
		
			<a href="">
				
				
			
				<img src="<?php bloginfo('template_directory');?>/images/blog-test.jpg"/>
				
				<span class="my_blog_title">Blog Title</span>
			
				<span class="blog_description">Lorem ipsum dolor sit amet, conse ctetur adi pisicing elit, sed do eiusmod tem por in cid idunt ut labore et dolore magna aliq ua. Ut enim ad minim veniam, quis nostrud ex ercitation ullamco laboris nisi ut aliquip ex ea commodo conse quat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillu</span>
			
				<span class="blog_readmore">Read More</span><!-- blog_readmore -->
			
			</a>
			
		</div><!-- main_page_blog_post -->
		
		<div class="main_page_blog_post">
		
			<a href="">
				
				
			
				<img src="<?php bloginfo('template_directory');?>/images/blog-test.jpg"/>
				
				<span class="my_blog_title">Blog Title</span>
			
				<span class="blog_description">Lorem ipsum dolor sit amet, conse ctetur adi pisicing elit, sed do eiusmod tem por in cid idunt ut labore et dolore magna aliq ua. Ut enim ad minim veniam, quis nostrud ex ercitation ullamco laboris nisi ut aliquip ex ea commodo conse quat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillu</span>
			
				<span class="blog_readmore">Read More</span><!-- blog_readmore -->
			
			</a>
			
		</div><!-- main_page_blog_post -->
		
		<div class="main_page_blog_post">
		
			<a href="">
				
				
			
				<img src="<?php bloginfo('template_directory');?>/images/blog-test.jpg"/>
				
				<span class="my_blog_title">Blog Title</span>
			
				<span class="blog_description">Lorem ipsum dolor sit amet, conse ctetur adi pisicing elit, sed do eiusmod tem por in cid idunt ut labore et dolore magna aliq ua. Ut enim ad minim veniam, quis nostrud ex ercitation ullamco laboris nisi ut aliquip ex ea commodo conse quat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillu</span>
			
				<span class="blog_readmore">Read More</span><!-- blog_readmore -->
			
			</a>
			
		</div><!-- main_page_blog_post -->
		
		</div><!-- blog_slider -->
		
		<div class="myarrows">
			
			<img class="myprev" src="<?php bloginfo('template_directory');?>/images/myleft.png"/>
			<img class="mynext" src="<?php bloginfo('template_directory');?>/images/myright.png"/>
			
		</div><!-- myarrows -->
		
		</div><!-- my_blog -->
		
		<div class="my_testimonials">
			
			<div class="testimonials_slider">
			
			<div class="single_testimonial">
				
				<a href="">
					
					<img class="mytestimonial_img" src="<?php bloginfo('template_directory');?>/images/testimonials.png"/>
					
					<span class="my_testimonial_name">Lorem ipsum dolor</span><!-- my_testimonial_name -->
					
					<span class="my_testimonial_content">"Lorem ipsum dolor sit amet, conse ctetur adi pisicing elit, sed do eiusmod tem por in cid idunt ut labore et dolore magna aliq ua. Ut enim ad minim veniam, quis nostrud ex ercitation ullamco laboris nisi ut aliquip ex ea commodo conse quat. Duis aute irure dolor in"</span><!-- my_testimonial_content -->
					
				</a>
				
			</div><!-- single_testimonial -->
			
			<div class="single_testimonial">
				
				<a href="">
					
					<img class="mytestimonial_img" src="<?php bloginfo('template_directory');?>/images/testimonials.png"/>
					
					<span class="my_testimonial_name">Lorem ipsum dolor</span><!-- my_testimonial_name -->
					
					<span class="my_testimonial_content">"Lorem ipsum dolor sit amet, conse ctetur adi pisicing elit, sed do eiusmod tem por in cid idunt ut labore et dolore magna aliq ua. Ut enim ad minim veniam, quis nostrud ex ercitation ullamco laboris nisi ut aliquip ex ea commodo conse quat. Duis aute irure dolor in"</span><!-- my_testimonial_content -->
					
				</a>
				
			</div><!-- single_testimonial -->
			
			<div class="single_testimonial">
				
				<a href="">
					
					<img class="mytestimonial_img" src="<?php bloginfo('template_directory');?>/images/testimonials.png"/>
					
					<span class="my_testimonial_name">Lorem ipsum dolor</span><!-- my_testimonial_name -->
					
					<span class="my_testimonial_content">"Lorem ipsum dolor sit amet, conse ctetur adi pisicing elit, sed do eiusmod tem por in cid idunt ut labore et dolore magna aliq ua. Ut enim ad minim veniam, quis nostrud ex ercitation ullamco laboris nisi ut aliquip ex ea commodo conse quat. Duis aute irure dolor in"</span><!-- my_testimonial_content -->
					
				</a>
				
			</div><!-- single_testimonial -->
			
			</div><!-- testimonials_slider -->
			
			<div class="myarrows">
			
			<img class="myprev" src="<?php bloginfo('template_directory');?>/images/whiteleft.png"/>
			<img class="mynext" src="<?php bloginfo('template_directory');?>/images/whiteright.png"/>
			
		</div><!-- myarrows -->
			
			
		</div><!-- my_testimonials -->
		
		
		
		
	
	
	

<?php get_footer(); ?>
