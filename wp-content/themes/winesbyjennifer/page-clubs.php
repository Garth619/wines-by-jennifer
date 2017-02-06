<?php
/**
 * Template Name: WBJ Clubs
 *
 */

get_header(); ?>


<?php include('banner.php');?>

<div class="clubs club_one">
	
	<div class="club_right club_right_content wow fadeIn" data-wow-delay="0.2s">
		<div id="content">
			<h1>Wine Club</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
			<a href="<?php bloginfo('url');?>/clubs/wine-club" class="button">Learn More <div class="arrow-right-white"></div></a>
		</div><!-- content -->
	</div><!-- club_right -->
	
	<div class="club_left club_left_image wow fadeIn" data-wow-delay="0.2s">
		<img src="<?php bloginfo('template_directory');?>/images/wine_bg.png"/>
	</div><!-- club_left -->

</div><!-- club one -->


<div class="clubs club_two">
	
	<div class="club_left club_left_content wow fadeIn" data-wow-delay="0.2s">
		<div id="content">
			<h1>Cellar Club</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
			<a href="<?php bloginfo('url');?>/clubs/cellar-club" class="button">Learn More <div class="arrow-right-white"></div></a>
		</div><!-- content -->
	</div><!-- club_left -->
	
	<div class="club_right club_right_image wow fadeIn" data-wow-delay="0.2s">
			<img src="<?php bloginfo('template_directory');?>/images/cellar-bg.png"/>
	</div><!-- club_right -->

</div><!-- club two -->


<div class="clubs club_three">
	
	<div class="club_right club_right_content wow fadeIn" data-wow-delay="0.2s">
		<div id="content">
			<h1>Beer Club</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
			<a href="<?php bloginfo('url');?>/clubs/beer-club" class="button">Learn More <div class="arrow-right-white"></div></a>
		</div><!-- content -->
	</div><!-- club_left -->
	
	<div class="club_left club_left_image wow fadeIn" data-wow-delay="0.2s">
			<img src="<?php bloginfo('template_directory');?>/images/beer.jpg"/>
	</div><!-- club_right -->

</div><!-- club three -->

	
	
	

		
			
	<div class="box_wrapper inner wow fadeIn" data-wow-delay="0.2s">
		
		<?php include('boxes.php');?>

	</div><!-- box_wrapper -->
	
<?php get_footer(); ?>
