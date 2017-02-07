<div class="wbj_post">
	
			<div id="content">

			<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
			<div class="entry-meta">
				<?php twentyten_posted_on(); ?> 
            
            
            <?php if ( count( get_the_category() ) ) : ?>
					| <span class="cat-links">
						<?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
					</span>
					<span class="meta-sep">|</span>
				<?php endif; ?>
            
            
            
			</div><!-- .entry-meta -->
			
			
			<?php if(get_field('excerpt_image')):?>
			
			<?php $imageID = get_field('excerpt_image'); ?>
				<?php $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true); ?>
				<?php $blog_one = wp_get_attachment_image_src(get_field('excerpt_image'), 'full'); ?>
				<img class="main_feed_img" alt="<?php echo $alt_text; ?>" src="<?php echo $blog_one[0]; ?>"/>
			
			<?php endif;?>
			
			
			<?php the_excerpt();?>
		
            
    
            
            
            
            
			<a href="<?php the_permalink();?>" class="button">Read More <div class="arrow-right-white"></div></a>
			<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
			</div><!-- content -->
		
		</div><!-- wbj_post -->