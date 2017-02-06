<?php
/**
 * Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
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

	
	
	
	<div class="more_artists_wrapper">
	
		<span class="mysee_more_artists">See Previous Artists</span><!-- mysee_more_artists -->
		
		<div class="artist_list">
			
			<a href="">Artist Name</a>
			<a href="">Artist Name</a>
			<a href="">Artist Name</a>
			<a href="">Artist Name</a>
			<a href="">Artist Name</a>
			<a href="">Artist Name</a>
			<a href="">Artist Name</a>
			<a href="">Artist Name</a>
			<a href="">Artist Name</a>
			<a href="">Artist Name</a>
			<a href="">Artist Name</a>
			<a href="">Artist Name</a>
			<a href="">Artist Name</a>
			<a href="">Artist Name</a>
			<a href="">Artist Name</a>
			
		</div><!-- artist_list -->
	
	</div><!-- more_artists_wrapper -->
	
	</div><!-- content -->
	
</div><!-- content_container -->
		
			
	<div class="box_wrapper inner wow fadeIn" data-wow-delay="0.2s">
		
		<?php include('boxes.php');?>
		
	</div><!-- box_wrapper -->
	
	
	<?php include('carousel.php');?>

 

<?php get_footer(); ?>
