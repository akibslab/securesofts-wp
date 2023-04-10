<?php

/**
 * Template Name: Home Page
 * 
 * this template will be show home page content.
 */
get_header();

// Hero Section
$hero_title = function_exists('get_field') ? get_field('hero_title') : securesofts_kses('Website UI Design to <span>HTML & WordPress</span> Conversion Services');
$hero_description = function_exists('get_field') ? get_field('hero_description') : esc_html__('Get your website design prototypes and mockups converted into Pixel Perfect, Responsive, and Hand Coded HTML and WordPress websites.', 'securesofts');
$primary_button = function_exists('get_field') ? get_field('primary_button') : '';
$secondary_button = function_exists('get_field') ? get_field('secondary_button') : '';
$hero_image = function_exists('get_field') ? get_field('hero_image') : '';

// client section
$clients_switcher = function_exists('get_field') ? get_field('want_clients_section') : true;
$client_title = function_exists('get_field') ? get_field('client_title') : esc_html__('LOVED BY REKNOWNED BRANDS', 'securesofts');
$clients = function_exists('get_field') ? get_field('clients') : '';

// about section
$about_switcher = function_exists('get_field') ? get_field('want_about_section') : true;
$about_title = function_exists('get_field') ? get_field('about_title') : securesofts_kses('We are<br><span>Securesoft</span>');
$about_content = function_exists('get_field') ? get_field('about_content') : '';
$html_conversion = function_exists('get_field') ? get_field('html_conversion') : '';
$wordpress_conversion = function_exists('get_field') ? get_field('wordpress_conversion') : '';

// suited Section
$suited_switcher = function_exists('get_field') ? get_field('want_suited_section') : false;
$suited_title = function_exists('get_field') ? get_field('suited_title') : securesofts_kses('Our services are <span>best suited for</span>');
$suited_lists = function_exists('get_field') ? get_field('suited_lists') : '';

// working steps
$working_step_switcher = function_exists('get_field') ? get_field('want_work_section') : true;
$working_step_title = function_exists('get_field') ? get_field('working_step_title') : securesofts_kses('How we <span>work</span>');
$working_steps = function_exists('get_field') ? get_field('working_steps') : '';

// works section
$works_switcher = function_exists('get_field') ? get_field('want_to_works_section') : true;
$works_title = function_exists('get_field') ? get_field('works_title') : securesofts_kses('Our past <span>works</span>');
$work_button_text = function_exists('get_field') ? get_field('work_button_text') : esc_html__('more works', 'securesofts');
$work_button_link = function_exists('get_field') ? get_field('work_button_link') : esc_html__('#', 'securesofts');
$works_show = function_exists('get_field') ? get_field('works_show') : false;

// services section
$services_switcher = function_exists('get_field') ? get_field('want_services_section') : true;
$services_title = function_exists('get_field') ? get_field('services_title') : securesofts_kses('What to expect <br><span>from us</span>');
$services = function_exists('get_field') ? get_field('services') : '';

// Testimonial section
$testimonial_switcher = function_exists('get_field') ? get_field('want_testimonial_section') : true;
$video_testimonial_title = function_exists('get_field') ? get_field('video_testimonial_title') : securesofts_kses('Story from <span>our customers</span>');
$text_testimonial_title = function_exists('get_field') ? get_field('text_testimonial_title') : securesofts_kses('Hear from <span>our customers</span>');
$testimonial_button_text = function_exists('get_field') ? get_field('testimonial_button_text') : esc_html__('more stories', 'securesofts');
$testimonial_button_link = function_exists('get_field') ? get_field('testimonial_button_link') : esc_html__('#', 'securesofts');
$first_carousel_items = function_exists('get_field') ? get_field('first_carousel_items') : '';
$second_carousel_items = function_exists('get_field') ? get_field('second_carousel_items') : '';

