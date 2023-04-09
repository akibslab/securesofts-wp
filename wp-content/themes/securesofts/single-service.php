<?php

/**
 * Template Name: Home Page
 * 
 * this template will be show home page content.
 */
get_header();

// Hero Section
$subtitle = function_exists('get_field') ? get_field('subtitle') : '';
$description = function_exists('get_field') ? get_field('description') : '';
$hero_image = function_exists('get_field') ? get_field('hero_image') : '';
$primary_button = function_exists('get_field') ? get_field('primary_button') : '';
$secondary_button = function_exists('get_field') ? get_field('secondary_button') : '';

// Clients
$clients_switcher = function_exists('get_field') ? get_field('want_to_show_clients') : true;
$clients_title = function_exists('get_field') ? get_field('clients_title') : '';
$clients = function_exists('get_field') ? get_field('clients') : '';

// content
$content_switcher = function_exists('get_field') ? get_field('want_to_show_content') : true;
$content_title = function_exists('get_field') ? get_field('content_title') : '';
$content_text = function_exists('get_field') ? get_field('content_text') : '';
$content_image = function_exists('get_field') ? get_field('content_image') : '';
$content_button = function_exists('get_field') ? get_field('content_button') : '';

// CounterUp
$counterUp_switcher = function_exists('get_field') ? get_field('want_to_show_counter_up_section') : true;
$counters = function_exists('get_field') ? get_field('counters') : '';

// Expertise
$expertise_switcher = function_exists('get_field') ? get_field('want_to_show_expertise') : true;
$expertise_title = function_exists('get_field') ? get_field('expertise_title') : '';
$expertise__items = function_exists('get_field') ? get_field('expertise__items') : '';

// Technology
$technology_switcher = function_exists('get_field') ? get_field('want_to_show_technology_section') : true;
$technology_title = function_exists('get_field') ? get_field('technology_title') : '';
$technologies = function_exists('get_field') ? get_field('technologies') : '';

// working step
$working_switcher = function_exists('get_field') ? get_field('want_to_show_working_step') : true;
$working_title = function_exists('get_field') ? get_field('working_title') : true;
$working_steps = function_exists('get_field') ? get_field('working_steps') : true;

// Testimonial
$testimonial_switcher = function_exists('get_field') ? get_field('want_to_show_testimonial') : true;
$testimonial_title = function_exists('get_field') ? get_field('testimonial_title') : '';
$show_testimonial = function_exists('get_field') ? get_field('show_testimonial') : '';
$more_testimonial = function_exists('get_field') ? get_field('more_testimonial') : '';
?>

<!-- start: Hero Area -->
<section class="hero-area" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/img/hero/shape.svg'); ?>');">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 order-2 order-lg-1">
        <div class="hero_content">
          <div class="hero_title">
            <h1 class="title"><?php the_title(); ?></h1>
            <?php if (!empty($subtitle)) : ?>
              <h4 class="subtitle"><?php echo esc_html__($subtitle, 'securesofts'); ?></h4>
            <?php endif; ?>
          </div>
          <?php if (!empty($description)) : ?>
            <p><?php echo esc_html__($description, 'securesofts'); ?></p>
          <?php endif; ?>
          <div class="hero_button">
            <?php if (!empty($primary_button['button_text'])) : ?>
              <a href="<?php echo esc_url($primary_button['button_link']); ?>" class="btn primary"><?php echo esc_html__($primary_button['button_text'], 'securesofts'); ?></a>
            <?php endif; ?>
            <?php if (!empty($secondary_button['button_text'])) : ?>
              <a href="<?php echo esc_url($secondary_button['button_link']); ?>" class="btn secondary"><?php echo esc_html__($secondary_button['button_text'], 'securesofts'); ?></a>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="col-lg-6 order-1 order-lg-2 text-lg-end">
        <?php if (!empty($hero_image)) : ?>
          <picture class="hero_img">
            <img src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo get_post_meta($hero_image['id'], '_wp_attachment_image_alt', true); ?>">
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
          <?php if (!empty($clients_title)) : ?>
            <div class="clients_content text-center">
              <p><?php echo esc_html__($clients_title, 'securesofts'); ?></p>
            </div>
          <?php endif;

          if (!empty($clients)) :
          ?>
            <div class="clients_carousel owl-carousel">
              <?php foreach ($clients as $client) : ?>
                <div class="single_client">
                  <?php if (!empty($client['client_link'])) : ?>
                    <a href="<?php echo esc_url($client['client_link']);  ?>">
                      <img src="<?php echo esc_url($client['brand_image']); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($client['brand_image']), '_wp_attachment_image_alt', true); ?>">
                    </a>
                  <?php else : ?>
                    <img src="<?php echo esc_url($client['brand_image']); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($client['brand_image']), '_wp_attachment_image_alt', true); ?>">
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

