<?php if(is_page_template('page-inthenews.php')):?>

<?php
session_start();
 
if(!empty($_GET['display'])){
$_SESSION['display'] = htmlspecialchars($_GET['display']);
}
 
//If there's a session and it has a value for "campaign" but it's not in the
//url, then this must be a successive page visit, so direct the user on to
//the same page but with the url variable attached:
 
if(!empty($_SESSION['display']) && empty($_GET['display'])){
header('location:' . $_SERVER['REQUEST_URI'] . '?display=' . $_SESSION['display']);
}

 
?>


<?php endif;?>

<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<link href='https://fonts.googleapis.com/css?family=Cinzel:400,700|Lato:400,400italic' rel='stylesheet' type='text/css'>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>


	
		
		<div class="mymobile_header">
			
			<div class="mobile_offer">
				
				<span class="offer_title">
					
					<a href="<?php bloginfo('url');?>/newsletter-page">
						<span class="color_change">Free Gift!</span> Call <a href="">1 (800) 123-1234</a></span><!-- color_change -->
					</a>
				</span><!-- offer_title -->
				
			</div><!-- mobile_offer -->
			
			<div class="mymenu_main">
				
				<div class="mymobile_icons_wrapper">
					
					<a href=""><img class="icon" src="<?php bloginfo('template_directory');?>/images/cart.png"/></a>
					<a href="<?php bloginfo('url');?>/locations"><img class="icon" src="<?php bloginfo('template_directory');?>/images/pin.png"/></a>
					<img class="icon mysearchicon" src="<?php bloginfo('template_directory');?>/images/search.png"/>
					
				</div><!-- mymobile_icons_wrapper -->
				
				<div class="mylogo_wrapper">
					
					<a href="<?php bloginfo('url');?>">
					
						<img src="<?php bloginfo('template_directory');?>/images/logo.jpg"/>
					
					</a>
					
				</div><!-- mylogo_wrapper -->
				
				<div class="my_mobile_menu_wrapper">
					
					<div class="sign_in_wrapper">
					
						<a class="mysign_in" href="">Sign In</a>
					
						<div class="menu_bars_wrapper">
						
							<div class="menu_bar"></div><!-- menu_bar -->
							<div class="menu_bar"></div><!-- menu_bar -->
							<div class="menu_bar"></div><!-- menu_bar -->
						
						</div><!-- menu_bars_wrapper -->
					
					</div><!-- sign_in_wrapper -->
					
				</div><!-- my_mobile_menu_wrapper -->
				
				
			</div><!-- mymenu_main -->
			
			
		</div><!-- mymobile_header -->
		
		<nav class="mymobile_dropdown">
			
			<span class="myclose">Close X</span><!-- close -->
			
			<ul>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</ul>
			
		</nav><!-- mymobile_dropdown -->
		
		
		
		
		<div class="search_overlay">
			
			<span class="mysearchclose">Close X</span><!-- close -->
			
			<?php get_search_form(); ?>
			
			
		</div><!-- search_overlay -->
	
		
		<div class="bg_bug"></div><!-- bg_bug -->
		
		
		<?php if(!is_page_template('page-main.php')) : ?>
		
			<div class="wrapper inner">
				
			<?php else:?>
				
			<div class="wrapper">
		
		<?php endif; ?>
		
		
		
		<div class="new_header">
			
			<div class="new_free_gift">
				
				
					
					<img src="<?php bloginfo('template_directory');?>/images/free-gift.jpg"/>
					
					
			
				
			</div><!-- new_free_gift -->
			
			<div class="new_logo_wrapper">
				
				<a href="<?php bloginfo('url');?>">
					<img src="<?php bloginfo('template_directory');?>/images/newlogo.jpg"/>
				</a>
				
			</div><!-- new_logo_wrapper -->
			
			<div class="header_right">
				
				<div class="header_right_inner">
					
					<span class="new_cart"><img class="new_cart" src="<?php bloginfo('template_directory');?>/images/new-cart.png"/> Shopping Cart | LOGIN </span>
					
					<div class="search_form"><?php get_search_form(); ?></div><!-- search_form -->
					
					<div class="new_social_icons_wrapper">
						
						<div class="single_social_icon">
							
							<a href="<?php the_field('facebook_url','option');?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/new-fb.png"/></a>
							
						</div><!-- single_social_icon -->
						
						<div class="single_social_icon">
							
							<a href="<?php the_field('googler_plus_url','option');?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/new-g.png"/></a>
							
						</div><!-- single_social_icon -->
						
						<div class="single_social_icon">
							
							<a href="<?php the_field('twitter_url','option');?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/new-twitter.png"/></a>
							
						</div><!-- single_social_icon -->
						
						<div class="single_social_icon">
							
							<a href="<?php the_field('instagram_url','option');?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/new-instagram.png"/></a>
							
						</div><!-- single_social_icon -->
						
						<div class="single_social_icon">
							
							<a href="<?php the_field('youtube_url','option');?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/new-youtube.png"/></a>
							
						</div><!-- single_social_icon -->
						
					</div><!-- new_social_icons -->
					
				</div><!-- header_right_inner -->
				
			</div><!-- header_right -->
			
		</div><!-- new_header -->
						
		<div class="new_nav">
			
			<?php wp_nav_menu( array( 'container_class' => 'menu_header', 'theme_location' => 'primary' ) ); ?>
			
		</div><!-- new_nav -->
			
						
		
		<?php if(!is_page_template('page-main.php')) : ?>
			
<!-- 			</div> --><!-- inner_page_hide_header -->
			<div class="main inner">
				
				<?php else: ?>
				
				<div class="main">
			
			<?php endif; ?><!-- hide header on mobile inner pages -->
		
		
		
				
				
				

			
			
			