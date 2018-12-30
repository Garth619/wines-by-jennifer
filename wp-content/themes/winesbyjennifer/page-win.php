<?php
/**
 * Template Name: Win
 *
 */

get_header(); ?>


<?php include('banner.php');?>

<div class="content_container">
	
	<div id="content">
	
		<?php the_field( 'win_intro' ); ?>
		
		<div class="wine_club_wrapper club_wrapper">
		
		<?php the_field( 'new_wine_club' ); ?>
		
		</div><!-- wine_club_wrapper -->
		
		<div class="cellar_club_wrapper club_wrapper">
		
		<?php the_field( 'new_cellar_club' ); ?>
		
		</div><!-- club_wrapper -->
		
		<div class="beer_club_wrapper club_wrapper">
		
		<?php the_field( 'new_beer_club' ); ?>
		
		</div><!-- club_wrapper -->
	
	</div><!-- content -->
	
</div><!-- content_container -->
		

	
<?php get_footer(); ?>
