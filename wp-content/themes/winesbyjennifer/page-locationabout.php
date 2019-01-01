<?php
/**
 * Template Name: Location About
 *
 */

get_header(); ?>




<div class="content_container no_banner">
	
	<div id="content">
	
		<h1 class="centered"><?php the_title();?></h1>
		
		<?php get_template_part( 'loop', 'page' );?>
		
		<div class="new_meet_team_wrapper">
			
			<h1 class="centered">Meet the Team</h1>
			
			<div class="new_meet_team_grid">
				
				<?php if(get_field('meet_the_team')): ?>
				 
					<?php while(has_sub_field('meet_the_team')): ?>
				 
						<div class="single_new_meet_team">
					
							<div class="new_single_meet_team_inner">
				
								<?php $profile_pic = get_sub_field( 'profile_pic' ); ?>
								
								<?php if ( $profile_pic ) { ?>
								
								<img src="<?php echo $profile_pic['url']; ?>" alt="<?php echo $profile_pic['alt']; ?>" />
								
								<?php } ?>
					
								<div class="new_team_overlay"></div><!-- new_team_overlay -->
					
							</div><!-- new_single_meet_team_inner -->
					
							<span class="new_team_name grid_name"><?php the_sub_field( 'name' ); ?></span><!-- new_team_name -->
					
							<div class="overlay_info">
						
								<?php the_sub_field( 'description' ); ?>
						
							</div><!-- overlay_info -->
				
						</div><!-- single_new_meet_team -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
			
							
			</div><!-- new_meet_team_wrapper -->
		
		</div><!-- new_meet_team_grid -->
		
		<div class="new_team_overlay">
			
			<div class="inner_new_team_overlay">
				
				<div class="new_close"></div><!-- new_close -->
				
				<div class="overlay_bio">
					
					<div class="overlay_name"></div><!-- new_team_name -->
					
					<div class="overlay_bio_content"></div><!-- overlay_bio_content -->
					
				</div><!-- overlay_bio -->
				
			</div><!-- inner_team_overlay -->
			
		</div><!-- team_overlay -->
	
	</div><!-- content -->
	
</div><!-- content_container -->
		

	
<?php get_footer(); ?>
