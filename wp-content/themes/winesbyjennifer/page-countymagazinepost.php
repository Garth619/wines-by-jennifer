<?php
/**
 * Template Name: County Magazine Post
 *
 */

get_header(); ?>


<div class="content_container no_banner">
	
	<div id="content">
	
		<h1><?php the_title();?></h1>
		
		<?php $platte = get_field( 'platte' ); ?>
		
		<?php if ( $platte ) { ?>
		
		<img class="countymagazine" src="<?php echo $platte['url']; ?>" alt="<?php echo $platte['alt']; ?>" />
		
		<?php } ?>
		
		<span class="county_mag"><?php the_field( 'platte_caption' ); ?></span><!-- county_mag -->
		
		<span class="pub_author"><?php the_field( 'publication_author' ); ?></span><!-- pub_author -->
		
		<span class="contributing"><i><?php the_field( 'myauthor_role' ); ?></i></span><!-- contributing -->
		
		<div class="pub_content">
		
			<?php get_template_part( 'loop', 'page' );?>

		</div><!-- pub_content -->
		

	</div><!-- content -->
	
</div><!-- content_container -->
		

	
<?php get_footer(); ?>
