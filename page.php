<?php
/** Template for pages

@package inpress
 */

get_header();
?>
<section class="section">
	<div class="container">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'page' );
			get_template_part( 'template-parts/comments', '' );
		endwhile;
		?>
	</div>
</section>
<?php
/* get_sidebar(); */
get_footer();