// blog section
$blog_switcher = function_exists('get_field') ? get_field('want_to_show_blog_section') : true;
$blog_title = function_exists('get_field') ? get_field('blog_title') : securesofts_kses('From <span>our Blog</span>');
$show_items = function_exists('get_field') ? get_field('show_items') : esc_html__('3', 'securesofts');
?>
<!-- start: Hero Area -->
<section class="hero-area" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/img/hero/shape.svg'); ?>');">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 order-2 order-lg-1">
        <div class="hero_content">
          <?php if (!empty($hero_title)) : ?>
            <div class="hero_title">
              <h1><?php echo securesofts_kses($hero_title); ?></h1>
            </div>
          <?php endif;
          if (!empty($hero_description)) : ?>
            <p><?php echo esc_html__($hero_description, 'securesofts'); ?></p>
          <?php endif; ?>
          <div class="hero_button">
            <?php if (!empty($primary_button)) : ?>
              <a href="<?php echo esc_url($primary_button['button_link']); ?>" class="btn primary"><?php echo esc_html__($primary_button['button_text'], 'securesofts'); ?></a>
            <?php endif;
            if (!empty($secondary_button)) : ?>
              <a href="<?php echo esc_url($secondary_button['button_link']); ?>" class="btn secondary"><?php echo esc_html__($secondary_button['button_text'], 'securesofts'); ?></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 text-lg-end">
        <?php if (!empty($hero_image)) : ?>
          <picture class="hero_img">
            <img src="<?php echo esc_url($hero_image['url']) ?>" alt="<?php echo get_post_meta($hero_image['id'], '_wp_attachment_image_alt', true); ?>">
          </picture>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<!-- end: Hero Area -->

<!-- start: Clients Area -->
<?php if (!empty($clients_switcher)) : ?>
  <section class="clients-area">
    <div class="container">
      <div class="row">
        <div class="col">

          <?php if (!empty($client_title)) : ?>
            <div class="clients_content text-center">
              <p><?php echo esc_html__($client_title, 'securesofts'); ?></p>
            </div>
          <?php endif;

          if (!empty($clients)) : ?>
            <div class="clients_carousel owl-carousel">
              <?php foreach ($clients as $client) : ?>
                <div class="single_client">
                  <?php if (!empty($client['client_link'])) : ?>
                    <a href="<?php echo esc_url($client['client_link']); ?>"><img src="<?php echo esc_url($client['client_image']['url']); ?>" alt="<?php echo get_post_meta($client['client_image']['id'], '_wp_attachment_image_alt', true); ?>"></a>
                  <?php else : ?>
                    <img src="<?php echo esc_url($client['client_image']['url']); ?>" alt="<?php echo get_post_meta($client['client_image']['id'], '_wp_attachment_image_alt', true); ?>">
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- end: Clients Area -->

<!-- start: About Area -->
<?php if (!empty($about_switcher)) : ?>
  <section class="about-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <?php if (!empty($about_switcher)) : ?>
            <div class="section_title">
              <h2><?php echo securesofts_kses($about_title); ?></h2>
            </div>
          <?php endif; ?>
        </div>
        <div class="col-lg-7">
          <?php if (!empty($about_content)) : ?>
            <div class="about_content">
              <?php echo securesofts_kses($about_content); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <div class="row gx-lg-5 padding_top">
        <?php if (!empty($html_conversion)) : ?>
          <div class="col-lg-6">
            <div class="design_conversion html">
              <?php if (!empty($html_conversion['conversion_image'])) : ?>
                <div class="icon">
                  <img src="<?php echo esc_url($html_conversion['conversion_image']) ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($html_conversion['conversion_image']), '_wp_attachment_image_alt', true); ?>">
                </div>
              <?php endif;

              if (!empty($html_conversion['conversion_title'])) : ?>
                <div class="heading">
                  <h2><?php echo securesofts_kses($html_conversion['conversion_title']); ?></h2>
                </div>
              <?php endif;

              if (!empty($html_conversion['conversion_description'])) : ?>
                <div class="description">
                  <p><?php echo esc_html__($html_conversion['conversion_description'], 'securesofts'); ?></p>
                </div>
              <?php endif;

              if (!empty($html_conversion['conversions'])) : ?>
                <ul class="design_list">
                  <?php foreach ($html_conversion['conversions'] as $conversion) : ?>
                    <li>
                      <a href="<?php echo esc_url($conversion['link']); ?>">
                        <img src="<?php echo esc_url($conversion['image']['url']); ?>" alt="<?php echo get_post_meta($conversion['image']['id'], '_wp_attachment_image_alt', true); ?>">
                        <span><?php echo esc_html__($conversion['label'], 'securesofts'); ?></span>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>

            </div>
          </div>
        <?php endif;


        if (!empty($wordpress_conversion)) : ?>
          <div class="col-lg-6">
            <div class="design_conversion wp">

              <?php if (!empty($wordpress_conversion['conversion_image'])) : ?>
                <div class="icon">
                  <img src="<?php echo esc_url($wordpress_conversion['conversion_image']); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($wordpress_conversion['conversion_image']), '_wp_attachment_image_alt', true); ?>">
                </div>
              <?php endif;

              if (!empty($wordpress_conversion['conversion_title'])) : ?>
                <div class="heading">
                  <h2><?php echo securesofts_kses($wordpress_conversion['conversion_title']); ?></h2>
                </div>
              <?php endif;

              if (!empty($wordpress_conversion['conversion_description'])) : ?>
                <div class="description">
                  <p><?php echo esc_html__($wordpress_conversion['conversion_description'], 'securesofts'); ?></p>
                </div>
              <?php endif;

              if (!empty($wordpress_conversion['conversions'])) : ?>
                <ul class="design_list">
                  <?php foreach ($wordpress_conversion['conversions'] as $conversion) : ?>
                    <li>
                      <a href="<?php echo esc_url($conversion['link']); ?>">
                        <img src="<?php echo esc_url($conversion['image']['url']); ?>" alt="<?php echo get_post_meta($conversion['image']['id'], '_wp_attachment_image_alt', true); ?>">
                        <span><?php echo esc_html__($conversion['label'], 'securesofts'); ?></span>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>

            </div>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </section>