<!-- start: Service Content -->
<?php if (!empty($content_switcher)) : ?>
  <section class="about-area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <?php if (!empty($content_image)) : ?>
            <div class="service_img">
              <img src="<?php echo esc_url($content_image['url']); ?>" alt="<?php echo get_post_meta($content_image['id'], '_wp_attachment_image_alt', true); ?>">
            </div>
          <?php endif; ?>
        </div>
        <div class="col-lg-7">
          <?php if (!empty($content_title)) : ?>
            <div class="section_title">
              <h2><?php echo securesofts_kses($content_title); ?></h2>
            </div>
          <?php endif; ?>
          <?php if (!empty($content_text)) : ?>
            <div class="about_content">
              <?php echo securesofts_kses($content_text); ?>

              <?php if (!empty($content_button['button_text'])) : ?>
                <a href="<?php echo esc_url($content_button['button_link']); ?>" class="btn btn-inline"><?php echo esc_html__($content_button['button_text'], 'securesofts'); ?> <i class="far fa-long-arrow-right"></i></a>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- end: Service Content -->

<!-- start: CounterUp Area -->
<?php if (!empty($counterUp_switcher && $counters)) : ?>
  <section class="counter-section">
    <div class="container">
      <div class="row">
        <?php foreach ($counters as $key => $counter) : ?>
          <div class="col-md-6 col-lg-3">
            <div class="counter_box">
              <div class="counter_inner">
                <h2 class="counter"><span class="count"><?php echo esc_html__($counter['counting']); ?></span> <span><?php echo esc_html__($counter['counting_prefix']); ?></span></h2>
                <span><?php echo esc_html__($counter['label']); ?></span>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- end: CounterUp Area -->

<!-- start: Expertise Area -->
<?php if (!empty($expertise_switcher)) : ?>
  <section class="services-area service-page">
    <div class="container">
      <div class="row">
        <div class="col">
          <?php if (!empty($expertise_title)) : ?>
            <div class="section_title text-center">
              <h2><?php echo securesofts_kses($expertise_title); ?></h2>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <?php if (!empty($expertise__items)) : ?>
        <div class="row">
          <div class="col">
            <div class="services">
              <?php foreach ($expertise__items as $item) : ?>
                <div class="single_service">
                  <?php if (!empty($item['image'])) : ?>
                    <div class="icon">
                      <img src="<?php echo esc_url($item['image']) ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($item['image']), '_wp_attachment_image_alt', true); ?>">
                    </div>
                  <?php endif; ?>
                  <?php if (!empty($item['title'])) : ?>
                    <div class="heading">
                      <h4><?php echo esc_html__($item['title'], 'securesofts'); ?></h4>
                    </div>
                  <?php endif; ?>
                  <?php if (!empty($item['description'])) : ?>
                    <div class="description">
                      <p><?php echo esc_html__($item['description'], 'securesofts'); ?></p>
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
<!-- end: Expertise Area -->

<!-- start: Technology Used -->
<?php if (!empty($technology_switcher)) : ?>
  <section class="technology-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="technology_inner">
            <?php if (!empty($technology_title)) : ?>
              <h4 class="title"><?php echo esc_html__($technology_title, 'securesofts'); ?></h4>
            <?php endif; ?>
            <?php if (!empty($technologies)) : ?>
              <ul class="uses">
                <?php foreach ($technologies as $technology) : ?>
                  <li><?php echo esc_html__($technology['technology'], 'securesofts'); ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- end: Technology Used -->

<!-- start: How We Work Area -->
<?php if (!empty($working_switcher)) : ?>
  <section class="how-we-work-area service-page">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php if (!empty($working_title)) : ?>
            <div class="section_title text-center">
              <h2><?php echo securesofts_kses($working_title); ?></h2>
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
                  <span class="number"><?php printf(esc_html__('0%s', 'securesofts'), $key + 1); ?></span>
                  <?php if (!empty($step['title'])) : ?>
                    <h4><?php echo esc_html__($step['title'], 'securesofts'); ?></h4>
                  <?php endif; ?>
                  <?php if (!empty($step['description'])) : ?>
                    <p><?php echo esc_html__($step['description'], 'securesofts'); ?></p>
                  <?php endif; ?>
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/right-arrow.png') ?>" class="icon-right" alt="<?php echo esc_attr('Arrow'); ?>">
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

<!-- start: Testimonial Area -->
<?php if (!empty($testimonial_switcher)) : ?>
  <section class="testimonial-area service-page">
    <div class="container">
      <div class="row">
        <div class="col">
          <?php if (!empty($testimonial_title)) : ?>
            <div class="section_title text-center">
              <h2><?php echo securesofts_kses($testimonial_title); ?></h2>
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
        'posts_per_page' => $show_testimonial,
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

          <?php if (!empty($more_testimonial['button_text'])) : ?>
            <div class="more_video_button text-center">
              <a href="<?php echo esc_url($more_testimonial['button_link']); ?>" class="btn"><?php echo esc_html__($more_testimonial['button_text'], 'securesofts'); ?></a>
            </div>
          <?php endif; ?>
        </div>
      <?php endif; ?>


    </div>
    </div>

  </section>
<?php endif; ?>
<!-- end: Testimonial Area -->

<?php get_footer(); ?>