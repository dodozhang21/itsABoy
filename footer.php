<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @since It's a Boy 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'itsABoy' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'itsABoy' ); ?>"><?php printf( __( 'Proudly powered by %s', 'itsABoy' ), 'WordPress' ); ?></a> | <a href="<?php echo esc_url( __( 'http://regretless.com/', 'itsABoy' ) ); ?>" title="<?php esc_attr_e( 'Ying Zhang', 'itsABoy' ); ?>"><?php printf( __( 'Theme It\'s a Boy by %s', 'itsABoy' ), 'Ying Zhang' ); ?></a>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>