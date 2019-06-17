<?php /** Enqueue scripts and styles. (from _s) */

function inpress_scripts() {
	wp_enqueue_style( 'inpress-style', get_stylesheet_uri() );
	//wp_enqueue_script( 'inpress-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	//wp_enqueue_script( 'inpress-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	//wp_register_style( 'inpressed', get_stylesheet_directory_uri() . '/sass/bulma.min.css', array(), '' );
	wp_enqueue_style( 'inpressed', get_stylesheet_directory_uri() . '/sass/bulma.min.css', array(), '' );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'inpress_scripts' );


// bones scripts > loading modernizr and jquery, and reply script.
function bones_scripts_and_styles() {

	global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way.

	if ( ! is_admin() ) {


		// comment reply script for threaded comments.
		if ( is_singular() && comments_open() && ( get_option( 'thread_comments' ) == 1 ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		//adding scripts file in the footer.
		wp_register_script( 'bones-js', get_stylesheet_directory_uri() . '/library/js/scripts.js', array( 'jquery' ), '', true );


		$wp_styles->add_data( 'bones-ie-only', 'conditional', 'lt IE 9' ); // add conditional wrapper around ie stylesheet.

		/*
		I recommend using a plugin to call jQuery
		using the google cdn. That way it stays cached
		and your site will load faster.
		*/
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'bones-js' );
	}
}
