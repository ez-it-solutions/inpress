<?php
/* https://developer.wordpress.org/themes/basics/theme-functions/ */

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function inpress_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'inpress_content_width', 640 );
}
add_action( 'after_setup_theme', 'inpress_content_width', 0 );

/** Implement the Custom Header feature. */
//require get_template_directory() . '/inc/custom-header.php';
/** Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';
/* Functions which enhance the theme by hooking into WordPress. */
//require get_template_directory() . '/inc/template-functions.php';
/* Customizer additions. */
//require get_template_directory() . '/inc/customizer.php';

/* Load Jetpack compatibility file. */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* Load WooCommerce compatibility file. */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

// load theme support
require_once( 'library/support.php' );
// load scripts
require_once( 'library/scripts.php' );
// load sidebar
require_once( 'library/sidebar.php' );
// as per bones LOAD BONES CORE 
require_once( 'library/inpress.php' );
require_once( 'library/emoji.php' );
// move cleanup to own file
require_once( 'library/cleanup.php' );
// CUSTOMIZE THE WordPress ADMIN (off by default)
require_once( 'library/admin.php' );

remove_action('wp_head', 'wp_generator');