<?php endif; ?>
<!-- end: About Area -->

<!-- start: Suited Area -->
<?php if (!empty($suited_switcher)) : ?>
  <section class="suited-area">
    <div class="container">
      <div class="row">
        <div class="col">
          <?php if (!empty($suited_title)) : ?>
            <div class="section_title text-center">
              <h2><?php echo securesofts_kses($suited_title); ?></h2>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <?php if (!empty($suited_lists)) : ?>
        <div class="row ">
          <div class="col-lg-5">
            <ul class="suited_list">
              <?php foreach ($suited_lists as $key => $item) : ?>
                <li class="single_suite <?php echo ($key == 0) ? 'active' : ''; ?>">
                  <div class="heading">
                    <h4><?php echo esc_html__($item['title'], 'securesofts'); ?></h4>
                  </div>
                  <div class="description">
                    <p><?php echo esc_html__($item['description'], 'securesofts'); ?></p>
                  </div>
                </li>
              <?php endforeach ?>
            </ul>
          </div>
          <div class="col-lg-7 text-end">
            <ul class="suited_images">
              <?php foreach ($suited_lists as $key => $item) : ?>
                <li class="image <?php echo ($key == '0') ? 'active' : ''; ?>">
                  <img src="<?php echo esc_url($item['image']['url']); ?>" alt="<?php echo get_post_meta($item['image']['id'], '_wp_attachment_image_alt', true); ?>">
                </li>
              <?php endforeach ?>
            </ul>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>
<!-- end: Suited Area -->

<!-- start: How We Work Area -->
<?php if (!empty($working_step_switcher)) : ?>
  <section class="how-we-work-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php if (!empty($working_step_switcher)) : ?>
            <div class="section_title text-center">
              <h2><?php echo securesofts_kses($working_step_title); ?></h2>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <?php if (!empty($working_steps)) : ?>
        <div class="row">
          <div class="col-md-12">
            <ul class="how-we-work d-flex flex-wrap justify-content-center">

              <?php foreach ($working_steps as $key => $step) : ?>
                <li>
                  <span class="number">0<?php echo $key + 1; ?></span>
                  <h4><?php echo esc_html__($step['title'], 'securesofts'); ?></h4>
                  <p><?php echo esc_html__($step['description'], 'securesofts'); ?></p>
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/right-arrow.png'); ?>" class="icon-right" alt="<?php echo esc_attr('Right Arrow'); ?>">
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>
<!-- end: How It Works Area -->

<!-- start: Work Area -->
<?php if (!empty($works_switcher)) : ?>
  <section class="works-area">
    <div class="container">
      <div class="row">
        <div class="col">
          <?php if (!empty($works_title)) : ?>
            <div class="section_title text-center">
              <h2><?php echo securesofts_kses($works_title); ?></h2>
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
        'posts_per_page' => $works_show,
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
        <?php if (!empty($work_button_text)) : ?>
          <div class="more_works_button text-center">
            <a href="<?php echo esc_url($work_button_link); ?>" class="btn"><?php echo esc_html__($work_button_text, 'securesofts'); ?></a>
          </div>
      <?php endif;
      endif; ?>
    </div>
  </section>
<?php endif; ?>
<!-- end: Work Area -->

