<div class="mysee_more_wrapper">
		
		
		<span class="mysee_more">See Previous Tasting Room Reviews</span><!-- mysee_more -->
		
		<div class="see_more_list">
			
			
			<?php if(get_field('tasting_room_list','option')): ?>
		
		<ul class="year_list">
	 
		<?php while(has_sub_field('tasting_room_list','option')): ?>
	 
			<li>
			
				<span><?php the_sub_field( 'year' ); ?></span>
		
				<ul class="tr_titles">
					
					<?php $month = get_sub_field( 'month' ); ?>
					<?php if ( $month ): ?>
					<?php foreach ( $month as $post ):  ?>
					<?php setup_postdata ( $post ); ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_field('tasting_room_front_title'); ?></a></li>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
			
								
				</ul><!-- tr_titles -->
		
			</li>
	    
		<?php endwhile; ?>
		
		</ul><!-- year_list -->
	 
	<?php endif; ?>
                	                	
<!--            <a href="<?php the_permalink();?>"><?php the_field( 'featured_wine_front_title' ); ?></a>   -->   	                	
                	                	

				
			
		</div><!-- see_more_list -->
		
		</div><!-- mysee_more_wrapper -->	
	
	
	
	
