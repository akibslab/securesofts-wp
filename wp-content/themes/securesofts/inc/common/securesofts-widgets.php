<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function securesofts_widgets_init() {
    /**
     * blog sidebar
     */
    register_sidebar([
        'name'          => esc_html__('Blog Sidebar', 'securesofts'),
        'id'            => 'blog-sidebar',
        'before_widget' => '<div id="%1$s" class="ss-sidebar__widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="ss-sidebar-widget__head"><h3 class="ss-sidebar-widget__title">',
        'after_title'   => '</h3></div>',
    ]);
}
add_action('widgets_init', 'securesofts_widgets_init');
