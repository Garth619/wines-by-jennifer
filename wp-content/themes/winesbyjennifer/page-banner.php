<?php
/**
 * Template Name: WBJ Banner Template
 *
 */

get_header(); ?>


<div class="inner_banner">
	<div class="banner_overlay">
	
		<h1><img class="ribbon ribbon_left" src="<?php bloginfo('template_directory');?>/images/ribbon.png"/><?php the_title();?><img class="ribbon ribbon_right" src="<?php bloginfo('template_directory');?>/images/ribbon-right.png"/></h1>
	
	</div><!-- banner_overlay -->
	
</div><!-- inner_banner -->

<div class="content_container">
	
	<div id="content">
	

<?php get_template_part( 'loop', 'page' );?>

	
	</div><!-- content -->
	
</div><!-- content_container -->
		
			
	<div class="box_wrapper inner wow fadeIn" data-wow-delay="0.2s">
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
	
	
<div class="slider-nav">
  <div><img class="car_img" data-lazy="http://kenwheeler.github.io/slick/img/lazyfonz1.png"/></div>
  <div><img class="car_img" data-lazy="http://kenwheeler.github.io/slick/img/lazyfonz2.png"/></div>
  <div><img class="car_img" data-lazy="http://kenwheeler.github.io/slick/img/lazyfonz3.png"/></div>
  <div><img class="car_img" data-lazy="http://kenwheeler.github.io/slick/img/lazyfonz4.png"/></div>
  <div><img class="car_img" data-lazy="http://kenwheeler.github.io/slick/img/lazyfonz5.png"/></div>
  <div><img class="car_img" data-lazy="http://kenwheeler.github.io/slick/img/lazyfonz6.png"/></div>
 </div>

<?php get_footer(); ?>
