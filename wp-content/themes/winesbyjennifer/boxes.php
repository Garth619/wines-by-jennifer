<div class="box_row">
			
			<div class="box">
				
				<?php $box_1_image = get_field( 'box_1_image' ); ?>
				
				<?php if ( $box_1_image ) { ?>
				
				<img src="<?php echo $box_1_image['url']; ?>" alt="<?php echo $box_1_image['alt']; ?>" />
				
				<?php } ?>
				
				<div class="box_text_wrap">
					<h2><a href="<?php the_field('box_1_page_link',9);?>"><?php the_field('box_1_title',9);?></a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
			
			<div class="box">
				
				
			<?php $box_2_image = get_field( 'box_2_image' ); ?>
			
			<?php if ( $box_2_image ) { ?>
			
			<img src="<?php echo $box_2_image['url']; ?>" alt="<?php echo $box_2_image['alt']; ?>" />
			
			<?php } ?>

				
				<div class="box_text_wrap">
					<h2><a href="<?php the_field('box_2_page_link',9);?>"><?php the_field('box_2_title',9);?></a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
		</div><!-- box_row -->
		
		<div class="box_row">
			
			<div class="box">
				
				
				<?php $box_3_image = get_field( 'box_3_image' ); ?>
				
				<?php if ( $box_3_image ) { ?>
				
				<img src="<?php echo $box_3_image['url']; ?>" alt="<?php echo $box_3_image['alt']; ?>" />
				
				<?php } ?>
				
				
				<div class="box_text_wrap">
					<h2><a href="<?php the_field('box_3_page_link',9);?>"><?php the_field('box_3_title',9);?></a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
			
			<div class="box">
				
				<?php $box_4_image = get_field( 'box_4_image' ); ?>
				
				<?php if ( $box_4_image ) { ?>
				
				<img src="<?php echo $box_4_image['url']; ?>" alt="<?php echo $box_4_image['alt']; ?>" />
				
				<?php } ?>
				
				<div class="box_text_wrap">
					<h2><a href="<?php the_field('box_4_page_link',9);?>"><?php the_field('box_4_title',9);?></a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
	
		</div><!-- box_row -->