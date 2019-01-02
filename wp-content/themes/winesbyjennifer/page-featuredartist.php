<?php
/**
 * Template Name: Featured Artist
 *
 */

get_header(); ?>


<?php include('banner.php');?>

<div class="content_container">
	
	<div id="content">
		
		<div class="gallery_intro">
			
			<div class="gallery_images">
				
				<?php if(get_field('featured_art_images')): ?>
				 
					<?php while(has_sub_field('featured_art_images')): ?>
				 
						<div class="single_gallery">
					
							<?php $images = get_sub_field( 'images' ); ?>
							
							<?php if ( $images ) { ?>
							
							<img src="<?php echo $images['url']; ?>" alt="<?php echo $images['alt']; ?>" />
							
							<?php } ?>
					
						</div><!-- single_gallery -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
			</div><!-- gallery_images -->
			
			<?php get_template_part( 'loop', 'page' );?>
			
		</div><!-- gallery_intro -->
		
	<?php

$post_object = get_field('featured_artist_featured_post');

if( $post_object ): 

	// override $post
	$post = $post_object;
	setup_postdata( $post ); 

	?>
    
    
    <h1 class="centered"><?php the_title();?></h1>
    
    <?php the_content();?>
    
    
    
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>

	<div class="more_artists_wrapper">
	
		<span class="mysee_more_artists">See Previous Artists</span><!-- mysee_more_artists -->
		
		<div class="artist_list">
			
			<?php include('featured-artist-list.php');?>
			
		</div><!-- artist_list -->
	
	</div><!-- more_artists_wrapper -->
	
	</div><!-- content -->
	
</div><!-- content_container -->
		



 

<?php get_footer(); ?>
