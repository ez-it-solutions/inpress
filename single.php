<?php
/** Single post template https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

@package inpress
 */

get_header();
?>

<section class="section">
	<div class="container">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			/*
			Notes
			https://developer.wordpress.org/reference/functions/the_post_navigation/
			https://developer.wordpress.org/reference/functions/get_the_post_navigation/
			Displays the navigation to next/previous post, when applicable.
			nav.post-navigation
			h2.screen-reader-text
			.nav-links
			.nav-previous a
			.nav-next a
			*/
			the_post_navigation(
				array(
					'prev_text'          => '%title',
					'next_text'          => '%title',
					'in_same_term'       => false,
					'excluded_terms'     => '',
					'taxonomy'           => 'category',
					'screen_reader_text' => __( 'Post navigation' ),
				)
			);

			get_template_part( 'template-parts/comments', '' );
		endwhile;
		?>
	</div>
</section>

<?php
/* get_footer($name); https://codex.wordpress.org/Function_Reference/get_footer */
get_footer();
