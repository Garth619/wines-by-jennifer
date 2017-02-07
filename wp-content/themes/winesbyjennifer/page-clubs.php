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
			<h1><?php the_field('wine_club_title');?></h1>
			
			<?php the_field('wine_club_content');?>
			
			<a href="<?php the_field('wine_club_learn_more_link');?>" class="button">Learn More <div class="arrow-right-white"></div></a>
		</div><!-- content -->
	</div><!-- club_right -->
	
	<div class="club_left club_left_image wow fadeIn" data-wow-delay="0.2s">
		
		
		<?php $imageID = get_field('wine_club_image'); ?>
		<?php $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true); ?>
		<?php $menu_one = wp_get_attachment_image_src(get_field('wine_club_image'), 'clubpic'); ?>
		
		<img src="<?php echo $menu_one[0]; ?>" alt="<?php echo $alt_text; ?>"/>
	
	</div><!-- club_left -->

</div><!-- club one -->


<div class="clubs club_two">
	
	<div class="club_left club_left_content wow fadeIn" data-wow-delay="0.2s">
		<div id="content">
			<h1><?php the_field('cellar_club_title');?></h1>
			<?php the_field('cellar_club_content');?>
			<a href="<?php the_field('cellar_club_learn_more_link');?>" class="button">Learn More <div class="arrow-right-white"></div></a>
		</div><!-- content -->
	</div><!-- club_left -->
	
	<div class="club_right club_right_image wow fadeIn" data-wow-delay="0.2s">
			
		<?php $imagetwoID = get_field('cellar_club_image'); ?>
		<?php $alt_texttwo = get_post_meta($imagetwoID , '_wp_attachment_image_alt', true); ?>
		<?php $menu_two = wp_get_attachment_image_src(get_field('cellar_club_image'), 'clubpic'); ?>
		
		<img src="<?php echo $menu_two[0]; ?>" alt="<?php echo $alt_texttwo; ?>"/>
	
	</div><!-- club_right -->

</div><!-- club two -->


<div class="clubs club_three">
	
	<div class="club_right club_right_content wow fadeIn" data-wow-delay="0.2s">
		<div id="content">
			
			<h1><?php the_field('beer_club_title');?></h1>
			
			
			<?php the_field('beer_club_content');?>
			
			<a href="<?php the_field('beer_club_learn_more_link');?>" class="button">Learn More <div class="arrow-right-white"></div></a>
		
		</div><!-- content -->
	</div><!-- club_left -->
	
	<div class="club_left club_left_image wow fadeIn" data-wow-delay="0.2s">
			
			
		<?php $imagethreeID = get_field('beer_club_image'); ?>
		<?php $alt_textthree = get_post_meta($imagetwoID , '_wp_attachment_image_alt', true); ?>
		<?php $menu_three = wp_get_attachment_image_src(get_field('beer_club_image'), 'clubpic'); ?>
		
		<img src="<?php echo $menu_three[0]; ?>" alt="<?php echo $alt_textthree; ?>"/>
	
	
	</div><!-- club_right -->

</div><!-- club three -->

	
	
	

		
			
	<div class="box_wrapper inner wow fadeIn" data-wow-delay="0.2s">
		
		<?php include('boxes.php');?>

	</div><!-- box_wrapper -->
	
<?php get_footer(); ?>
