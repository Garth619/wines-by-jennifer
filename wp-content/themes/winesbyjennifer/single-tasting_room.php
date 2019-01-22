<?php
/**
 * Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>


<?php if(get_field('inner_banner')):?>

	<div class="inner_banner" style="background: rgba(0, 0, 0, 0) url(<?php the_field('inner_banner');?>) no-repeat scroll center top / cover ;">
	
<?php else:?>

	<div class="inner_banner">


<?php endif;?>	

	<div class="banner_overlay">
		
		<h1><img class="ribbon ribbon_left" src="<?php bloginfo('template_directory');?>/images/ribbon.png"/>Tasting Room<img class="ribbon ribbon_right" src="<?php bloginfo('template_directory');?>/images/ribbon-right.png"/></h1>
	
	</div><!-- banner_overlay -->
	
</div><!-- inner_banner -->
		

<div class="content_container">
	
	<div id="content">
		
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					
					
					<h2 class="centered"><?php the_field('tasting_room_front_title');?></h2>
					
					<h2 class="centered">Wine Tasting Table</h2>

					<div class="entry-content">
						
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					
					</div><!-- .entry-content -->


<?php endwhile; // end of the loop. ?>	
	
	<div class="wine_flights_wrapper">
		
		<?php the_field( 'wine_flights_content','option'); ?>
		
	</div><!-- wine_flights_wrapper -->
	
	
	</div><!-- content -->
	
	<div class="tasting_room_wrapper">
	
		<?php include('tasting-room-list.php');?>		
	
	</div><!-- tasting_room_wrapper -->
	
</div><!-- content_container -->
		



 

<?php get_footer(); ?>
