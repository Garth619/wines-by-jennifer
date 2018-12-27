<?php
/**
 * Template Name: My Store Template
 *
 */

get_header(); ?>




<div class="content_container no_banner">
	
	<div id="content">
	
		<h1><?php the_title();?></h1>
		
		<?php get_template_part( 'loop', 'page' );?>
		
		
		<!-- faq -->
			
	</div><!-- content -->
	
</div><!-- content_container -->

	
<?php get_footer(); ?>
