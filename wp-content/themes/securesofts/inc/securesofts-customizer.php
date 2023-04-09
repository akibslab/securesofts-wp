<?php

/**
 * securesofts customizer
 *
 * @package securesofts
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
  exit;
}

/**
 * Added Panels & Sections
 */
function securesofts_customizer_panels_sections($wp_customize) {

  //Add panel
  $wp_customize->add_panel('securesofts_customizer', [
    'priority' => 10,
    'title'    => esc_html__('Securesofts Customizer', 'securesofts'),
  ]);

  /**
   * Customizer Section
   * 
   * General
   */
  $wp_customize->add_section('securesofts_theme_general_settings', [
    'title'       => esc_html__('General', 'securesofts'),
    'description' => '',
    'priority'    => 10,
    'capability'  => 'edit_theme_options',
    'panel'       => 'securesofts_customizer',
  ]);
  // Logos & Favicon
  $wp_customize->add_section('securesofts_theme_logos_favicon', [
    'title'       => esc_html__('Logos ', 'securesofts'),
    'description' => '',
    'priority'    => 11,
    'capability'  => 'edit_theme_options',
    'panel'       => 'securesofts_customizer',
  ]);
  // Header Settings
  $wp_customize->add_section('header_settings', [
    'title'       => esc_html__('Header Setting', 'securesofts'),
    'description' => '',
    'priority'    => 12,
    'capability'  => 'edit_theme_options',
    'panel'       => 'securesofts_customizer',
  ]);
  // Socials
  $wp_customize->add_section('socials', [
    'title'       => esc_html__('Socials', 'securesofts'),
    'description' => '',
    'priority'    => 12,
    'capability'  => 'edit_theme_options',
    'panel'       => 'securesofts_customizer',
  ]);
  // Blog Settings
  $wp_customize->add_section('blog_setting', [
    'title'       => esc_html__('Blog Setting', 'securesofts'),
    'description' => '',
    'priority'    => 15,
    'capability'  => 'edit_theme_options',
    'panel'       => 'securesofts_customizer',
  ]);
  $wp_customize->add_section('cta_setting', [
    'title'       => esc_html__('CTA Setting', 'securesofts'),
    'description' => '',
    'priority'    => 15,
    'capability'  => 'edit_theme_options',
    'panel'       => 'securesofts_customizer',
  ]);
  $wp_customize->add_section('footer_setting', [
    'title'       => esc_html__('Footer Settings', 'securesofts'),
    'description' => '',
    'priority'    => 16,
    'capability'  => 'edit_theme_options',
    'panel'       => 'securesofts_customizer',
  ]);
  $wp_customize->add_section('404_page', [
    'title'       => esc_html__('404 Page', 'securesofts'),
    'description' => '',
    'priority'    => 18,
    'capability'  => 'edit_theme_options',
    'panel'       => 'securesofts_customizer',
  ]);
  // Work Pge
  $wp_customize->add_section('work_page', [
    'title'       => esc_html__('Works page', 'securesofts'),
    'priority'    => 19,
    'capability'  => 'edit_theme_options',
    'panel'       => 'securesofts_customizer',
  ]);
}
add_action('customize_register', 'securesofts_customizer_panels_sections');


/************************************ Customizer Fields *********************************
 * 
 * General Settings
 */
function _theme_general_settings_fields($fields) {
  // preloader
  $fields[] = [
    'type'     => 'switch',
    'settings' => 'securesofts_preloader',
    'label'    => esc_html__('Preloader?', 'securesofts'),
    'description' => esc_html__('Show preloader.', 'securesofts'),
    'section'  => 'securesofts_theme_general_settings',
    'default'  => '0',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'securesofts'),
      'off' => esc_html__('Disable', 'securesofts'),
    ],
  ];

  // backToTop
  $fields[] = [
    'type'     => 'switch',
    'settings' => 'securesofts_backtotop',
    'label'    => esc_html__('Back to Top', 'securesofts'),
    'description'    => esc_html__('Show back to top button', 'securesofts'),
    'section'  => 'securesofts_theme_general_settings',
    'default'  => '0',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'securesofts'),
      'off' => esc_html__('Disable', 'securesofts'),
    ],
  ];

  return $fields;
}
add_filter('kirki/fields', '_theme_general_settings_fields');

