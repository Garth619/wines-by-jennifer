<?php
/**
 * Template Name: WBJ Blog
 *
 */

get_header(); ?>




<div class="inner_banner">
	<div class="banner_overlay">
	
		<h1 class="inthenews_header"><img class="ribbon ribbon_left" src="<?php bloginfo('template_directory');?>/images/ribbon.png"/>WBJ&reg; Blog<img class="ribbon ribbon_right" src="<?php bloginfo('template_directory');?>/images/ribbon-right.png"/></h1>
		

	
	
		<div class="list_grid_wrapper">
			
			<div class="list_wrapper_with_titles">
			
			<div class="post_list active">
				
				<div class="list_bar_wrapper">
					
					<div class="list_bullet"></div><!-- list_bullet -->
					<div class="list_line"></div><!-- list_bullet -->
					
				</div><!-- list_bar_wrapper -->
				
				<div class="list_bar_wrapper">
					
					<div class="list_bullet"></div><!-- list_bullet -->
					<div class="list_line"></div><!-- list_bullet -->
					
				</div><!-- list_bar_wrapper -->
				
				<div class="list_bar_wrapper">
					
					<div class="list_bullet"></div><!-- list_bullet -->
					<div class="list_line"></div><!-- list_bullet -->
					
				</div><!-- list_bar_wrapper -->
			
			
								
			</div><!-- post_list -->
			
			<span class="list_grid_title">List View</span>
			
			</div><!-- list_wrapper_with_titles -->
			
			<div class="grid_wrapper_with_titles">
			
			<div class="post_grid">
				
				
				
				<div class="grid_square_wrapper">
				
					<div class="grid_single_square"></div><!-- grid_single_square -->
					<div class="grid_single_square"></div><!-- grid_single_square -->
					<div class="grid_single_square"></div><!-- grid_single_square -->
				
				</div><!-- grid_square_wrapper -->
				
				<div class="grid_square_wrapper">	
					
					<div class="grid_single_square"></div><!-- grid_single_square -->
					<div class="grid_single_square"></div><!-- grid_single_square -->
					<div class="grid_single_square"></div><!-- grid_single_square -->
				
				</div><!-- grid_square_wrapper -->
				
				
				
				
				
			</div><!-- post_grid -->
			<span class="list_grid_title">Grid View</span>
			
			</div><!-- grid_wrapper_with_titles -->
			
		</div><!-- list_grid_wrapper -->
		

	
	</div><!-- banner_overlay -->
	
</div><!-- inner_banner -->

<div class="content_container">
	

<?php while ( have_posts() ) : the_post(); ?>

	<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
							
<?php endwhile; // End the loop. Whew. ?>


</div><!-- content_container -->
		
		
	<div class="box_wrapper inner wow fadeIn" data-wow-delay="0.2s">
		
		<?php include('boxes.php');?>

	</div><!-- box_wrapper -->
	
<?php get_footer(); ?>
