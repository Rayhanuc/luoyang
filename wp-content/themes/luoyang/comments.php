<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lwhhb
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$lwhhl_comment_count = get_comments_number();
			if ( '1' === $lwhhl_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'theme-slug' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $lwhhl_comment_count, 'comments title', 'theme-slug' ) ),
					number_format_i18n( $lwhhl_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size' => 128
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'theme-slug' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().


            	$lwhhl_comment_fields = array();
            	$flowapp_name_field_placeholder =__('Your Name ','lwhhl');
            	$flowapp_email_field_placeholder =__('Your Email ','lwhhl');
            	$flowapp_url_field_placeholder =__('Your Website ','lwhhl');
            	$flowapp_message_field_placeholder =__('Your Message','lwhhl');
            	$flowapp_send_message_field_placeholder =__('Send','lwhhl');
            	$lwhhl_comment_fields['author']=<<<EOD
<div class="row">
	<div class=" col-md-4">
	    <div class="form-group">
            <input type="text" class="form-control" placeholder="{$flowapp_name_field_placeholder}*" id="author" name="author" required="" data-validation-required-message="Please enter your name." aria-invalid="false">
            <p class="help-block text-danger"></p>
        </div>
	</div>
EOD;

				$lwhhl_comment_fields['email']=<<<EOD
	<div class=" col-md-4">
		<div class="form-group">
	        <input type="email" class="form-control" placeholder="{$flowapp_email_field_placeholder}*" id="email" name="email" required="" data-validation-required-message="Please enter your email address.">
	        <p class="help-block text-danger"></p>
	    </div>
    </div>
EOD;
				$lwhhl_comment_fields['url']=<<<EOD
	<div class=" col-md-4">
		<div class="form-group">
	        <input type="tel" class="form-control" placeholder="{$flowapp_url_field_placeholder} *" id="url" name="url" required="" data-validation-required-message="Please enter your website address.">
	        <p class="help-block text-danger"></p>
	    </div>
    </div>
</div>
EOD;

				$lwhhl_comment_field = <<<EOD
<div class="row">
	<div class="col-md-12">
		<div class="form-group">
		    <div class="controls">
		        <textarea id="message" rows="5" placeholder="{$flowapp_message_field_placeholder}*" class="form-control" required="" data-validation-required-message="Please enter a message."></textarea>
		    </div>
		</div>
EOD;

				$lwhhl_comment_submit_button = <<<EOD
		<div class="col-md-12 text-center">
		        <div id="success"></div>
		        <button type="submit" class="btn btn-black">{$flowapp_send_message_field_placeholder}</button>
		    </div>
		</div>
	</div>
</div>
EOD;


	$lwhhl_comment_form_arguments = array(
		'fields' => $lwhhl_comment_fields,
		'comment_field' => $lwhhl_comment_field,
		'submit_button' => $lwhhl_comment_submit_button,
		'id_form' => 'contactForm',
		'comment_notes_before' => '<p></p>',
		'comment_notes_after' => '<p>'.__('Your email no will not be published','lwhhl').'</p>',
		'title_replay' => ''
	);
	comment_form( $lwhhl_comment_form_arguments );
	?>

</div><!-- #comments -->
