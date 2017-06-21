<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="footer-container">
			<footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script>
jQuery(document).ready(function() {
		new WOW().init();
		console.log("jQuery est prêt !");
		WOW.prototype.isPositionFixed = function(element) {
		var position;

		position = getComputedStyle(element).position;

		while (element.parentNode && element.parentNode.localName !== 'body' && position !== 'fixed') {
				position = getComputedStyle(element).position;
				if (position === 'fixed') { break; }
				element = element.parentNode;
		}

		return position === 'fixed' ? true : false;
};
});
</script>
</body>
</html>
