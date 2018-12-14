<?php
/**
 * Template Name: FAQs

 */

get_header(); ?>

		<div class="content_container no_banner">
	
	<div id="content">
	
		<h1><?php the_title();?></h1>
		
		<?php the_field('faq_content');?>
		
		

	
		
		<?php if(get_field('faqs')): ?>
		 
			<?php while(has_sub_field('faqs')): ?>
			
				<p class="question"><?php the_sub_field('question');?></p>
				
				<p class="answer"><?php the_sub_field('answer');?></p>
		 
				
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
		
		
		

	
	</div><!-- content -->
	
</div><!-- content_container -->
		
			
	<div class="box_wrapper inner wow fadeIn" data-wow-delay="0.2s">
		
		<?php include('boxes.php');?>

	</div><!-- box_wrapper -->

<?php get_footer(); ?>
