<?php

/**
 * Template part for displaying header layout two
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package securesofts
 */


// header topbar 
$header_right_button_switch = get_theme_mod('header_right_button', false);
$header_right_button_text = get_theme_mod('header_right_button_text', '');
$header_right_button_link = get_theme_mod('header_right_button_link', __('#', 'securesofts'));

$socials_switcher = get_theme_mod('socials_switcher', false);
?>

<!-- header-area-start -->
<header class="site-header header-absolute">
  <div class="container-fluid">
    <div class="row">
      <div class="col d-flex align-items-center flex-wrap">

        <!-- site logo -->
        <div class="site_logo">
          <?php securesofts_header_logo(); ?>
        </div>

        <!-- main menu -->
        <nav class="main_menu d-none d-lg-block">
          <?php securesofts_header_menu(); ?>
        </nav>

        <!-- header button -->
        <?php if (!empty($header_right_button_switch)) : ?>
          <div class="header_button ">
            <a class="btn" href="<?php echo esc_url($header_right_button_link); ?>"><?php echo securesofts_kses($header_right_button_text); ?></a>
          </div>
        <?php endif; ?>

        <div class="menu_bar d-lg-none">
          <a href="javascript:void(0)"><i class="fas fa-bars"></i></a>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- header-area-end -->
<!-- mobile menu -->
<div class="mobile_menu d-lg-none">
  <div class="top_area d-flex flex-wrap justify-content-between align-items-center">
    <div class="close_icon">
      <a href="javascript:void(0)"><i class="fas fa-times"></i></a>
    </div>

    <div class="mobile_logo">
      <?php securesofts_header_logo(); ?>
    </div>
  </div>

  <div class="mobile-menu"></div>

  <div class="bottom_area">
    <?php if (!empty($socials_switcher)) : ?>
      <?php securesofts_socials(); ?>
    <?php endif; ?>
  </div>
</div>
<!-- end: Header Area -->