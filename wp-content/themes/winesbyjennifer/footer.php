
</div><!-- main -->
</div><!-- wrapper -->


<div class="footer">
	<div class="footer_col1">
		<ul class="desktop_copyright">
			<li>&copy; <?php echo date("Y"); ?> Wines By Jennifer <sup>&reg;</sup></li>
		</ul><!-- desktop_copyright -->
	</div><!-- footer_col1 -->
	<div class="footer_col2">
		<ul class="menu">
			
			<li><a href="<?php bloginfo('url');?>/contact-us">Contact</a></li>
			<li><a href="<?php bloginfo('url');?>/about-us/faq">FAQ</a></li>
			<li><a href="<?php bloginfo('url');?>/private-policy">Private Policy</a></li>
			<li><a href="<?php bloginfo('url');?>/drink-responsibly/">Please Drink Responsibly</a></li>
			
		</ul>
	</div><!-- footer_col2 -->
	<div class="footer_col3">
		<ul class="language" style="clear:both;">
<!-- 			<li>View In: Eng ESp</li> -->
<!-- 			<li>&copy; <?php echo date("Y"); ?> Wines By Jennifer <sup>&reg;</sup></li> -->
			<li class="backtotop">Back to Top</li>
		</ul>
	</div><!-- footer_col3 -->
</div><!-- footer -->


<?php wp_footer(); ?>


<?php the_field( 'footer_script','option'); ?>


</body>
</html>
