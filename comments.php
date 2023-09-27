<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sparch
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$opt = get_option( 'sparch' );
$show_blogs = isset($opt['sparch_display_blog_comments']) ? $opt['sparch_display_blog_comments'] : '';
?>

<div id="comments" class="comments-area blog_comment_inner">
<?php if($show_blogs == 'yes'): ?>
	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$sparch_comment_count = get_comments_number();
			if ( '1' === $sparch_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One Comment', 'sparch' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( '%1$s Comments &ldquo;%2$s&rdquo;', '%1$s Comments', $sparch_comment_count, 'sparch' ),
					number_format_i18n( $sparch_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ul class="comment-list comment_box">
			<?php
			wp_list_comments(
				array(
					'style'       => 'ul',
					'short_ping'  => true,
					'walker'      => new sparch_Walker_Comment,
					'avatar_size' => 70,
				)
			);
			?>
		</ul><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'sparch' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().
endif;

	$commenter		 = wp_get_current_commenter();
	$require_name_email_in_form		 = get_option( 'require_name_email' );
	$aria_req	  = ( $require_name_email_in_form ? "required aria-required=true" : '' );
	$row_start = is_user_logged_in(  ) ? '<div class="row">':'';

	$comment_fields = array(
		'author' => '<div class="row"><div class="col-md-6 form-group"><input id="author" class="form-control" name="author" type="text" value="'.esc_attr( $commenter[ 'comment_author' ] ).'" placeholder="'.esc_attr__( 'Your Name *', 'sparch' ).'" size="30" maxlength="245"  ' . $aria_req . '></div>',
		'email' => '<div class="col-md-6 form-group"> <input id="email" class="form-control" name="email" type="email" value="'.esc_attr( $commenter[ 'comment_author_email' ] ).'" size="30" maxlength="100" placeholder="'.esc_attr__( 'Your Email *', 'sparch' ).'" aria-describedby="email-notes" ' . $aria_req . '></div>',
		'url' => '<div class="col-md-12 form-group"> <input id="url" placeholder="'.esc_attr__( 'Your Website (optional)', 'sparch' ).'" class="form-control" name="url" type="url" value="" size="30" maxlength="200"></div>',
	);

	$defaults = array(
		'fields' => $comment_fields,
		'class_submit'		 => 'btn-comment-form border_radius hover_btn',
		'comment_field'		 => $row_start.'<div class="col-md-12 form-group"><textarea  class="form-control" Placeholder="'.  esc_attr__('Comment', 'sparch').'" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></div><div class="clearfix"></div></div>',
	);

	comment_form($defaults);
	?>

</div><!-- #comments -->
