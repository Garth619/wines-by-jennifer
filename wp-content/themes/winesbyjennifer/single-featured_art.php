<?php
/**
 * Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>




<div class="content_container no_banner">
	
	<div id="content">
		
		
		<h1 class="centered"><?php the_title();?></h1>
		
<?php get_template_part( 'loop', 'page' );?>

	
	
	
	<div class="more_artists_wrapper">
	
		<?php include('featured-artist-list.php');?>
			
	</div><!-- more_artists_wrapper -->
	
	</div><!-- content -->
	
</div><!-- content_container -->
		



 

<?php get_footer(); ?>
