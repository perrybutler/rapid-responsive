<?php
$atts = array(
	'title_reply' => 'Leave a Comment',
	'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" rows="8" aria-required="true"></textarea></p>',
	'comment_notes_after' => '',
	'cancel_reply_link' => __( 'Cancel' ),
	);
?>
<?php comment_form($atts); ?>
<ol class="commentlist">
<?php wp_list_comments(); ?>
</ol>