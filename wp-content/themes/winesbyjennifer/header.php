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
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link href='https://fonts.googleapis.com/css?family=Cinzel:400,700|Lato:400,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/animate.css">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php
	/*
	 * We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/*
	 * Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>

				
		
		<div class="mobile_header">
			
			<h1><a href="<?php bloginfo('url');?>">Wines by Jennifer r</a></h1>
			
			<div class="mobile_menu">
				<div class="white_bar"></div>
				<div class="white_bar"></div>
				<div class="white_bar"></div>
			</div><!-- mobile menu -->
			
		</div><!-- mobile_header --> 
		
		<div class="bg_bug"></div><!-- bg_bug -->
		
		
		<?php if(!is_page_template('page-main.php')) : ?>
		
			<div class="wrapper inner">
				
			<?php else:?>
				
			<div class="wrapper">
		
		<?php endif; ?>
		
		
		
		
						
			<?php if(!is_page_template('page-main.php')) { ?>
			
			<div class="inner_page_hide_header">
			
			<?php } ?><!-- main page info -->
			
			<div class="header">
			
				<div class="intro">
					<div class="logo_wrapper">
						<a href="<?php bloginfo('url');?>"><img class="logo" src="<?php bloginfo('template_directory');?>/images/logo.jpg"/></a>
					</div><!-- logo_wrapper -->
					<div class="intro_content">
						<p><span class="purple">Wines by Jennifer R</span> is a unique luxury entertainment destination that has been helping people enjoy an authentic global wine country experience since&nbsp;2003.</p>
					</div><!-- intro_content -->
				</div><!-- intro -->
				
				
				<div class="right_header">
					<div class="desktop_store_wrap">
						
					</div><!-- desktop_store_wrap -->
					<div class="newsletter_signup">
						<img class="newsletter_bg" src="<?php bloginfo('template_directory');?>/images/newsletter.png"/>
						<div class="newsletter_text_wrap">
							<div class="newsletter_text">
							<a href="" class="newsletter_title"><img class="gift_icon" src="<?php bloginfo('template_directory');?>/images/gift.png"/>Free Gift!</a>
							
								<a href="" class="newsletter_subtitle">“5 DAYS TO EXPERT WINE TASTING”r <div class="arrow-right-yellow"></div> </a>
							</div><!-- newsletter_text -->
						</div><!-- newsletter_text_wrap -->
						
						<img class="flyer" src="<?php bloginfo('template_directory');?>/images/flyer.png"/>
					</div><!-- newsletter_signup -->
				
				</div>	<!-- right_header -->
				
		</div><!-- header -->		
				
				<div class="nav">
					<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
					<div class="social_icons_wrapper">
						<ul class="social_icons">
							<li><a href="" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/facebook.png"/></a></li>
							<li><a href="" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/google-plus.png"/></a></li>
							<li><a href="" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/twitter.png"/></a></li>
							<li><a href="" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/instagram.png"/></a></li>
							<li><a href="" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/youtube.png"/></a></li>
						</ul>
					</div><!-- social_icons_wrapper -->
				</div><!-- nav -->
		
		
		<?php if(!is_page_template('page-main.php')) : ?>
			
			</div><!-- inner_page_hide_header -->
			<div class="main inner">
				
				<?php else: ?>
				
				<div class="main">
			
			<?php endif; ?><!-- hide header on mobile inner pages -->
		
		
		
				
				
				

			
			
			