<?php
/**
 * Template Name: WBJ Blog
 *
 */

get_header(); ?>

<?php include('banner-grid.php');?>

<div class="content_container">
	

<?php while ( have_posts() ) : the_post(); ?>

	<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
							
<?php endwhile; // End the loop. Whew. ?>


</div><!-- content_container -->
		
		
	<div class="box_wrapper inner wow fadeIn" data-wow-delay="0.2s">
		
		<?php include('boxes.php');?>

	</div><!-- box_wrapper -->
	
<?php get_footer(); ?>
