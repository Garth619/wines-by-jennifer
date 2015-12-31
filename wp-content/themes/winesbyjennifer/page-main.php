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

<div class="intro">
	<div class="logo_wrapper">
		<img class="logo" src="<?php bloginfo('template_directory');?>/images/logo.jpg"/>
	</div><!-- logo_wrapper -->
	<div class="intro_content">
		<p><span class="purple">Wines by Jennifer R</span> is a unique luxury entertainment destination that has been helping people enjoy an authentic global wine country experience since&nbsp;2003.</p>
	</div><!-- intro_content -->
</div><!-- intro -->


<div class="newsletter_signup">
	<img class="newsletter_bg" src="<?php bloginfo('template_directory');?>/images/newsletter.png"/>
	<div class="newsletter_text_wrap">
		<div class="newsletter_text">
		<a href="" class="newsletter_title"><img class="gift_icon" src="<?php bloginfo('template_directory');?>/images/gift.png"/>Free Gift!</a>
		
			<a href="" class="newsletter_subtitle">“5 DAYS TO EXPERT WINE TASTING”r <div class="arrow-right-yellow"></div> </a>
		</div><!-- newsletter_text -->
	</div><!-- newsletter_text_wrap -->
	
	<img class="flyer" src="<?php bloginfo('template_directory');?>/images/flyer.png"/>
</div><!-- newsletter_signup -->
<div class="four_squares">
	<div class="square square1">
		<a href="">About Us</a>
	</div><!-- square -->
	<div class="square square2">
		<a href="">Locations</a>
	</div><!-- square -->
	<div class="square square3">
		<a href="">Clubs</a>
	</div><!-- square -->
	<div class="square square4">
		<a href="">Store</a>
	</div><!-- square -->
</div><!-- four_squares -->
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
					<h2><a href="">Own a Franchise</a></h2>
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
