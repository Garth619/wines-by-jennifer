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
		
		<div class="newsletter_content_wrapper">
		
		<div class="newsletter_left">

		
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				
			
					<h1><?php the_field( 'front_facing_newsletter_title' ); ?></h1>
			 
					<?php if(get_field('pdf_or_content') == 'PDF'):?>
			 
						<a class="button" href="<?php the_field( 'pdf' ); ?>" target="_blank">View PDF</a>
			 
					<?php endif;?>
			 
					<?php if(get_field('pdf_or_content') == 'Content'):?>
			 
						<div class="newsletter_content">
			 
							<?php the_field('newsletter_content');?>
			 	
			 			</div><!-- newsletter_content -->
			 
			 			
			 
			 		<?php endif;?>
			 
			 
			
			<?php endwhile; // end of loop ?>

			<?php endif; ?>
			
					
		</div><!-- newsletter_left -->

<div class="newsletter_right">
	
	<div class="archive_sidebar">
		
		<?php dynamic_sidebar( 'archive_sidebar' ); ?>
		
	</div><!-- archive_sidebar -->
	
	
</div><!-- newsletter_right -->

</div><!-- newsletter_content_wrapper -->

	
	</div><!-- content -->
	
</div><!-- content_container -->

			
				







			
			
			
<?php get_footer(); ?>