<!-- start: Services Area -->
<?php if (!empty($services_switcher)) : ?>
  <section class="services-area">
    <div class="container">
      <div class="row">
        <div class="col">
          <?php if (!empty($services_title)) : ?>
            <div class="section_title text-center">
              <h2><?php echo securesofts_kses($services_title); ?></h2>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <?php if (!empty($services)) : ?>
        <div class="row">
          <div class="col">
            <div class="services">

              <?php foreach ($services as $service) : ?>
                <div class="single_service">
                  <?php if (!empty($service['image'])) : ?>
                    <div class="icon">
                      <img src="<?php echo esc_url($service['image']['url']) ?>" alt="<?php echo get_post_meta($service['image']['id'], '_wp_attachment_image_alt', true); ?>">
                    </div>
                  <?php endif;
                  if (!empty($service['title'])) : ?>
                    <div class="heading">
                      <h4><?php echo esc_html__($service['title'], 'securesofts'); ?></h4>
                    </div>
                  <?php endif;
                  if (!empty($service['description'])) : ?>
                    <div class="description">
                      <p><?php echo esc_html__($service['description'], 'securesofts'); ?></p>
                    </div>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>
<!-- end: Services Area -->

<!-- start: Testimonial Area -->
<?php if (!empty($testimonial_switcher)) : ?>
  <section class="testimonial-area">
    <div class="container">
      <div class="row">
        <div class="col">
          <?php if (!empty($video_testimonial_title)) : ?>
            <div class="section_title text-center">
              <h2><?php echo securesofts_kses($video_testimonial_title); ?></h2>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <?php
      $args = [
        'post_type' => 'testimonial',
        'tax_query' => array(
          array(
            'taxonomy' => 'testimonial_cat',
            'field' => 'slug',
            'terms' => 'video',
          ),
        ),
        'posts_per_page' => 2,
        'order' => 'DESC'
      ];
      $videoTestimonial = new WP_Query($args);

      if ($videoTestimonial->have_posts()) : ?>

        <div class="video_testimonials">
          <div class="row">
            <?php while ($videoTestimonial->have_posts()) : $videoTestimonial->the_post();

              $videoID = get_field('video_id', get_the_ID());
            ?>
              <div class="col-md-6">
                <div class="single_testimonial">
                  <div class="testimonial_video" style="background-image: url(https://img.youtube.com/vi/<?php echo esc_attr($videoID); ?>/hqdefault.jpg);">
                    <a href="https://www.youtube.com/watch?v=<?php echo esc_attr($videoID); ?>" class="video_play">
                      <div class="play_btn">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/paly.svg'); ?>" alt="<?php echo esc_attr('Video Play'); ?>">
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
          </div>

          <?php if (!empty($testimonial_button_text)) : ?>
            <div class="more_video_button text-center">
              <a href="<?php echo esc_url($testimonial_button_link); ?>" class="btn"><?php echo esc_html__($testimonial_button_text, 'securesofts'); ?></a>
            </div>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>

    <div class="container-fluid gx-0 overflow-hidden">
      <div class="row">
        <div class="col">
          <?php if (!empty($text_testimonial_title)) : ?>
            <div class="section_title text-center">
              <h2><?php echo securesofts_kses($text_testimonial_title); ?></h2>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <?php
      $args = [
        'post_type' => 'testimonial',
        'tax_query' => array(
          array(
            'taxonomy' => 'testimonial_cat',
            'field' => 'slug',
            'terms' => 'standard',
          ),
        ),
        'posts_per_page' => $first_carousel_items,
        'order' => 'DESC'
      ];
      $textTestimonial = new WP_Query($args);

      if ($textTestimonial->have_posts()) : ?>
        <div class="row d-none d-sm-block">
          <div class="col">
            <div class="testimonials first owl-carousel">
              <?php while ($textTestimonial->have_posts()) : $textTestimonial->the_post();

                $company_name = get_field('company_name', get_the_ID());
                $review_text = get_field('review_text', get_the_ID());
                $different_color = get_field('different_color', get_the_ID());
              ?>
                <div class="single_testimonial <?php echo ($different_color == true) ? 'another' : ''; ?>">
                  <div class="testimonial_content">
                    <div class="text">
                      <p><?php printf('"%s"', esc_html__($review_text, 'securesofts')) ?></p>
                    </div>
                    <div class="client">
                      <h6><?php the_title(); ?> <span><?php echo esc_html__($company_name, 'securesofts'); ?></span></h6>
                    </div>
                  </div>
                </div>
              <?php endwhile;
              wp_reset_postdata(); ?>

            </div>
          </div>
        </div>
      <?php endif;



      $args = [
        'post_type' => 'testimonial',
        'tax_query' => array(
          array(
            'taxonomy' => 'testimonial_cat',
            'field' => 'slug',
            'terms' => 'standard',
          ),
        ),
        'offset' => $second_carousel_items,
        'order' => 'DESC'
      ];
      $textTestimonial = new WP_Query($args);

      if ($textTestimonial->have_posts()) :
      ?>
        <div class="row d-none d-sm-block">
          <div class="col">
            <div class="testimonials second owl-carousel">
              <?php while ($textTestimonial->have_posts()) : $textTestimonial->the_post();

                $company_name = get_field('company_name', get_the_ID());
                $review_text = get_field('review_text', get_the_ID());
                $different_color = get_field('different_color', get_the_ID());
              ?>
                <div class="single_testimonial <?php echo ($different_color == true) ? 'another' : ''; ?>">
                  <div class="testimonial_content">
                    <div class="text">
                      <p><?php printf('"%s"', esc_html__($review_text, 'securesofts')) ?></p>
                    </div>
                    <div class="client">
                      <h6><?php the_title(); ?> <span><?php echo esc_html__($company_name, 'securesofts'); ?></span></h6>
                    </div>
                  </div>
                </div>
              <?php endwhile;
              wp_reset_postdata(); ?>

            </div>
          </div>
        </div>
      <?php endif; ?>

      <div class="row d-sm-none">
        <div class="col">
          <?php
          $args = [
            'post_type' => 'testimonial',
            'tax_query' => array(
              array(
                'taxonomy' => 'testimonial_cat',
                'field' => 'slug',
                'terms' => 'standard',
              ),
            ),
            'posts_per_page' => -1,
            'order' => 'DESC'
          ];
          $textTestimonial = new WP_Query($args);

          if ($textTestimonial->have_posts()) :
          ?>
            <div class="testimonials full-testimonial owl-carousel">
              <?php while ($textTestimonial->have_posts()) : $textTestimonial->the_post();

                $company_name = get_field('company_name', get_the_ID());
                $review_text = get_field('review_text', get_the_ID());
                $different_color = get_field('different_color', get_the_ID());
              ?>
                <div class="single_testimonial <?php echo ($different_color == true) ? 'another' : ''; ?>">
                  <div class="testimonial_content">
                    <div class="text">
                      <p><?php printf('"%s"', esc_html__($review_text, 'securesofts')) ?></p>
                    </div>
                    <div class="client">
                      <h6><?php the_title(); ?> <span><?php echo esc_html__($company_name, 'securesofts'); ?></span></h6>
                    </div>
                  </div>
                </div>
              <?php endwhile;
              wp_reset_postdata(); ?>

            </div>
          <?php endif; ?>
        </div>
      </div>

    </div>
  </section>
