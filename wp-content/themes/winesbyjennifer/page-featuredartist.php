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
		
		
		
<?php $featured_artist_page = get_field( 'featured_artist_page' ); ?>
<?php if ( $featured_artist_page ): ?>
	<?php foreach ( $featured_artist_page as $post ):  ?>
		<?php setup_postdata ( $post ); ?>
		
			<div class="featured_art_content_wrapper">
		
			 	<h1 class="centered"><?php the_title();?></h1>
    
			 	<?php the_content();?>
			 
			</div><!-- featured_art_content_wrapper -->
		
		
	<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
		
		
		
	<div class="more_artists_wrapper">
	
		<?php include('featured-artist-list.php');?>
			
	</div><!-- more_artists_wrapper -->
	
	</div><!-- content -->
	
</div><!-- content_container -->
		


<?php get_footer(); ?>
