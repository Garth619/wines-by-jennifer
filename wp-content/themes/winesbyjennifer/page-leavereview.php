<?php
/**
 * Template Name: Leave a Review
 *
 */

get_header(); ?>




<div class="content_container no_banner">
	
	<div id="content">
	
		<h1 class="centered"><?php the_title();?></h1>
		
		
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<div class="leavereview_content">
			
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
				<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
				
				<a href="<?php the_field( 'facebook_link_reviews' ); ?>" target="_blank">
					
					<?php $facebook_banner = get_field( 'facebook_banner' ); ?>
					
					<?php if ( $facebook_banner ) { ?>
					
					<img src="<?php echo $facebook_banner['url']; ?>" alt="<?php echo $facebook_banner['alt']; ?>" />
					
					<?php } ?>
				
				</a>
				
				<a href="<?php the_field( 'google_plus_link' ); ?>" target="_blank">
					
					<?php $google_plus_banner = get_field( 'google_plus_banner' ); ?>
					
					<?php if ( $google_plus_banner ) { ?>
					
					<img src="<?php echo $google_plus_banner['url']; ?>" alt="<?php echo $google_plus_banner['alt']; ?>" />
					
					<?php } ?>
				
				</a>
				
				<a href="<?php the_field( 'yelp_link' ); ?>" target="_blank">
					
					<?php $yelp_banner = get_field( 'yelp_banner' ); ?>
					
					<?php if ( $yelp_banner ) { ?>
					
					<img src="<?php echo $yelp_banner['url']; ?>" alt="<?php echo $yelp_banner['alt']; ?>" />
					
					<?php } ?>
				
				</a>
				
				<a href="<?php the_field( 'taplister_link' ); ?>" target="_blank">
					
					<?php $taplister_banner = get_field( 'taplister_banner' ); ?>
					
					<?php if ( $taplister_banner ) { ?>
					
					<img src="<?php echo $taplister_banner['url']; ?>" alt="<?php echo $taplister_banner['alt']; ?>" />
					
					<?php } ?>
				
				</a>
				
				<a href="<?php the_field( 'trip_advisor_link' ); ?>" target="_blank">
					
					<?php $trip_advisor_banner = get_field( 'trip_advisor_banner' ); ?>
					
					<?php if ( $trip_advisor_banner ) { ?>
					
					<img src="<?php echo $trip_advisor_banner['url']; ?>" alt="<?php echo $trip_advisor_banner['alt']; ?>" />
					
					<?php } ?>
				
				</a>
								
			</div><!-- leavereview_content -->
				
		<?php endwhile; // end of the loop. ?>

	
	</div><!-- content -->
	
</div><!-- content_container -->
		

	
<?php get_footer(); ?>
