<?php

/**
 * Template part for displaying post btn
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package securesofts
 */

$securesofts_blog_btn = get_theme_mod('securesofts_blog_btn', 'Read More');
$securesofts_blog_btn_switch = get_theme_mod('securesofts_blog_btn_switch', true);

?>

<?php if (!empty($securesofts_blog_btn_switch)) : ?>
    <div class="ss-post__btn">
        <a href="<?php the_permalink(); ?>" class="btn"><?php print esc_html($securesofts_blog_btn); ?></a>
    </div>
<?php endif; ?>