<?php
/**
 * Template Name: Other Publications
 *
 */

get_header(); ?>


<div class="content_container no_banner">
	
	<div id="content">
	
		<h1><?php the_title();?></h1>
		
		<span class="pub_author"><?php the_field( 'publication_author_other' ); ?></span><!-- pub_author -->
				
		<div class="pub_content">
		
			<?php get_template_part( 'loop', 'page' );?>

		</div><!-- pub_content -->
		

	</div><!-- content -->
	
</div><!-- content_container -->
		

	
<?php get_footer(); ?>
