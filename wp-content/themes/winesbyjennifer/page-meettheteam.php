<?php
/**
 * Template Name: WBJ Meet the Team
 *
 */

get_header(); ?>


<?php include('banner.php');?>

<a id="team"></a>
<div class="content_container">
	
	<div id="content">
	
	
		<div class="team_wrapper">
			
			
			<?php if(get_field('meet_the_team')): ?>
			 
				<?php $count=1;?>
				
				<?php while(has_sub_field('meet_the_team')): ?>
			 
					
					<div class="single_team_member single_team_member_<?php echo $count; ?>">
				
						<div class="team_profile_wrapper"><a href="#team"></a></div><!-- team_profile_wrapper -->
						<h2><a href="#team"><?php the_sub_field('name');?></a></h2>
						<a href="#team" class="read_bio">Read Bio <div class="arrow-right-purple"></div></a>
				
				</div><!-- single_team_member -->
				
				<?php $count++ ;?>
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>		
						
			
		</div><!-- team_wrapper -->
		
		
		<div class="slider">
	
		<?php if(get_field('meet_the_team')): ?>
			 
				<?php $count=1;?>
				
				<?php while(has_sub_field('meet_the_team')): ?>
			 
					
				
				
				
				<div class="single_bio_wrapper single_bio_wrapper_<?php echo $count;?>">
			
			<div class="left_col_bio">
				
				<img class="team_profile" src="<?php the_sub_field('add_image');?>"/>
				<div class="back_to_bio_wrapper">
					<div class="arrow-right-purple-left"></div>
					<span class="back_to_bio">Back to Bios</span><!-- back_to_bio -->
				</div><!-- back_to_bio_wrapper -->
				
			</div><!-- left_col_bio -->
			
			
			<div class="right_col_bio">
				
				<h1><?php the_sub_field('name');?></h1>
				
				<span class="bio_close">Close Bio<span class="close_button">X</span></span>
			
				<div class="bio_content">
				
					<?php the_sub_field('bio_content');?>
				 
				</div><!-- bio_content -->
		
		</div><!-- right_col_bio -->
				
			</div><!-- single_bio_wrapper -->	
				
				<?php $count++ ;?>
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>		
		
				
		
		</div><!-- cycle-slideshow -->
	
	</div><!-- content -->
	
</div><!-- content_container -->
		
			

	
<?php get_footer(); ?>
