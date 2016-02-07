<?php
/**
 * Template Name: My Store Template
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
		
		<?php include('boxes.php');?>

	</div><!-- box_wrapper -->
	
	<?php // include('carousel.php');?>
	
<?php get_footer(); ?>
