<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

</div><!-- main -->
</div><!-- wrapper -->
<div class="footer">
	<div class="footer_col1">
		<ul class="desktop_copyright">
			<li>c 2016 Wines By Jennifer r</li>
		</ul><!-- desktop_copyright -->
	</div><!-- footer_col1 -->
	<div class="footer_col2">
		<ul class="menu">
			<li><a href="">Contact</a></li>
			<li><a href="<?php bloginfo('url');?>/faq">FAQ</a></li>
			<li><a href="">Privacy</a></li>
			<li><a href="">Please Drink Responsibly</a></li>
		</ul>
	</div><!-- footer_col2 -->
	<div class="footer_col3">
		<ul class="language" style="clear:both;">
			<li>View In: Eng ESp</li>
			<li>c 2015 Wines By Jennifer r</li>
		</ul>
	</div><!-- footer_col3 -->
</div><!-- footer -->



<div class="mobile_shopping_cart">Cart | Login | Search</div><!-- mobile_shopping_cart -->
	
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/cycle2.js"></script>
<script type="text/javascript">
	
	jQuery(document).ready(function(){
		

		// Faq
		
		
		jQuery('.question').click(function(){
			
			jQuery(this).next('.answer').slideToggle(200);
			jQuery(this).toggleClass('open');
			
		});
		
		
		jQuery('.single_team_member_one').click(function(){
			
			jQuery('.team_wrapper').hide(200);
			jQuery('.single_bio_wrapper_one').show(200);
			
		});
		
		
		jQuery('.single_team_member_two').click(function(){
			
			jQuery('.team_wrapper').hide(200);
			jQuery('.single_bio_wrapper_two').show(200);
			
		});
		
		
		jQuery('.single_team_member_three').click(function(){
			
			jQuery('.team_wrapper').hide(200);
			jQuery('.single_bio_wrapper_three').show(200);
			
		});

		
		
		
		
	jQuery('.bio_close').click(function(){
			
			jQuery('.team_wrapper').show(200);
			jQuery('.single_bio_wrapper').hide(200);
			
		});
		
	jQuery('.back_to_bio').click(function(){
			
			jQuery('.team_wrapper').show(200);
			jQuery('.single_bio_wrapper').hide(200);
			
		});
		

		

/*

    jQuery(".single_bio_wrapper").each(function(e) {
        if (e != 0)
            jQuery(this).hide();
    });
*/

// stackoverflow.com/questions/17064433/show-hide-divs-using-next-previous-button-using-jquery 
    
    jQuery("#next").click(function(){
        if (jQuery(".single_bio_wrapper:visible").next().length != 0)
            jQuery(".single_bio_wrapper:visible").next().show().prev().hide();
        else {
            jQuery(".single_bio_wrapper:visible").hide();
            jQuery(".single_bio_wrapper:first").show();
        }
        return false;
    });

    jQuery("#prev").click(function(){
        if (jQuery(".single_bio_wrapper:visible").prev().length != 0)
            jQuery(".single_bio_wrapper:visible").prev().show().next().hide();
        else {
            jQuery(".single_bio_wrapper:visible").hide();
            jQuery(".single_bio_wrapper:last").show();
        }
        return false;
    });


		

		
	});

</script>
</body>
</html>