<?php endif; ?>
<!-- end: Testimonial Area -->

<!-- start: Recent Blog Area -->
<?php if (!empty($blog_switcher)) : ?>
  <section class="recent-blogs">
    <div class="container">
      <div class="row">
        <?php if (!empty($blog_title)) : ?>
          <div class="section_title text-center">
            <h2><?php echo securesofts_kses($blog_title); ?></h2>
          </div>
        <?php endif; ?>
      </div>
      <?php
      $query = new WP_Query([
        'posts_per_page' => 3,
        'order' => 'DESC'
      ]);

      if ($query->have_posts()) : ?>
        <div class="row">
          <?php
          while ($query->have_posts()) : $query->the_post();
            $minuet_to_read = function_exists('get_field') ? get_field('minuet_to_read', get_the_ID()) : '';
          ?>
            <div class="col-md-6 col-lg-4">
              <article class="single_blog">
                <a href="<?php the_permalink(); ?>" class="blog_thumb" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>"></a>
                <ul class="blog_cat">
                  <?php
                  $categories_list = get_the_category();
                  if ($categories_list) {
                    echo '<li><a href="' . get_category_link($categories_list[0]->term_id) . '">' . $categories_list[0]->name . '</a></li>';
                  } ?>

                  <li><?php echo esc_html__($minuet_to_read, 'securesofts'); ?></li>
                </ul>
                <div class="blog_content">
                  <a href="<?php the_permalink(); ?>" class="title">
                    <h4><?php the_title(); ?></h4>
                  </a>
                  <?php echo wp_trim_words(get_the_content(), 15, '...'); ?>
                </div>
              </article>
            </div>
          <?php endwhile;
          wp_reset_postdata(); ?>
        </div>
      <?php else :

        printf(esc_html__('No Posts Found!', 'securesofts'));

      endif; ?>
    </div>
  </section>
<?php endif; ?>
<!-- end: Recent Blog Area -->


<?php get_footer(); ?>