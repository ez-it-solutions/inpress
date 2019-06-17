<?php
/** 404 template
todo:
- list similar pages/sitemap/search results?
https://codex.wordpress.org/Creating_an_Error_404_Page
https://codex.wordpress.org/Function_Reference/is_404

@package inpress */

?>

get_header();
?>

<section class="section 404">
	<div class="container">
		<h1 class="title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'inpress' ); ?></h1>
		<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'inpress' ); ?></p>
		<?php
		/* https://developer.wordpress.org/reference/functions/get_search_form/ */
		get_search_form();
		?>
	</div>
</section>

<?php
get_footer();
