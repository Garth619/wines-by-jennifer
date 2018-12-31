<?php
/**
 * Template Name: Publications
 *
 */

get_header(); ?>


<div class="content_container no_banner">
	
	<div id="content">
	
		<h1><?php the_title();?></h1>
		
		<div class="publications_wrapper">
		
		<div class="publications_inner">
			
			
			<?php if(get_field('wbj_publications')): ?>
			 
				<?php while(has_sub_field('wbj_publications')): ?>
			 
					<?php the_sub_field( 'intro' ); ?>
					
					<?php if(get_sub_field('publications')): ?>
					 
						<?php while(has_sub_field('publications')): ?>
					 
							<div class="single_publication">
		
								<span><?php the_sub_field( 'monthyear' ); ?></span> - 
								
								<?php $post_object = get_sub_field( 'article_link' ); ?>
								
								<?php if ( $post_object ): ?>
								
								<?php $post = $post_object; ?>
								
								<?php setup_postdata( $post ); ?> 
									
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<?php wp_reset_postdata(); ?>
								
								<?php endif; ?>
			
							</div><!-- single_publication -->
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</div><!-- publications_inner -->
		
		<div class="publications_inner">
			
			
			<?php if(get_field('other_publications_repeater')): ?>
			 
				<?php while(has_sub_field('other_publications_repeater')): ?>
			 
					<?php the_sub_field( 'intro' ); ?>
					
					<?php if(get_sub_field('other_publications')): ?>
					 
						<?php while(has_sub_field('other_publications')): ?>
					 
							<div class="single_publication">
		
								<?php $post_object = get_sub_field( 'article_title' ); ?>
								<?php if ( $post_object ): ?>
								<?php $post = $post_object; ?>
								<?php setup_postdata( $post ); ?> 
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<?php wp_reset_postdata(); ?>
								<?php endif; ?>
								
								<span class="other_pub_description"><?php the_sub_field( 'article_description' ); ?></span><!-- other_pub_description -->
			
							</div><!-- single_publication -->
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
			</div><!-- publications_inner -->
		
		</div><!-- publications_wrapper -->
	
	</div><!-- content -->
	
</div><!-- content_container -->
		

	
<?php get_footer(); ?>
