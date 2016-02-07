<?php
/**
 * Template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	
	<div class="content_container no_banner">
	
		<div id="content">

			<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
				
					<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?></p>
					<?php get_search_form(); ?>
	
	
		</div><!-- content -->
	</div><!-- content_container -->
	
	<div class="box_wrapper inner wow fadeIn" data-wow-delay="0.2s">
		<div class="box_row">
			<div class="box">
				<img src="<?php bloginfo('template_directory');?>/images/box1.jpg"/>
				<div class="box_text_wrap">
					<h2><a href="<?php bloginfo('url');?>/join-the-club/">Join the Club</a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
			<div class="box">
				<img src="<?php bloginfo('template_directory');?>/images/box2.jpg"/>
				<div class="box_text_wrap">
					<h2><a href="<?php bloginfo('url');?>/become-an-ambassador/">Become an Ambassador</a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
		</div><!-- box_row -->
		<div class="box_row">
			<div class="box">
				<img src="<?php bloginfo('template_directory');?>/images/box3.jpg"/>
				<div class="box_text_wrap">
					<h2><a href="<?php bloginfo('url');?>/own-a-franchise/">Own a<br/>Franchise</a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
			<div class="box">
				<img src="<?php bloginfo('template_directory');?>/images/box4.jpg"/>
				<div class="box_text_wrap">
					<h2><a href="<?php bloginfo('url');?>/wines-by-jennifer-blog/">WBJr Blog</a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
		</div><!-- box_row -->

	</div><!-- box_wrapper -->
				
				
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>