<?php

$post_object = get_field('featured_wine_featured_post');

if( $post_object ): 

	// override $post
	$post = $post_object;
	setup_postdata( $post ); 

	?>
   
   
   
   
   <div class="single_wine_wrapper">
	
		
		<span class="wine_title"><?php the_field('first_wine_title');?></span><!-- wine_title -->
		<span class="wine_name"><?php the_field('first_wine_name');?></span><!-- wine_name -->
		<span class="wine_location"><?php the_field('first_wine_location');?></span><!-- wine_location -->
		
		
		
		<div class="wine_content">
			
			<?php the_field('first_wine_content');?>
			
		</div><!-- wine_content -->
		
		<img class="mylocation_image" src="<?php the_field('first_wine_location_image');?>"/>
		
	
	</div><!-- single_wine_wrapper -->
	
	
	<div class="single_wine_wrapper">
	
		
		<span class="wine_title"><?php the_field('second_wine_title');?></span><!-- wine_title -->
		<span class="wine_name"><?php the_field('second_wine_name');?></span><!-- wine_name -->
		<span class="wine_location"><?php the_field('second_wine_location');?></span><!-- wine_location -->
		
		
		
		<div class="wine_content">
			
			<?php the_field('second_wine_content');?>
			
		</div><!-- wine_content -->
		
		<img class="mylocation_image" src="<?php the_field('second_wine_location_image');?>"/>
		
	
	</div><!-- single_wine_wrapper -->
   
   
   
   
   
   <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>