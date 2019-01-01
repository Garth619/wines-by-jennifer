<?php


get_header(); ?>

		<div class="content_container no_banner">
	
		<div id="content">
			
		<?php if ( ! have_posts() ) : ?>
	
	
	<div id="post-0" class="post error404 not-found">
		
		<h2>Not Found</h2>
		
		<div class="entry-content">
			<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
			<?php get_search_form(); ?>
			
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->


<?php endif; ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="search_results">
		
		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
			
		<?php echo wp_trim_words( get_the_content(), 54, '...' );?>
			
		<?php edit_post_link( __( 'Edit'), '', '' ); ?>

	</div><!-- search_results -->
		
<?php endwhile; // end of loop ?>

<?php endif; ?>




<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	
	<div id="nav-below" class="navigation">
		
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts' ) ); ?></div>
			
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>') ); ?></div>
	
	</div>
<?php endif; ?>

		
		</div>
		</div>


<?php get_footer(); ?>




