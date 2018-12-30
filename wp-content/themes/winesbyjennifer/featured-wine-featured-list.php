<?php if(get_field('featured_wine_lists','option')): ?>
	
		<div class="years_list">
	 
		<?php while(has_sub_field('featured_wine_lists','option')): ?>
	 
			
			<div class="single_list">
		
			<span class="myyear"><?php the_sub_field('year');?></span>
	    

	   <?php $months = get_sub_field( 'months' ); ?>
    
			<?php if ( $months ): ?>
			
				<?php foreach ( $months as $post ):  ?>
					<?php setup_postdata ( $post ); ?>
					 
					 <a class="mymonth" href="<?php the_permalink();?>"><?php the_field( 'featured_wine_front_title' ); ?></a><!-- mymonth -->
				
				<?php endforeach; ?>
			
			<?php wp_reset_postdata(); ?>
			
			<?php endif; ?>
    
		
		</div><!-- single_list -->
		
		
		<?php endwhile; ?>
		
		</div><!-- years_list -->
	 
	<?php endif; ?>
	
	
	
	
	