// logos & favicon fields
function _theme_logos_favicon_fields($fields) {
  // primary logo
  $fields[] = [
    'type'        => 'image',
    'settings'    => 'site_logo',
    'label'       => esc_html__('Site Logo', 'securesofts'),
    'description' => esc_html__('Upload Your Logo.', 'securesofts'),
    'section'     => 'securesofts_theme_logos_favicon',
    'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
  ];
  // preloader logo
  $fields[] = [
    'type'        => 'image',
    'settings'    => 'footer_logo',
    'label'       => esc_html__('Footer Logo', 'securesofts'),
    'description' => esc_html__('Upload Footer Logo.', 'securesofts'),
    'section'     => 'securesofts_theme_logos_favicon',
    'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
  ];

  return $fields;
}
add_filter('kirki/fields', '_theme_logos_favicon_fields');


// Header Top Bar
function _work_page_fields($fields) {
  $fields[] = [
    'type'     => 'text',
    'settings' => 'work_page_title',
    'label'    => esc_html__('Page Title', 'securesofts'),
    'section'  => 'work_page',
    'default'  => esc_html__('Our Works', 'securesofts'),
    'priority' => 10,
  ];
  $fields[] = [
    'type'     => 'textarea',
    'settings' => 'work_page_description',
    'label'    => esc_html__('Page Description', 'securesofts'),
    'section'  => 'work_page',
    'default'  => esc_html__('Please take sometime and check some of our latest projects to know the type of quality work we provided to our clients.', 'securesofts'),
    'priority' => 11,
  ];
  $fields[] = [
    'type'        => 'image',
    'settings'    => 'work_breadcrumb_img',
    'label'       => esc_html__('Breadcrumb Image', 'securesofts'),
    'section'     => 'work_page',
    // 'default'     => get_template_directory_uri() . '/assets/img/works/breadcrumb-img.png',
    'priority' => 12,
  ];
  $fields[] = [
    'type'     => 'text',
    'settings' => 'work_section_title',
    'label'    => esc_html__('Section Title', 'securesofts'),
    'section'  => 'work_page',
    'default'  => esc_html__('Our recent <span>works</span>', 'securesofts'),
    'priority' => 13,
  ];
  return $fields;
}
add_filter('kirki/fields', '_work_page_fields');

