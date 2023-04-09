<?php

/**
 * securesofts_scripts description
 * @return [type] [description]
 */
function securesofts_scripts() {

    /**
     * all css files
     */

    wp_enqueue_style('securesofts-fonts', securesofts_fonts_url(), [], '1.0.0');

    if (is_rtl()) {
        wp_enqueue_style('bootstrap-rtl', SECURESOFTS_THEME_CSS_DIR . 'bootstrap.rtl.min.css', []);
    } else {
        wp_enqueue_style('bootstrap', SECURESOFTS_THEME_CSS_DIR . 'bootstrap.min.css', []);
    }
    wp_enqueue_style('font-awesome-pro', SECURESOFTS_THEME_CSS_DIR . 'font-awesome-pro.css', []);
    wp_enqueue_style('meanmenu', SECURESOFTS_THEME_CSS_DIR . 'meanmenu.css', []);
    wp_enqueue_style('magnific-popup', SECURESOFTS_THEME_CSS_DIR . 'magnific-popup.min.css', []);
    wp_enqueue_style('owl-carousel', SECURESOFTS_THEME_CSS_DIR . 'owl.carousel.min.css', []);
    wp_enqueue_style('backtotop', SECURESOFTS_THEME_CSS_DIR . 'backtotop.css', []);
    wp_enqueue_style('securesofts-core', SECURESOFTS_THEME_CSS_DIR . 'securesofts-core.css', []);
    wp_enqueue_style('securesofts-unit', SECURESOFTS_THEME_CSS_DIR . 'securesofts-unit.css', []);
    wp_enqueue_style('securesofts-responsive', SECURESOFTS_THEME_CSS_DIR . 'securesofts-responsive.css', []);
    wp_enqueue_style('securesofts-custom', SECURESOFTS_THEME_CSS_DIR . 'securesofts-custom.css', []);
    wp_enqueue_style('securesofts-style', get_stylesheet_uri());

    // all js
    wp_enqueue_script('bootstrap-bundle', SECURESOFTS_THEME_JS_DIR . 'bootstrap.bundle.min.js', ['jquery'], '', true);
    wp_enqueue_script('meanmenu', SECURESOFTS_THEME_JS_DIR . 'meanmenu.js', ['jquery'], false, true);
    wp_enqueue_script('waypoints', SECURESOFTS_THEME_JS_DIR . 'waypoints.js', ['jquery'], false, true);
    wp_enqueue_script('counterup', SECURESOFTS_THEME_JS_DIR . 'counterup.js', ['jquery'], false, true);
    wp_enqueue_script('owl-carousel', SECURESOFTS_THEME_JS_DIR . 'owl.carousel.min.js', ['jquery'], false, true);
    wp_enqueue_script('magnific-popup', SECURESOFTS_THEME_JS_DIR . 'magnific-popup.min.js', ['jquery'], '', true);
    wp_enqueue_script('backtotop', SECURESOFTS_THEME_JS_DIR . 'backtotop.js', ['jquery'], '', true);
    wp_enqueue_script('isotope-pkgd', SECURESOFTS_THEME_JS_DIR . 'isotope-pkgd.js', ['imagesloaded'], false, true);
    wp_enqueue_script('securesofts-main', SECURESOFTS_THEME_JS_DIR . 'main.js', ['jquery'], false, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'securesofts_scripts');

/*
Register Fonts
 */
function securesofts_fonts_url() {
    $font_url = '';
    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ('off' !== _x('on', 'Google font: on or off', 'securesofts')) {
        $font_url = 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap';
    }
    return $font_url;
}
