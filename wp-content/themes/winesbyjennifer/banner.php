

<?php if(get_field('inner_banner')):?>

	<div class="inner_banner" style="background: rgba(0, 0, 0, 0) url(<?php the_field('inner_banner');?>) no-repeat scroll center top / cover ;">
	
<?php else:?>

	<div class="inner_banner">


<?php endif;?>	

	<div class="banner_overlay">
		
		
	
		<h1><img class="ribbon ribbon_left" src="<?php bloginfo('template_directory');?>/images/ribbon.png"/><?php the_title();?><img class="ribbon ribbon_right" src="<?php bloginfo('template_directory');?>/images/ribbon-right.png"/></h1>
	
	</div><!-- banner_overlay -->
	
</div><!-- inner_banner -->
