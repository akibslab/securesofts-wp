<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package securesofts
 */

get_header();

$blog_column = is_active_sidebar('blog-sidebar') ? 8 : 12;

$breadcrumb_blog_title = get_theme_mod('breadcrumb_blog_title', __('Our <span>Blogs</span>', 'securesofts'));
$breadcrumb_blog_details = get_theme_mod('breadcrumb_blog_details', __('', 'securesofts'));
$breadcrumb_blog_image = get_theme_mod('breadcrumb_blog_image', __('Our <span>Blogs</span>', 'securesofts'));

?>
<!-- start: Breadcrumb Section -->
<?php if (apply_filters('securesofts_page_title', true)) : ?>
  <section class="breadcrumb-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="breadcrumb_inner">
            <?php if (is_home() && !is_front_page()) :
              if (!empty($breadcrumb_blog_title)) : ?>
                <h1 class="title"><?php echo securesofts_kses($breadcrumb_blog_title); ?></h1>
              <?php else :
                single_post_title('<h1 class="title">', '</h1>');
              endif;
              if (!empty($breadcrumb_blog_details)) :
              ?>
                <p><?php echo esc_html__($breadcrumb_blog_details, 'securesofts'); ?></p>
            <?php
              endif;
            else :
              the_archive_title('<h1 class="entry-title ss-archive__title">', '</h1>');
              the_archive_description('<p>', '</p>');
            endif; ?>
          </div>
        </div>
        <div class="col-lg-6">
          <?php if (!empty($breadcrumb_blog_image)) : ?>
            <div class="breadcrumb_img">
              <img src="<?php echo esc_url($breadcrumb_blog_image); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($breadcrumb_blog_image), '_wp_attachment_image_alt', true); ?>">
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- end: Breadcrumb Section -->


<div class="full-width ss-posts__area" id="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-<?php print esc_attr($blog_column); ?>">
        <div class="ss-post__container">

          <?php if (have_posts()) :


            /* Start the Loop */
            while (have_posts()) :
              the_post();

              /*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
              get_template_part('template-parts/content', get_post_type());
            endwhile;
          ?>

            <div class="ss__pagination">
              <?php securesofts_pagination('<i class="fal fa-arrow-left"></i>', '<i class="fal fa-arrow-right"></i>', '', ['class' => '']); ?>
            </div>
          <?php
          else :
            get_template_part('template-parts/content', 'none');
          endif;
          ?>
        </div>
      </div>
      <!-- sidebar -->
      <?php if (is_active_sidebar('blog-sidebar')) : ?>
        <div class="col-lg-4">
          <div class="ss-main__sidebar">
            <?php get_sidebar(); ?>
          </div>
        </div>
      <?php endif; ?>
      <!--! sidebar -->
    </div>
  </div>
</div>
<?php
get_footer();
