<?php if (post_password_required()) return; ?>

<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>
        <h3 class="comments-title">
            <?php comments_number('No Comments', '1 Comment', '% Comments'); ?>
        </h3>

        <ol class="comment-list">
            <?php wp_list_comments([
                'style'      => 'ol',
                'short_ping' => true,
                'avatar_size' => 48,
            ]); ?>
        </ol>

        <?php the_comments_pagination(); ?>
    <?php endif; ?>

    <?php comment_form([
        'title_reply'          => 'Leave a Comment',
        'label_submit'         => 'Post',
        'comment_notes_before' => '',
        'comment_notes_after'  => '',
        'fields' => [
            'author' => '<p class="comment-form-author">
                <label for="author">Name <span class="required">*</span></label>
                <input id="author" name="author" type="text" required placeholder="Your name">
            </p>',
            'email' => '<p class="comment-form-email">
                <label for="email">Email <span class="required">*</span></label>
                <input id="email" name="email" type="email" required placeholder="Your email">
            </p>',
        ],
        'comment_field' => '<p class="comment-form-comment">
            <label for="comment">Comment <span class="required">*</span></label>
            <textarea id="comment" name="comment" rows="6" required placeholder="Write your comment..."></textarea>
        </p>',
    ]); ?>

</div>