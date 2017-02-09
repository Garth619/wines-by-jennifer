
<?php if(get_field('inner_banner')):?>

<div class="inner_banner" style="background: rgba(0, 0, 0, 0) url(<?php the_field('inner_banner');?>) no-repeat scroll center top / cover ;">
	
<?php else:?>

<div class="inner_banner">
	
	
<?php endif;?>		
	

	<div class="banner_overlay">
	
		
		
		<?php if(is_page(91)):?> <!-- blog -->
		
		
		
		<h1 class="inthenews_header"><img class="ribbon ribbon_left" src="<?php bloginfo('template_directory');?>/images/ribbon.png"/>WBJ&reg; Blog<img class="ribbon ribbon_right" src="<?php bloginfo('template_directory');?>/images/ribbon-right.png"/></h1>
		
		
		<?php endif;?>
		
		
		<?php if(is_page(38)):?><!-- in the news -->
		
		
		
		<h1 class="inthenews_header"><img class="ribbon ribbon_left" src="<?php bloginfo('template_directory');?>/images/ribbon.png"/>In the News<img class="ribbon ribbon_right" src="<?php bloginfo('template_directory');?>/images/ribbon-right.png"/></h1>
		
		
		<?php endif;?>
		

	
	
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
