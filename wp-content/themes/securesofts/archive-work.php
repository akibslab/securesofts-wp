<?php

/**
 * 
 * this template will be show work page content.
 */
get_header();


// From customize
$work_page_title = get_theme_mod('work_page_title', __('Our <span>Works</span>', 'securesofts'));
$work_page_description = get_theme_mod('work_page_description', __('Please take sometime and check some of our latest projects to know the type of quality work we provided to our clients.', 'securesofts'));
$work_breadcrumb_img = get_theme_mod('work_breadcrumb_img', '');
$work_section_title = get_theme_mod('work_section_title', __('Our recent <span>works</span>', 'securesofts'));
?>

<!-- start: Breadcrumb Section -->
<section class="breadcrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="breadcrumb_inner">
          <?php if (!empty($work_page_title)) : ?>
            <h1 class="title"><?php echo securesofts_kses($work_page_title); ?></h1>
          <?php endif;
          if (!empty($work_page_description)) : ?>
            <p><?php echo esc_html__($work_page_description, 'securesofts'); ?></p>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-6">
        <?php if (!empty($work_breadcrumb_img)) : ?>
          <div class="breadcrumb_img">
            <img src="<?php echo esc_url($work_breadcrumb_img); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($work_breadcrumb_img), '_wp_attachment_image_alt', true); ?>">
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<!-- end: Breadcrumb Section -->

<!-- start: Work Area -->
<section class="works-area">
  <div class="container">
    <div class="row">
      <div class="col">
        <?php if (!empty($work_section_title)) : ?>
          <div class="section_title text-center">
            <h2><?php echo securesofts_kses($work_section_title); ?></h2>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <?php
    $categories = get_terms('work_cat', array('hide_empty' => false));
    ?>
    <div class="row">
      <div class="filter_tabs">
        <button class="button active" data-filter="*"><?php esc_html_e('All', 'securesofts'); ?></button>
        <?php foreach ($categories as $cat) : ?>
          <button class="button" data-filter=".<?php echo esc_attr($cat->slug); ?>"><?php echo esc_html__($cat->name, 'securesofts'); ?></button>
        <?php endforeach; ?>
      </div>
    </div>

    <?php
    $args = [
      'post_type' => 'work',
      'posts_per_page' => -1,
      'order' => 'DESC'
    ];
    $works = new WP_Query($args);

    if ($works->have_posts()) :
    ?>
      <div class="row" id="works-grid">
        <?php while ($works->have_posts()) : $works->the_post();

          $cats = get_the_terms(get_the_ID(), 'work_cat');
        ?>
          <div class="col-md-6 col-lg-4 grid-item <?php foreach ($cats as $cat) {
                                                    echo $cat->slug . ' ';
                                                  }; ?>">
            <a href="<?php the_permalink(); ?>" class="single_works">
              <?php the_post_thumbnail(); ?>
              <div class="icon"><i class="fas fa-external-link"></i></div>
              <div class="hover_text">
                <div class="project_title">
                  <h4><?php the_title(); ?></h4>
                </div>
              </div>
            </a>
          </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<!-- end: Work Area -->


<?php get_footer(); ?>