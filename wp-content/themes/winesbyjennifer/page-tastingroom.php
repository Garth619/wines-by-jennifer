<?php
/**
 * Template Name: Tasting Room
 *
 */

get_header(); ?>


<?php include('banner.php');?>

<div class="content_container">
	
	<div id="content">
		
		<?php get_template_part( 'loop', 'page' );?>
		
		
		<div class="tasting_room_pics">
			
			<?php if(get_field('tasting_room_pictures')): ?>
			 
				<?php while(has_sub_field('tasting_room_pictures')): ?>
			 
					<div class="tr_img">
					
						<?php $image = get_sub_field( 'image' ); ?>
						
						<?php if ( $image ) { ?>
						
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						
						<?php } ?>
				
					</div><!-- tr_img -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
						
		</div><!-- tasting_room_pics -->
		
		<div class="featured_tasting_room_wrapper">
		
<?php

$post_object = get_field('tasting_room_featured_post');

if( $post_object ): 

	// override $post
	$post = $post_object;
	setup_postdata( $post ); 

	?>

		
		
		<h2 class="centered"><?php the_field('tasting_room_front_title');?></h2>
		
		<h2 class="centered">Wine Tasting Table</h2>
		
		<?php the_content();?>

		<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
    
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>

	
	</div><!-- featured_tasting_room_wrapper -->
	
	
	
	</div><!-- content -->
	
	<div class="tasting_room_wrapper">
	
		<?php include('tasting-room-list.php');?>		
	
	</div><!-- tasting_room_wrapper -->
			

	
</div><!-- content_container -->
		

 

<?php get_footer(); ?>
