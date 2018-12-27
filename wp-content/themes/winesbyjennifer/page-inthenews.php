<?php
/**
 * Template Name: WBJ In the News
 *
 */

get_header(); ?>


<?php include('banner-grid.php');?>


<div class="content_container">
	

<?php 
  $temp = $wp_query; 
  $wp_query = null; 
  $wp_query = new WP_Query(); 
  $wp_query->query('showposts=15&post_type=inthenews'.'&paged='.$paged); 

  while ($wp_query->have_posts()) : $wp_query->the_post(); 
?>

  <div class="wbj_post">
	
	
			<div id="content">

			<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
			
			<span class="meta_date"><?php $pfx_date = get_the_date(); echo $pfx_date ?></span><!-- meta_date -->
			
			<div class="blog_content">
			
				<?php echo wp_trim_words( get_the_content(), 70, '...' );?>
			
			</div><!-- blog_content -->
		
			<a href="<?php the_permalink();?>" class="button">Read More <div class="arrow-right-white"></div></a>
		
			</div><!-- content -->
		
		</div><!-- wbj_post -->


<?php endwhile; ?>

<nav class="cpt_nav">
    <?php previous_posts_link('&laquo; Newer') ?>
    <?php next_posts_link('Older &raquo;') ?>
</nav>

<?php 
  $wp_query = null; 
  $wp_query = $temp;  // Reset
?>






</div><!-- content_container -->
		

	
<?php get_footer(); ?>
