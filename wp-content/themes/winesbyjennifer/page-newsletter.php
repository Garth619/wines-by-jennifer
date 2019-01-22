<?php
/**
 * Template Name: Newsletter
 *
 */

get_header(); ?>


<div class="content_container no_banner">
	
	<div id="content">
		
		<div class="newsletter_left">
	
		<h1><?php the_title();?></h1>
		
			<div class="newsletter_feed">
		
			<?php 
			  $temp = $wp_query; 
			  $wp_query = null; 
			  $wp_query = new WP_Query(); 
			  $wp_query->query('showposts=2&post_type=newsletter'.'&paged='.$paged); 
			
			  while ($wp_query->have_posts()) : $wp_query->the_post(); 
			?>
			
			<div class="single_newsletter">
			
			 <h2><?php the_field( 'front_facing_newsletter_title' ); ?></h2>
			 
			 <?php if(get_field('pdf_or_content') == 'PDF'):?>
			 
			 	<a class="button" href="<?php the_field( 'pdf' ); ?>" target="_blank">View PDF</a>
			 
			 <?php endif;?>
			 
			 <?php if(get_field('pdf_or_content') == 'Content'):?>
			 
			 <div class="newsletter_content">
			 
			 	<?php $excerpt = wp_trim_words( get_field('newsletter_content' ), $num_words = 35, $more = '...' ); echo $excerpt?>
			 	
			 </div><!-- newsletter_content -->
			 
			 <a class="button" href="<?php the_permalink();?>">Read More</a>
			 
			 <?php endif;?>
			 
			 
			 
			 
			</div><!-- single_newsletter -->
			
			
			<?php endwhile; ?>
			
			</div><!-- newsletter_feed -->
			
			<nav>
			    <?php previous_posts_link('&laquo; Newer') ?>
			    <?php next_posts_link('Older &raquo;') ?>
			</nav>
			
			<?php 
			  $wp_query = null; 
			  $wp_query = $temp;  // Reset
			?>
			
		

</div><!-- newsletter_left -->

<div class="newsletter_right">
	
	<div class="archive_sidebar">
		
		archive list
		
		<br/>
		<br/>
		
		pagination
		
	</div><!-- archive_sidebar -->
	
	
</div><!-- newsletter_right -->

	
	</div><!-- content -->
	
</div><!-- content_container -->

			
				


			
			
		
<?php get_footer(); ?>
