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
			
			<div class="post_list">
				
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
			
		</div><!-- list_grid_wrapper -->
	
	</div><!-- banner_overlay -->
	
</div><!-- inner_banner -->

<div class="content_container">
	
	
			
			
			
<?php 
  $temp = $wp_query; 
  $wp_query = null; 
  $wp_query = new WP_Query(); 
  $wp_query->query('showposts=6&post_type=inthenews'.'&paged='.$paged); 

  while ($wp_query->have_posts()) : $wp_query->the_post(); 
?>

  <div class="wbj_post">
	
	
			<div id="content">

			<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
			<div class="entry-meta">
				<?php twentyten_posted_on(); ?>
			</div><!-- .entry-meta -->
			
			<?php the_excerpt();?>
		
			<a href="<?php the_permalink();?>" class="button">Read More <div class="arrow-right-white"></div></a>
		
			</div><!-- content -->
		
		</div><!-- wbj_post -->


<?php endwhile; ?>

<nav>
    <?php previous_posts_link('&laquo; Newer') ?>
    <?php next_posts_link('Older &raquo;') ?>
</nav>

<?php 
  $wp_query = null; 
  $wp_query = $temp;  // Reset
?>

			
		
	

	
	
	
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
