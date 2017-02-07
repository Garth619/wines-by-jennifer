<?php 

$posts = get_field('featured_artist_list','option');

if( $posts ): ?>
   
	
   
   
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        
        
        <a href="<?php the_permalink();?>"><?php the_title();?></a>
        
    <?php endforeach; ?>
   
   
  
   
   
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>


			
			
		