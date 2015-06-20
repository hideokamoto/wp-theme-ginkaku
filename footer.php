<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Ginkaku
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container footer-widgets">
			<div class="widget-area">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</div><!-- #secondary -->
			<div class="widget-area">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</div><!-- #secondary -->
			<div class="widget-area">
				<?php dynamic_sidebar( 'footer-3' ); ?>
			</div><!-- #secondary -->
		</div>
		<div class="site-info container">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'ginkaku' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'ginkaku' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'ginkaku' ), 'ginkaku', '<a href="https://profiles.wordpress.org/hideokamoto" rel="designer">Hidetaka Okamoto</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
