<?php if(get_field('featured_wine_lists','option')): ?>
	
		<div class="years_list">
	 
		<?php while(has_sub_field('featured_wine_lists','option')): ?>
	 
			
			<div class="single_list">
		
			<span class="myyear"><?php the_sub_field('year');?></span>
	    
		
		<?php if(get_sub_field('months')): ?>
	 
		<?php while(has_sub_field('months')): ?>
		
		
<?php

$post_object = get_sub_field('single_month');

if( $post_object ): 

	// override $post
	$post = $post_object;
	setup_postdata( $post ); 

	?>
    
    
	    <a class="mymonth" href="<?php the_permalink();?>"><?php the_field('front_title');?></a><!-- mymonth -->
    
    
    
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
		
		
			
		
		
		<?php endwhile; ?>
	 
	<?php endif; ?>
		
		
		</div><!-- single_list -->
		
		
		<?php endwhile; ?>
		
		</div><!-- years_list -->
	 
	<?php endif; ?>
	
	
	
	
	

