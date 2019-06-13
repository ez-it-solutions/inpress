<?php /* 404 template https://codex.wordpress.org/Creating_an_Error_404_Page */
get_header();
?>

<section class="section">
	<div class="container">
		<section class="error-404 not-found">
			<h1 class="title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'inpress' ); ?></h1>
			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'inpress' ); ?></p>
				<?php get_search_form(); ?>
			</div>
		</section>
	</div>
</section>

<?php
get_footer();
