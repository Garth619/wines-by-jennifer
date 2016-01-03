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
			<li>c 2015 Wines By Jennifer r</li>
		</ul><!-- desktop_copyright -->
	</div><!-- footer_col1 -->
	<div class="footer_col2">
		<ul class="menu">
			<li><a href="">Contact</a></li>
			<li><a href="">FAQ</a></li>
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
<script type="text/javascript">
	
	jQuery(document).ready(function(){
		
		jQuery('.single_team_member').click(function(){
			
			jQuery('.team_wrapper').hide(200);
			jQuery('.single_bio_wrapper').show(200);
			
		});
		
	jQuery('.bio_close').click(function(){
			
			jQuery('.team_wrapper').show(200);
			jQuery('.single_bio_wrapper').hide(200);
			
		});
		
	jQuery('.back_to_bio').click(function(){
			
			jQuery('.team_wrapper').show(200);
			jQuery('.single_bio_wrapper').hide(200);
			
		});
		
	});

</script>
</body>
</html>
