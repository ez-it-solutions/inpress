<?php
/** Sidebar widget template partial

@package inpress
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<section>
	<div class="container">

		<aside id="secondary" class="widget-area">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</aside>

	</div>
</section>
