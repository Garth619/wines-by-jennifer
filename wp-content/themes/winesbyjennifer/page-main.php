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
			
			<p>"Thank you for helping make our wedding and reception absolutely perfect! We were able to relax, enjoy the evening with loved ones, as well as enjoy the outstanding food and drink. It was truly a surreal and  magical evening."</p>
			<img class="testimonial_img" src="<?php bloginfo('template_directory');?>/images/circle.png"/>
			<div class="divider">
				
			</div><!-- divider -->
			
		</div><!-- desktop_testimomials -->
		
		<div class="slideshow">
			
			<img class="slide" src="<?php bloginfo('template_directory');?>/images/slide1.jpg"/>
			
		</div><!-- slideshow -->
		
		<div class="desktop_events">
			
			<div class="social_icon">
			<img src="<?php bloginfo('template_directory');?>/images/fb.png"/>
		</div><!-- social_icon -->
		<div class="events_content">
			<p>Lorem ipsum dolor sit amet, cons ectet ur adipi sicing elit, sed do eiusmod tem por inc idid unt ut labore et dolore magnrem ipsum dolor sit amet, cons ectet ur adipi sicing...</p>
			<a href="">Read More <div class="arrow-right"></div></a>
		</div><!-- events_content -->
			
		</div><!-- desktop_events -->
		
	</div><!-- main_top -->



	<div class="box_wrapper">
		<div class="box_row">
			<div class="box">
				<img src="<?php bloginfo('template_directory');?>/images/box1.jpg"/>
				<div class="box_text_wrap">
					<h2><a href="">Join the Club</a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
			<div class="box">
				<img src="<?php bloginfo('template_directory');?>/images/box2.jpg"/>
				<div class="box_text_wrap">
					<h2><a href="">Become an Ambassador</a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
		</div><!-- box_row -->
		<div class="box_row">
			<div class="box">
				<img src="<?php bloginfo('template_directory');?>/images/box3.jpg"/>
				<div class="box_text_wrap">
					<h2><a href="">Own a<br/>Franchise</a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
			<div class="box">
				<img src="<?php bloginfo('template_directory');?>/images/box4.jpg"/>
				<div class="box_text_wrap">
					<h2><a href="">WBJr Blog</a></h2>
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
