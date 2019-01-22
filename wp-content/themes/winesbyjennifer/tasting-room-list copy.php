<div class="tr_list">
	
	<?php if(get_field('tasting_room_list','option')): ?>
		
		<ul class="year_list">
	 
		<?php while(has_sub_field('tasting_room_list','option')): ?>
	 
			<li><?php the_sub_field( 'year' ); ?>
		
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
	
</div><!-- tr_list -->


