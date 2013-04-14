<?php

class itsABoy_Theme {
	public function __construct() {
		// Late priority, to run after the parent theme's hook.
		add_action( 'after_setup_theme', array( $this, 'after_setup_theme' ), 20 );
		add_action( 'customize_register', array( $this, 'customize_register' ), 20 );
	}

	public function after_setup_theme() {
		// Disable Twenty Eleven's theme options page.
		remove_action( 'admin_menu', 'twentyeleven_theme_options_add_page' );
	}

	// Remove Twenty Eleven's layout and color scheme customizer controls.
	public function customize_register( $wp_customize ) {
		$wp_customize->remove_section( 'twentyeleven_layout' );
		$wp_customize->remove_control( 'twentyeleven_color_scheme' );
	}
};

new itsABoy_Theme;

/* Filter to add author credit to Infinite Scroll footer */
function itsABoy_footer_credits( $credit ) {
	$credit = sprintf( __( '%3$s | Theme: %1$s by %2$s.', 'itsABoy' ), 'It\'s a Boy', '<a href="http://regretless.com/" rel="designer">Ying Zhang</a>', '<a href="http://wordpress.org/" title="' . esc_attr( __( 'A Semantic Personal Publishing Platform', 'itsABoy' ) ) . '" rel="generator">Proudly powered by WordPress</a>' );
	return $credit;
}
add_filter( 'infinite_scroll_credit', 'itsABoy_footer_credits' );