<?php /* search result template https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result */
get_header();
?>

<section class="section">
	<div class="container">
		<div class="columns">
			<!-- first column ***** -->
			<div class="column is-two-thirds">
				<?php
					if ( have_posts() ) :
				?>

				<header class="page-header">
					<h1 class="page-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'inpress' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
				</header>

				<?php
						/* loop */
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', 'search' );
						endwhile;

						the_posts_navigation();

						else :
						get_template_part( 'template-parts/content', 'none' );

					endif;
				?>
			</div>
			<!-- second column ***** -->
			<div class="column is-one-third">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
