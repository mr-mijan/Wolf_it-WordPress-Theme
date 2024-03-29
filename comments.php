<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @package 
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! post_type_supports( get_post_type(), 'comments' ) ) {
	return;
}

if ( ! have_comments() && ! comments_open() ) {
	return;
}

// Comment Reply Script.
if ( comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
}
?>
<section id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h3 class="comments-title mb-5">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				printf( esc_html('Comments','wolf_it') );
			} else {
				printf(
					esc_html( /* translators: 1: number of comments */
						_nx(
							'%1$s Comments',
							'%1$s Comments',
							$comments_number,
							'comments title',
							'wolf_it'
						)
					),
					esc_html( number_format_i18n( $comments_number ) )
				);
			}
			?>
            , for Tiles
		</h3>

		<?php the_comments_navigation(); ?>

	<ol class="comment-list">
		<?php
		wp_list_comments(
			[
				'style'       => 'ol',
				'short_ping'  => true,
				'avatar_size' => 42,
			]
		);
		?>
	</ol><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

<?php endif; // Check for have_comments(). ?>

<?php
comment_form(
	[
		'title_reply_before' => '<h4 id="reply-title" class="section-title">',
		'title_reply_after'  => '</h4>',
	]
);
?>

</section><!-- .comments-area -->

