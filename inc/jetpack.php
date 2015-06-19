<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Ginkaku
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function ginkaku_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'ginkaku_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function ginkaku_jetpack_setup
add_action( 'after_setup_theme', 'ginkaku_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function ginkaku_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function ginkaku_infinite_scroll_render
