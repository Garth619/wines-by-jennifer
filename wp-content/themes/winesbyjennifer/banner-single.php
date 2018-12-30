

<?php if(is_singular('inthenews')):?>



<?php if(get_field('inner_banner',38)):?><!-- in the news page banner -->


<div class="inner_banner" style="background: rgba(0, 0, 0, 0) url(<?php the_field('inner_banner', 38);?>) no-repeat scroll center top / cover ;">
	
	<?php else:?>
	
	<div class="inner_banner">
		
		
	<?php endif;?>	
	
	
	<div class="banner_overlay">
	
		<h1 style="padding-bottom:0px;padding-top:120px;"><img class="ribbon ribbon_left" src="<?php bloginfo('template_directory');?>/images/ribbon.png"/>In the News<img class="ribbon ribbon_right" src="<?php bloginfo('template_directory');?>/images/ribbon-right.png"/></h1>
		
		<a style="padding-bottom:80px;" href="<?php bloginfo('url');?>/about-us/in-the-news" class="back_to_blog">Return To In The News Feed</a>
	
	</div><!-- banner_overlay -->
	
		
</div><!-- inner_banner -->

	
	
<?php endif;?>



<?php if(is_singular('wbjblog')):?>



<?php if(get_field('inner_banner',91)):?><!-- in the news page banner -->


<div class="inner_banner" style="background: rgba(0, 0, 0, 0) url(<?php the_field('inner_banner', 91);?>) no-repeat scroll center top / cover ;">
	
	<?php else:?>
	
	<div class="inner_banner">
		
		
	<?php endif;?>	
	
	
	<div class="banner_overlay">
	
		<h1 style="padding-bottom:0px;padding-top:120px;"><img class="ribbon ribbon_left" src="<?php bloginfo('template_directory');?>/images/ribbon.png"/>WBJ&reg; Blog<img class="ribbon ribbon_right" src="<?php bloginfo('template_directory');?>/images/ribbon-right.png"/></h1>
		
		<a style="padding-bottom:80px;" href="<?php bloginfo('url');?>/about-us/wines-by-jennifer-blog" class="back_to_blog">Return To The Blog Feed</a>
	
	</div><!-- banner_overlay -->
	
		
</div><!-- inner_banner -->

	
	
<?php endif;?>
	



<?php if(is_singular('featured_wines')):?>


	
	<?php if(get_field('inner_banner',142)):?>

	<div class="inner_banner" style="background: rgba(0, 0, 0, 0) url(<?php the_field('inner_banner',142);?>) no-repeat scroll center top / cover ;">
	
<?php else:?>

	<div class="inner_banner">


<?php endif;?>	

	<div class="banner_overlay">
		
		
	
		<h1><img class="ribbon ribbon_left" src="<?php bloginfo('template_directory');?>/images/ribbon.png"/><?php the_field( 'featured_wine_front_title' ); ?><img class="ribbon ribbon_right" src="<?php bloginfo('template_directory');?>/images/ribbon-right.png"/></h1>
	
	</div><!-- banner_overlay -->
	
</div><!-- inner_banner -->



	
<?php endif;?>




<?php if(is_singular('featured_artists')):?>


	
	<?php if(get_field('inner_banner',150)):?>

	<div class="inner_banner" style="background: rgba(0, 0, 0, 0) url(<?php the_field('inner_banner',150);?>) no-repeat scroll center top / cover ;">
	
<?php else:?>

	<div class="inner_banner">


<?php endif;?>	

	<div class="banner_overlay">
		
		
	
		<h1><img class="ribbon ribbon_left" src="<?php bloginfo('template_directory');?>/images/ribbon.png"/><?php the_title();?><img class="ribbon ribbon_right" src="<?php bloginfo('template_directory');?>/images/ribbon-right.png"/></h1>
	
	</div><!-- banner_overlay -->
	
</div><!-- inner_banner -->


<?php endif;?>
	




