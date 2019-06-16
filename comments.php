<?php
/* comment template
* If the current post is protected by a password andbthe visitor has not yet entered the password we willnreturn early without loading the comments.
*/
if ( post_password_required() ) {
	return;
}
?>

<section class="section comments">
	<div class="container">

		<?php
		if ( have_comments() ) :
			?>
			<h1 class="title">Comments</h1>
			<h2 class="comments-title">
				<?php
				$inpress_comment_count = get_comments_number();
				if ( '1' === $inpress_comment_count ) {
					printf(
						/* translators: 1: title. */
						esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'inpress' ),
						'<span>' . esc_html( get_the_title() ) . '</span>'
					);
				} else {
					printf( // WPCS: XSS OK.
						/* translators: 1: comment count number, 2: title. */
						esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $inpress_comment_count, 'comments title', 'inpress' ) ),
						esc_html( number_format_i18n( $inpress_comment_count ) ),
						'<span>' . esc_html( get_the_title() ) . '</span>'
					);
				}
				?>
			</h2>

			<?php
			/*
			https://developer.wordpress.org/reference/functions/get_the_comments_navigation/
			*/
			the_comments_navigation(
				array(
					'prev_text'          => 'Older comments',
					'next_text'          => 'Newer comments',
					'screen_reader_text' => 'Comments navigation',
				)
			);
			?>

			<ol class="comment-list">
				<?php
				// https://codex.wordpress.org/Function_Reference/wp_list_comments
				wp_list_comments(
					array(
						'walker'            => null,
						'max_depth'         => '',
						'style'             => 'ol',
						'callback'          => null,
						'end-callback'      => null,
						'type'              => 'all',
						'reply_text'        => 'Reply',
						'page'              => '',
						'per_page'          => '',
						'avatar_size'       => 0,
						'reverse_top_level' => null,
						'reverse_children'  => '',
						'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
						'short_ping'        => true,   // @since 3.6
						'echo'              => true,     // boolean, default is true
					)
				);
				?>
			</ol>

			<?php
			// show navigation again
			the_comments_navigation();

			// if comments are closed
			if ( ! comments_open() ) :
				?>
				<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'inpress' ); ?></p>
				<?php
			endif;

		endif;
		/*
		https://codex.wordpress.org/Function_Reference/comment_form
		*/
		comment_form(
			array(
				'id_form'           => 'commentform',
				'class_form'        => 'comment-form',
				'id_submit'         => 'submit',
				'class_submit'      => 'submit',
				'name_submit'       => 'submit',
				'title_reply'       => __( 'Leave a Reply', 'inpress' ),
				/* translators: comment */
				'title_reply_to'    => __( 'Leave a Reply to %s', 'inpress' ),
				'cancel_reply_link' => __( 'Cancel Reply', 'inpress' ),
				'label_submit'      => __( 'Post Comment', 'inpress' ),
				// more attributes for fields
			)
		);
		?>

	</div>
</section>