// Header Settings
function _header_setting_fields($fields) {
  // header right
  $fields[] = [
    'type'     => 'switch',
    'settings' => 'header_right_button',
    'label'    => esc_html__('Header Right Button', 'securesofts'),
    'description'    => esc_html__('Show header right button.', 'securesofts'),
    'section'  => 'header_settings',
    'default'  => '0',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'securesofts'),
      'off' => esc_html__('Disable', 'securesofts'),
    ],
  ];
  // right button text
  $fields[] = [
    'type'     => 'text',
    'settings' => 'header_right_button_text',
    'label'    => esc_html__('Button Text', 'securesofts'),
    'section'  => 'header_settings',
    'default'  => securesofts_kses('Get a <span>Free</span> Quote'),
    'priority' => 10,
    'active_callback' => [
      [
        'setting'  => 'header_right_button',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];
  // right button link
  $fields[] = [
    'type'     => 'link',
    'settings' => 'header_right_button_link',
    'label'    => esc_html__('Button Link', 'securesofts'),
    'section'  => 'header_settings',
    'default'  => esc_html__('#', 'securesofts'),
    'priority' => 10,
    'active_callback' => [
      [
        'setting'  => 'header_right_button',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];

  return $fields;
}
add_filter('kirki/fields', '_header_setting_fields');

// Breadcrumb Settings
function _breadcrumb_setting_fields($fields) {
  // Breadcrumb Setting
  $fields[] = [
    'type'        => 'image',
    'settings'    => 'breadcrumb_bg_img',
    'label'       => esc_html__('Background Image', 'securesofts'),
    'description' => esc_html__('', 'securesofts'),
    'section'     => 'breadcrumb_setting',
    // 'default'     => get_template_directory_uri() . '/assets/img/bg/page-bg.jpg',
  ];
  $fields[] = [
    'type'        => 'color',
    'settings'    => 'breadcrumb_bg_color',
    'label'       => __('Background Color', 'securesofts'),
    'description' => esc_html__('', 'securesofts'),
    'section'     => 'breadcrumb_setting',
    'default'     => '#343a40',
    'priority'    => 10,
  ];

  $fields[] = [
    'type'     => 'switch',
    'settings' => 'breadcrumb_info_switch',
    'label'    => esc_html__('Breadcrumb Info switch', 'securesofts'),
    'section'  => 'breadcrumb_setting',
    'default'  => '1',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'securesofts'),
      'off' => esc_html__('Disable', 'securesofts'),
    ],
  ];

  return $fields;
}
add_filter('kirki/fields', '_breadcrumb_setting_fields');

/*
Header Social
*/
function _header_blog_fields($fields) {

  $fields[] = [
    'type'     => 'text',
    'settings' => 'breadcrumb_blog_title',
    'label'    => esc_html__('Blog Page Title', 'securesofts'),
    'section'  => 'blog_setting',
    'default'  => esc_html__('Our <span>Blogs</span>', 'securesofts'),
    'priority' => 10,
  ];
  $fields[] = [
    'type'     => 'textarea',
    'settings' => 'breadcrumb_blog_details',
    'label'    => esc_html__('Blog Page Details', 'securesofts'),
    'section'  => 'blog_setting',
    'default'  => esc_html__('Please take sometime and check some of our latest projects to know the type of quality work we provided to our clients.', 'securesofts'),
    'priority' => 10,
  ];
  $fields[] = [
    'type'        => 'image',
    'settings'    => 'breadcrumb_blog_image',
    'label'       => esc_html__('Breadcrumb Image', 'securesofts'),
    'section'     => 'blog_setting',
  ];
  return $fields;
}
add_filter('kirki/fields', '_header_blog_fields');

function _cta_setting_fields($fields) {

  $fields[] = [
    'type'     => 'textarea',
    'settings' => 'cta_title',
    'label'    => esc_html__('CTA Title', 'securesofts'),
    'section'  => 'cta_setting',
    'default'  => esc_html__('Get your Website Designs, Prototypes & Mockups Converted to Exceptional HTML or WordPress Code Without
    the High Costs!', 'securesofts'),
    'priority' => 10,
  ];
  $fields[] = [
    'type'     => 'textarea',
    'settings' => 'cta_subtitle',
    'label'    => esc_html__('CTA Subtitle', 'securesofts'),
    'section'  => 'cta_setting',
    'default'  => esc_html__('Send us your design files to get a quick quote today.', 'securesofts'),
    'priority' => 10,
  ];
  $fields[] = [
    'type'     => 'text',
    'settings' => 'cta_btn_text',
    'label'    => esc_html__('CTA Button Text', 'securesofts'),
    'section'  => 'cta_setting',
    'default'  => esc_html__('Get a Free Quote', 'securesofts'),
    'priority' => 10,
  ];
  $fields[] = [
    'type'     => 'text',
    'settings' => 'cta_btn_link',
    'label'    => esc_html__('CTA Button Link', 'securesofts'),
    'section'  => 'cta_setting',
    'default'  => esc_html__('#', 'securesofts'),
    'priority' => 10,
  ];

  return $fields;
}
add_filter('kirki/fields', '_cta_setting_fields');

// socials
function _socials_fields($fields) {
  // footer socials
  $fields[] = [
    'type'     => 'switch',
    'settings' => 'socials_switcher',
    'label'    => esc_html__('Socials', 'securesofts'),
    'description'    => esc_html__('Show footer socials.', 'securesofts'),
    'section'  => 'socials',
    'default'  => '0',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'securesofts'),
      'off' => esc_html__('Disable', 'securesofts'),
    ],
  ];

  // facebook
  $fields[] = [
    'type'     => 'text',
    'settings' => 'fb_link',
    'label'    => esc_html__('Facebook Link', 'securesofts'),
    'section'  => 'socials',
    'default'  => esc_html__('https://facebook.com/', 'securesofts'),
    'priority' => 10,
    'active_callback' => [
      [
        'setting'  => 'socials_switcher',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];
  // twitter
  $fields[] = [
    'type'     => 'text',
    'settings' => 'twitter_link',
    'label'    => esc_html__('Twitter Link', 'securesofts'),
    'section'  => 'socials',
    'default'  => esc_html__('https://twitter.com/', 'securesofts'),
    'priority' => 10,
    'active_callback' => [
      [
        'setting'  => 'socials_switcher',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];
  // linkedin
  $fields[] = [
    'type'     => 'text',
    'settings' => 'linkedin_link',
    'label'    => esc_html__('Linkedin Link', 'securesofts'),
    'section'  => 'socials',
    'default'  => esc_html__('https://linkedin.com/', 'securesofts'),
    'priority' => 10,
    'active_callback' => [
      [
        'setting'  => 'socials_switcher',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];
  // instagram
  $fields[] = [
    'type'     => 'text',
    'settings' => 'linkedin_link',
    'label'    => esc_html__('Instagram Link', 'securesofts'),
    'section'  => 'socials',
    'default'  => esc_html__('https://instagram.com/', 'securesofts'),
    'priority' => 10,
    'active_callback' => [
      [
        'setting'  => 'socials_switcher',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];
  // youtube
  $fields[] = [
    'type'     => 'text',
    'settings' => 'youtube_link',
    'label'    => esc_html__('Youtube Link', 'securesofts'),
    'section'  => 'socials',
    'default'  => esc_html__('https://youtube.com/', 'securesofts'),
    'priority' => 10,
    'active_callback' => [
      [
        'setting'  => 'socials_switcher',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];

  return $fields;
}
add_filter('kirki/fields', '_socials_fields');
/*
Footer
*/
function _footer_setting_fields($fields) {

  $fields[] = [
    'type'     => 'textarea',
    'settings' => 'footer_info',
    'label'    => esc_html__('Footer Info', 'securesofts'),
    'section'  => 'footer_setting',
    'default'  => esc_html__('White Labelled WordPress development services for Digital & Creative Agencies.', 'securesofts'),
    'priority' => 10,
  ];
  $fields[] = [
    'type'     => 'textarea',
    'settings' => 'footer_address',
    'label'    => esc_html__('Footer Address', 'securesofts'),
    'section'  => 'footer_setting',
    'default'  => esc_html__('House: 541/4, Road: 12, Baridhara DOHS, Gulshan, Dhaka-1212', 'securesofts'),
    'priority' => 10,
  ];
  $fields[] = [
    'type'     => 'textarea',
    'settings' => 'footer_phone',
    'label'    => esc_html__('Footer Phone', 'securesofts'),
    'section'  => 'footer_setting',
    'default'  => esc_html__('+88 01320 583 695', 'securesofts'),
    'priority' => 10,
  ];
  $fields[] = [
    'type'     => 'textarea',
    'settings' => 'footer_email',
    'label'    => esc_html__('Footer Email', 'securesofts'),
    'section'  => 'footer_setting',
    'default'  => esc_html__('contact@securesofts.com', 'securesofts'),
    'priority' => 10,
  ];

  $fields[] = [
    'type'     => 'textarea',
    'settings' => 'securesofts_copyright',
    'label'    => esc_html__('Copy Right', 'securesofts'),
    'section'  => 'footer_setting',
    'default'  => esc_html__('Copyright &copy; 2023 <a href="https://securesofts.com" target="_blank">SecureSoft</a> | All Rights Reserved', 'securesofts'),
    'priority' => 10,
  ];

  return $fields;
}
add_filter('kirki/fields', '_footer_setting_fields');


// 404
function securesofts_404_fields($fields) {
  // 404 settings
  $fields[] = [
    'type'        => 'image',
    'settings'    => 'securesofts_404_bg',
    'label'       => esc_html__('404 Image.', 'securesofts'),
    'description' => esc_html__('404 Image.', 'securesofts'),
    'section'     => '404_page',
  ];
  $fields[] = [
    'type'     => 'text',
    'settings' => 'securesofts_error_title',
    'label'    => esc_html__('Not Found Title', 'securesofts'),
    'section'  => '404_page',
    'default'  => esc_html__('Page not found', 'securesofts'),
    'priority' => 10,
  ];
  $fields[] = [
    'type'     => 'textarea',
    'settings' => 'securesofts_error_desc',
    'label'    => esc_html__('404 Description Text', 'securesofts'),
    'section'  => '404_page',
    'default'  => esc_html__('Oops! The page you are looking for does not exist. It might have been moved or deleted', 'securesofts'),
    'priority' => 10,
  ];
  $fields[] = [
    'type'     => 'text',
    'settings' => 'securesofts_error_link_text',
    'label'    => esc_html__('404 Link Text', 'securesofts'),
    'section'  => '404_page',
    'default'  => esc_html__('Back To Home', 'securesofts'),
    'priority' => 10,
  ];
  return $fields;
}
add_filter('kirki/fields', 'securesofts_404_fields');


/**
 * This is a short hand function for getting setting value from customizer
 *
 * @param string $name
 *
 * @return bool|string
 */
function Securesofts_Theme_option($name) {
  $value = '';
  if (class_exists('securesofts')) {
    $value = Kirki::get_option(securesofts_get_theme(), $name);
  }

  return apply_filters('Securesofts_Theme_option', $value, $name);
}

/**
 * Get config ID
 *
 * @return string
 */
function securesofts_get_theme() {
  return 'securesofts';
}
