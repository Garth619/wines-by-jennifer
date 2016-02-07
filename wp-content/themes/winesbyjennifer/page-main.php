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
		
				<div style="width:100%;" class="cycle-slideshow" data-cycle-slides="> .test_wrapper"  data-cycle-timeout=5000  data-cycle-prev=".test-prev"
        data-cycle-next=".test-next">
			
				<div class="test_wrapper">
					<span class="testimonial_quote purple_quote">"</span><p class="tesimonial_content">Thank you for helping make our wedding and reception absolutely perfect! We were able to relax, enjoy the evening with loved ones, as well as enjoy the outstanding food and drink. It was truly a surreal and  magical&nbsp;evening.<span class="purple_quote">"</span></p>
					<img class="testimonial_img" src="<?php bloginfo('template_directory');?>/images/circle.png"/>
					<div class="testimonial_name">
						<p>Ryan Kalis</p>
						<p>Parkville, Missouri</p>
					</div><!-- testimonial_name -->
				</div><!-- test_wrapper -->
				
				
				<div class="test_wrapper">
					<span class="testimonial_quote purple_quote">"</span><p class="tesimonial_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <span class="purple_quote">"</span></p>
					<img class="testimonial_img" src="<?php bloginfo('template_directory');?>/images/circle.png"/>
					<div class="testimonial_name">
						<p>Name</p>
						<p>Location</p>
					</div><!-- testimonial_name -->
				</div><!-- test_wrapper -->
				

					
	
				</div><!-- cycle-slideshow -->
				
				<div class="arrow-left-purple-test test-prev"></div>
				<div class="arrow-right-purple-test test-next"></div>
					
			
			</div><!-- testimonial_top_half -->
			<div class="testimonial_bottom_half">
			<div style="margin-bottom:5px" class="divider"></div><!-- divider -->
			
				<div class="review_icons">
						
						<div class="review_single_icon">
							<a href=""><img src="<?php bloginfo('template_directory');?>/images/yelp.jpg"/></a>
						</div><!-- review_single_icon -->
						<div class="review_single_icon">
							<a href=""><img src="<?php bloginfo('template_directory');?>/images/trip-advisor.png"/></a>
						</div><!-- review_single_icon -->
						<div class="review_single_icon">
							<a href=""><img src="<?php bloginfo('template_directory');?>/images/google.png"/></a>
						</div><!-- review_single_icon -->
						
				</div><!-- review_icons -->
			
			<div class="green_bar">
				
					<img style="margin-right:3px;" src="<?php bloginfo('template_directory');?>/images/stars.png"/>LEAVE A REVIEW<img style="margin-left:3px;" src="<?php bloginfo('template_directory');?>/images/stars.png"/>
			
			</div><!-- green_bar -->
			
		</div><!-- testimonial_bottom_half -->
			
			
		</div><!-- desktop_testimomials -->
		
		<?php if(is_handheld()): ?>
		
			<div class="slideshow">
			
				<div class="slide" style="background:url(<?php bloginfo('template_directory');?>/images/slide2.jpg) top center no-repeat;background-size:cover;"></div><!-- slide -->
				
			
			</div><!-- slideshow -->
		
		<?php endif;?>
		
		<?php if(!is_handheld()): ?>
		
			<div class="slideshow cycle-slideshow" data-cycle-slides="> .slide">
				
				
			
				<div class="slide" style="background:url(<?php bloginfo('template_directory');?>/images/slide2.jpg) top center no-repeat;background-size:cover;"></div><!-- slide -->
		
				<div class="slide" style="background:url(<?php bloginfo('template_directory');?>/images/slide-test.jpg) top center no-repeat;background-size:cover;"></div><!-- slide -->
				
				<div class="cycle-pager"></div>
				<div class="cycle-prev"><img src="<?php bloginfo('template_directory');?>/images/left.png"/></div>
				<div class="cycle-next"><img src="<?php bloginfo('template_directory');?>/images/right.png"/></div>
			
		</div><!-- slideshow -->
		
		<?php endif;?>
		
		
    <div class="desktop_events">
		
		<?php $mymain_query = new WP_Query( array( 'post_type' => array ( 'inthenews', 'wbjblog' ), 'order' => 'DSC' ) ); while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
    
    
			
			<div class="desktop_single_event">
				<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
				<div class="desktop_events_content">
					<p>	<?php the_excerpt();?></p>
					<a href="<?php the_permalink();?>">Read More <div class="arrow-right"></div></a>
				</div><!-- events_content -->
			</div><!-- desktop_single_event -->
			<div class="divider"></div><!-- divider -->
    
    
    
    
    <?php endwhile; ?>
   <?php wp_reset_postdata(); // reset the query ?>
		
		
		
	
			
			<div class="desktop_single_event">
				<div class="desktop_social_icon">
					<img src="<?php bloginfo('template_directory');?>/images/fb.png"/>
				</div><!-- social_icon -->
				<div class="desktop_events_content">
					<p>Lorem ipsum dolor sit amet, cons ectet ur adipi sicing elit, sed do eiusmod tem por inc idid unt ut labore et dolore magnrem ipsum dolor sit amet, cons ectet ur adipi sicing...</p>
					<a href="">Read More <div class="arrow-right"></div></a>
				</div><!-- events_content -->
			</div><!-- desktop_single_event -->
			<div class="divider"></div><!-- divider -->
			
			<div class="desktop_single_event">
				<div class="desktop_social_icon">
					<img src="<?php bloginfo('template_directory');?>/images/fb.png"/>
				</div><!-- social_icon -->
				<div class="desktop_events_content">
					<p>Lorem ipsum dolor sit amet, cons ectet ur adipi sicing elit, sed do eiusmod tem por inc idid unt ut labore et dolore magnrem ipsum dolor sit amet, cons ectet ur adipi sicing...</p>
					<a href="">Read More <div class="arrow-right"></div></a>
				</div><!-- events_content -->
			</div><!-- desktop_single_event -->
			<div class="divider"></div><!-- divider -->
			
			<div class="desktop_single_event">
				<div class="desktop_social_icon">
					<img src="<?php bloginfo('template_directory');?>/images/fb.png"/>
				</div><!-- social_icon -->
				<div class="desktop_events_content">
					<p>Lorem ipsum dolor sit amet, cons ectet ur adipi sicing elit, sed do eiusmod tem por inc idid unt ut labore et dolore magnrem ipsum dolor sit amet, cons ectet ur adipi sicing...</p>
					<a href="">Read More <div class="arrow-right"></div></a>
				</div><!-- events_content -->
			</div><!-- desktop_single_event -->
			<div class="divider"></div><!-- divider -->
			
			<div class="desktop_single_event">
				<div class="desktop_social_icon">
					<img src="<?php bloginfo('template_directory');?>/images/fb.png"/>
				</div><!-- social_icon -->
				<div class="desktop_events_content">
					<p>Lorem ipsum dolor sit amet, cons ectet ur adipi sicing elit, sed do eiusmod tem por inc idid unt ut labore et dolore magnrem ipsum dolor sit amet, cons ectet ur adipi sicing...</p>
					<a href="">Read More <div class="arrow-right"></div></a>
				</div><!-- events_content -->
			</div><!-- desktop_single_event -->
			<div class="divider"></div><!-- divider -->
			
			<div class="desktop_single_event">
				<div class="desktop_social_icon">
					<img src="<?php bloginfo('template_directory');?>/images/fb.png"/>
				</div><!-- social_icon -->
				<div class="desktop_events_content">
					<p>Lorem ipsum dolor sit amet, cons ectet ur adipi sicing elit, sed do eiusmod tem por inc idid unt ut labore et dolore magnrem ipsum dolor sit amet, cons ectet ur adipi sicing...</p>
					<a href="">Read More <div class="arrow-right"></div></a>
				</div><!-- events_content -->
			</div><!-- desktop_single_event -->
			<div class="divider"></div><!-- divider -->
			
		</div><!-- desktop_events -->
		
	</div><!-- main_top -->



	<div class="box_wrapper">
		<div class="box_row">
			<div class="box">
				<img src="<?php bloginfo('template_directory');?>/images/box1.jpg"/>
				<div class="box_text_wrap">
					<h2><a href="<?php bloginfo('url');?>/join-the-club/">Join the Club</a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
			<div class="box">
				<img src="<?php bloginfo('template_directory');?>/images/box2.jpg"/>
				<div class="box_text_wrap">
					<h2><a href="<?php bloginfo('url');?>/become-an-ambassador/">Become an Ambassador</a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
		</div><!-- box_row -->
		<div class="box_row">
			<div class="box">
				<img src="<?php bloginfo('template_directory');?>/images/box3.jpg"/>
				<div class="box_text_wrap">
					<h2><a href="<?php bloginfo('url');?>/own-a-franchise/">Own a<br/>Franchise</a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
			<div class="box">
				<img src="<?php bloginfo('template_directory');?>/images/box4.jpg"/>
				<div class="box_text_wrap">
					<h2><a href="<?php bloginfo('url');?>/wines-by-jennifer-blog/">WBJr Blog</a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
		</div><!-- box_row -->
	</div><!-- box_wrapper -->
	<div class="events">
		<div class="social_icon">
			<img src="<?php bloginfo('template_directory');?>/images/fb.png"/>
		</div><!-- social_icon -->
		<div class="events_content">
			<p>Lorem ipsum dolor sit amet, cons ectet ur adipi sicing elit, sed do eiusmod tem por inc idid unt ut labore et dolore magnrem ipsum dolor sit amet, cons ectet ur adipi sicing...</p>
			<a href="">Read More <div class="arrow-right"></div></a>
		</div><!-- events_content -->
	</div><!-- events -->
	<div class="testimonials">
		
		<p>"Thank you for helping make our wedding and reception absolutely perfect! We were able to relax, enjoy the evening with loved ones, as well as enjoy the outstanding food and drink. It was truly a surreal and  magical evening."</p>
		<img class="testimonial_img" src="<?php bloginfo('template_directory');?>/images/circle.png"/>
	</div><!-- testimonials -->

<?php get_footer(); ?>
