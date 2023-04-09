<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package securesofts
 */

if (is_single()) : ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('ss__post format-standard'); ?>>
        <?php if (has_post_thumbnail()) : ?>
            <div class="ss-feature__image">
                <?php the_post_thumbnail('full', ['class' => 'img-responsive']); ?>

                <?php
                $categories = get_the_terms(get_the_ID(), 'category');
                if (!empty($categories)) :
                ?>
                    <ul class="categories">
                        <?php foreach ($categories as $category) : ?>
                            <li><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo esc_html($category->name); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <div class="ss__content">
            <!-- post meta -->
            <?php get_template_part('template-parts/blog/post-meta'); ?>

            <div class="post-text">
                <?php the_content(); ?>
            </div>
            <!-- tags -->
            <?php echo securesofts_get_tag(); ?>

            <div class="ss__post-share">
                <div class="share_link-title">Share this post</div>
                <div class="share-buttons">
                    <a class="facebook" href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fxirosoft.com%2Fconvert-figma-wordpress%2F&amp;t=How+to+Convert+Figma+to+WordPress%3A+Multiple+Methods+Explained%C2%A0" title="Facebook" target="_blank"><span class="soc-font-icon"></span><span class="social-text">Share on Facebook</span><span class="screen-reader-text">Share on Facebook</span></a>

                    <a class="twitter" href="https://twitter.com/share?url=https%3A%2F%2Fxirosoft.com%2Fconvert-figma-wordpress%2F&amp;text=How+to+Convert+Figma+to+WordPress%3A+Multiple+Methods+Explained%C2%A0" title="Twitter" target="_blank"><span class="soc-font-icon"></span><span class="social-text">Tweet</span><span class="screen-reader-text">Share on Twitter</span></a>

                    <a class="pinterest pinit-marklet" href="//pinterest.com/pin/create/button/" title="Pinterest" target="_blank" data-pin-config="above" data-pin-do="buttonBookmark"><span class="soc-font-icon"></span><span class="social-text">Pin it</span><span class="screen-reader-text">Share on Pinterest</span></a>

                    <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fxirosoft.com%2Fconvert-figma-wordpress%2F&amp;title=How%20to%20Convert%20Figma%20to%20WordPress%3A%20Multiple%20Methods%20Explained%C2%A0&amp;summary=&amp;source=Xirosoft" title="LinkedIn" target="_blank"><span class="soc-font-icon"></span><span class="social-text">Share on LinkedIn</span><span class="screen-reader-text">Share on LinkedIn</span></a>
                </div>
            </div>
        </div>
    </article>

<?php else : ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('ss-post__grid format-standard'); ?>>

        <div class="ss-post__wrapper">
            <?php if (has_post_thumbnail()) : ?>
                <div class="ss-post__thumb">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('full', ['class' => 'img-responsive']); ?>
                    </a>
                </div>
            <?php endif; ?>
            <div class="ss-post-content__wrapper">
                <!-- post meta -->
                <?php get_template_part('template-parts/blog/post-meta'); ?>

                <h3 class="ss-post__title entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                <?php echo wpautop(wp_trim_words(get_the_content(), 30, '...')); ?>

                <?php get_template_part('template-parts/blog/post-btn'); ?>
            </div>
            <div class="ss-clearfix"></div>
        </div>
    </article>

<?php endif; ?>