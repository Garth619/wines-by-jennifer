<?php
/**
 * Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<?php include('banner-single.php');?>


<div class="content_container">
	
	<div id="content">
		
		
<?php get_template_part( 'loop', 'page' );?>

	
	
	
	<div class="more_artists_wrapper">
	
		<span class="mysee_more_artists">See Previous Artists</span><!-- mysee_more_artists -->
		
		<div class="artist_list">
			
			<?php include('featured-artist-list.php');?>
			
		</div><!-- artist_list -->
	
	</div><!-- more_artists_wrapper -->
	
	</div><!-- content -->
	
</div><!-- content_container -->
		
			
	<div class="box_wrapper inner wow fadeIn" data-wow-delay="0.2s">
		
		<?php include('boxes.php');?>
		
	</div><!-- box_wrapper -->
	
	


 

<?php get_footer(); ?>
