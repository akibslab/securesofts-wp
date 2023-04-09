<?php

/**
 * Template part for displaying footer layout one
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package securesofts
 */

//  cta customize
$cta_title = get_theme_mod('cta_title', esc_html__('Get your Website Designs, Prototypes & Mockups Converted to Exceptional HTML or WordPress Code Without
the High Costs!', 'securesofts'));
$cta_subtitle = get_theme_mod('cta_subtitle', esc_html__('Send us your design files to get a quick quote today.', 'securesofts'));
$cta_btn_text = get_theme_mod('cta_btn_text', esc_html__('Get a Free Quote', 'securesofts'));
$cta_btn_link = get_theme_mod('cta_btn_link', esc_html__('#', 'securesofts'));

// footer customize
$fLogo = get_template_directory_uri() . '/assets/img/logo/logo.png';
$footer_logo = get_theme_mod('footer_logo', $fLogo);
$footer_info = get_theme_mod('footer_info', esc_html__('White Labelled WordPress development services for Digital & Creative Agencies.', 'securesofts'));
$quick_link_menu = get_theme_mod('quick_link_menu', '');
$other_link_menu = get_theme_mod('other_link_menu', '');

$footer_address = get_theme_mod('footer_address', esc_html__('House: 541/4, Road: 12, Baridhara DOHS, Gulshan, Dhaka-1212', 'securesofts'));
$footer_phone = get_theme_mod('footer_phone', esc_html__('+88 01320 583 695', 'securesofts'));
$footer_email = get_theme_mod('footer_email', esc_html__('contact@securesofts.com', 'securesofts'));

$socials_switcher = get_theme_mod('socials_switcher', false);



?>

<!-- start: CTA Area -->
<section class="cta-area">
  <div class="container">
    <div class="row">
      <div class="call_to_action">
        <div class="cta_content" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/icons/cta-icons.svg');">
          <?php if (!empty($cta_title)) : ?>
            <h3><?php echo esc_html($cta_title); ?></h3>
          <?php endif;
          if (!empty($cta_subtitle)) : ?>
            <p><?php echo esc_html($cta_subtitle); ?></p>
          <?php endif;
          if (!empty($cta_btn_text)) : ?>
            <a href="<?php echo esc_url($cta_btn_link); ?>" class="btn"><?php echo esc_html($cta_btn_text); ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end: CTA Area -->

<!-- start: Footer Area -->
<footer class="footer-area">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3">
        <div class="footer_widget">
          <div class="footer_logo">
            <a href="<?php print esc_url(home_url('/')); ?>">
              <img src="<?php echo esc_url($footer_logo); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($footer_logo), '_wp_attachment_image_alt', true); ?>">
            </a>
          </div>
          <?php if (!empty($footer_info)) : ?>
            <div class="footer_content">
              <p><?php echo esc_html($footer_info); ?></p>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <div class="col-md-6 col-lg-2 offset-lg-2">
        <div class="footer_widget">
          <div class="widget_title">
            <h6><?php esc_html_e('Quick Links', 'securesofts'); ?></h6>
          </div>
          <?php footer_quick_menu(); ?>
        </div>
      </div>

      <div class="col-md-6 col-lg-2">
        <div class="footer_widget">
          <div class="widget_title">
            <h6><?php esc_html_e('Other Links', 'securesofts'); ?></h6>
          </div>
          <?php footer_other_menu(); ?>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="footer_widget">
          <div class="widget_title">
            <h6><?php esc_html_e('Contact Links', 'securesofts'); ?></h6>
          </div>
          <ul class="contact_list">
            <?php if (!empty($footer_address)) : ?>
              <li><span><?php esc_html_e('Address:', 'securesofts'); ?></span> <?php echo esc_html($footer_address); ?></li>
              <?php endif; ?><?php if (!empty($footer_phone)) : ?>
              <li><span><?php esc_html_e('Call / Whatsapp:', 'securesofts'); ?></span> <a href="tel:<?php echo esc_attr($footer_phone); ?>"><?php echo esc_html($footer_phone); ?></a></li>
              <?php endif; ?><?php if (!empty($footer_email)) : ?>
              <li><span><?php esc_html_e('Email:', 'securesofts'); ?></span> <a href="mailto:<?php echo esc_attr($footer_email); ?>"><?php echo esc_html($footer_email); ?></a></li>
            <?php endif; ?>
          </ul>

          <?php if (!empty($socials_switcher)) : ?>
            <?php securesofts_socials(); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="footer_bottom d-flex align-items-center justify-content-between">
          <div class="copyright_text">
            <p><?php securesofts_copyright_text(); ?> </p>
          </div>

          <?php securesofts_footer_menu(); ?>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- end: Footer Area -->