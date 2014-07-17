<?php

function uro_setup() {
    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(array(
        'primary' => __('Primary Navigation', 'uro'),
        'secondary' => __('Secondary Navigation', 'uro')
    ));

    // This theme uses a custom image size for featured images, displayed on "standard" posts.
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'uro_setup');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Home right sidebar',
		'id' => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	));
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
