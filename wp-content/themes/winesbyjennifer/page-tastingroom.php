<?php
/**
 * Template Name: Tasting Room
 *
 */

get_header(); ?>


<?php include('banner.php');?>

<div class="content_container">
	
	<div id="content">
		
<?php

$post_object = get_field('tasting_room_post');

if( $post_object ): 

	// override $post
	$post = $post_object;
	setup_postdata( $post ); 

	?>

		
		
		<h1><?php the_field('tasting_room_single_title');?></h1>
		
		<?php the_content();?>

    
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>

	
	
	
	<div class="tasting_room_wrapper">
	
		<span class="mysee_more_tasting">See Previous Tasting Room Reviews</span><!-- mysee_more_artists -->
		
		<div class="tasting_drop">
			
			
			<?php include('tasting-room-list.php');?>			
			
						
		</div><!-- tasting_list -->
	
	</div><!-- tasting_room_wrapper -->
	
	</div><!-- content -->
	
</div><!-- content_container -->
		
			
	<div class="box_wrapper inner wow fadeIn" data-wow-delay="0.2s">
		
		<?php include('boxes.php');?>
		
	</div><!-- box_wrapper -->
	


 

<?php get_footer(); ?>
