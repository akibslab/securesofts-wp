<?php
$author_data = get_the_author_meta('description', get_query_var('author'));
$author_name = get_the_author_meta('display_name', get_query_var('author'));

$author_info = get_the_author_meta('securesofts_write_by');
$facebook_url = get_the_author_meta('securesofts_facebook');
$twitter_url = get_the_author_meta('securesofts_twitter');
$linkedin_url = get_the_author_meta('securesofts_linkedin');
$instagram_url = get_the_author_meta('securesofts_instagram');
$securesofts_url = get_the_author_meta('securesofts_youtube');
$securesofts_write_by = get_the_author_meta('securesofts_write_by');

if ($author_data != '') :
?>


    <div class="post-author">
        <div class="post-author__thumb">
            <a href="<?php print esc_url(get_author_posts_url(get_the_author_meta('ID'))) ?>">
                <?php print get_avatar(get_the_author_meta('user_email'), 80, '', '', ['class' => 'avatar']); ?>
            </a>
        </div>

        <div class="post-author__content blog__author-content">
            <h4><span>Author : </span><a href="<?php print esc_url(get_author_posts_url(get_the_author_meta('ID'))) ?>">
                    <?php echo esc_html($author_name); ?>
                </a></h4>
            <p><?php the_author_meta('description'); ?></p>
        </div>
    </div>

<?php endif; ?>