<?php 

$posts = get_field('tasting_room_list','option');

if( $posts ): ?>
   
	<ul class="tasting_list">
   
   
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        
        
        <li><a class="tasting_title" href="<?php the_permalink();?>"><?php the_field('tasting_room_single_title');?></a></li>
        
    <?php endforeach; ?>
   
	</ul>
  
   
   
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>


			
			
		