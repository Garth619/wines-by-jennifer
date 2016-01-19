<?php
/**
 * Template Name: WBJ In the News
 *
 */

get_header(); ?>




<div class="inner_banner">
	<div class="banner_overlay">
	
		<h1 class="inthenews_header"><img class="ribbon ribbon_left" src="<?php bloginfo('template_directory');?>/images/ribbon.png"/>In the News<img class="ribbon ribbon_right" src="<?php bloginfo('template_directory');?>/images/ribbon-right.png"/></h1>
		

	
	
		<div class="list_grid_wrapper">
			
			<div class="list_wrapper_with_titles">
			
			<div class="post_list active" onclick="javascript:History.pushState({state:1,rand:Math.random()}, "State 1", "?display=list"); // logs {state:1,rand:"some random value"}, "State 1", "?state=1"">
				
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
		<div class="box_row">
			<div class="box">
				<img src="<?php bloginfo('template_directory');?>/images/box1.jpg"/>
				<div class="box_text_wrap">
					<h2><a href="">Join the Club</a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
			<div class="box">
				<img src="<?php bloginfo('template_directory');?>/images/box2.jpg"/>
				<div class="box_text_wrap">
					<h2><a href="">Become an Ambassador</a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
		</div><!-- box_row -->
		<div class="box_row">
			<div class="box">
				<img src="<?php bloginfo('template_directory');?>/images/box3.jpg"/>
				<div class="box_text_wrap">
					<h2><a href="">Own a<br/>Franchise</a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
			<div class="box">
				<img src="<?php bloginfo('template_directory');?>/images/box4.jpg"/>
				<div class="box_text_wrap">
					<h2><a href="">WBJr Blog</a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
		</div><!-- box_row -->
	</div><!-- box_wrapper -->
	
<?php get_footer(); ?>
