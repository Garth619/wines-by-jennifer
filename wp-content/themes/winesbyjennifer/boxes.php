<div class="box_row">
			
			<div class="box">
				
				<?php $imageID = get_field('box_1_image', 9); ?>
				<?php $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true); ?>
				<?php $menu_one = wp_get_attachment_image_src(get_field('box_1_image', 9), 'mainboxes'); ?>
				
				
				
				<img src="<?php echo $menu_one[0]; ?>" alt="<?php echo $alt_text; ?>"/>
				
				<div class="box_text_wrap">
					<h2><a href="<?php the_field('box_1_page_link',9);?>"><?php the_field('box_1_title',9);?></a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
			
			<div class="box">
				
				
				
				
				<?php $imagetwoID = get_field('box_2_image',9); ?>
				<?php $alt_texttwo = get_post_meta($imagetwoID , '_wp_attachment_image_alt', true); ?>
				<?php $menu_two = wp_get_attachment_image_src(get_field('box_2_image',9), 'mainboxes'); ?>
				
				
				
				<img src="<?php echo $menu_two[0]; ?>" alt="<?php echo $alt_texttwo; ?>"/>
				
				
				
				<div class="box_text_wrap">
					<h2><a href="<?php the_field('box_2_page_link',9);?>"><?php the_field('box_2_title',9);?></a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
		</div><!-- box_row -->
		
		<div class="box_row">
			
			<div class="box">
				
				
				<?php $imagethreeID = get_field('box_3_image',9); ?>
				<?php $alt_textthree = get_post_meta($imagethreeID , '_wp_attachment_image_alt', true); ?>
				<?php $menu_three = wp_get_attachment_image_src(get_field('box_3_image',9), 'mainboxes'); ?>
				
				
				
				<img src="<?php echo $menu_three[0]; ?>" alt="<?php echo $alt_textthree; ?>"/>
				
				
				<div class="box_text_wrap">
					<h2><a href="<?php the_field('box_3_page_link',9);?>"><?php the_field('box_3_title',9);?></a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
			
			<div class="box">
				
				<?php $imagefourID = get_field('box_4_image',9); ?>
				<?php $alt_textfour = get_post_meta($imagefourID , '_wp_attachment_image_alt', true); ?>
				<?php $menu_four = wp_get_attachment_image_src(get_field('box_4_image',9), 'mainboxes'); ?>
				
				
				<img src="<?php echo $menu_four[0]; ?>" alt="<?php echo $alt_textfour; ?>"/>
				
				<div class="box_text_wrap">
					<h2><a href="<?php the_field('box_4_page_link',9);?>"><?php the_field('box_4_title',9);?></a></h2>
				</div><!-- box_text_wrap -->
			</div><!-- box -->
	
		</div><!-- box_row -->