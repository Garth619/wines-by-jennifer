<?php if(get_field('inner_banner')):?>


<div class="inner_banner" style="background: rgba(0, 0, 0, 0) url(<?php the_field('inner_banner');?>) no-repeat scroll center top / cover ;">
	
	<?php else:?>
	
	<div class="inner_banner">
		
		
	<?php endif;?>	
	
	
	<div class="banner_overlay">
	
		<h1 style="padding-bottom:0px;padding-top:80px;"><img class="ribbon ribbon_left" src="<?php bloginfo('template_directory');?>/images/ribbon.png"/>In the News<img class="ribbon ribbon_right" src="<?php bloginfo('template_directory');?>/images/ribbon-right.png"/></h1>
		
		<a href="<?php bloginfo('url');?>/about-us/in-the-news" class="back_to_blog">Return To In The News Feed</a>
	
	</div><!-- banner_overlay -->
	
		
</div><!-- inner_banner -->

