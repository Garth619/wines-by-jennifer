<?php
/**
 * Template Name: WBJ Basic Template
 *
 */

get_header(); ?>




<div class="content_container no_banner">
	
	<div id="content">
	
		
		
		<?php get_template_part( 'loop', 'page' );?>
		
		
		<!-- faq -->
		
		<?php if(is_page(34)):?>
		
		<p class="question">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod?</p>
		<p class="answer">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut la</p>
		
		<p class="question">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod?</p>
		<p class="answer">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut la</p>
		
		<p class="question">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod?</p>
		<p class="answer">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut la</p>
		
		<p class="question">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod?</p>
		<p class="answer">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut la</p>
		

	<?php endif;?>
	
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
	
<?php get_footer(); ?>
