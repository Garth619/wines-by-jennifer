<div class="mysee_more_wrapper">
		
	<span class="mysee_more">See Previous Artist</span><!-- mysee_more -->
		
	<div class="see_more_list">
			
			
		<?php $mymain_query = new WP_Query( array( 'post_type' => array ('featured_art'),'posts_per_page' => '-1','orderby' => 'title', 'order' => 'ASC' ) ); while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
                	                	
       <a href="<?php the_permalink();?>"><?php the_title(); ?></a>     	                	
                	                	
     <?php endwhile; ?>
	<?php wp_reset_postdata(); // reset the query ?>
				
	</div><!-- see_more_list -->
		
</div><!-- mysee_more_wrapper -->	

			
			
		