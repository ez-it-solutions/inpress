<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package inpress
 */

get_header();
?>

<section class="section">
	<div class="container">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			get_template_part( 'template-parts/comments', '' );

		endwhile; // End of the loop.
		?>

	</div>
</section>

<?php
get_footer();
