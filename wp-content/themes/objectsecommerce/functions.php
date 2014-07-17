<?php

function uro_setup() {
    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(array(
        'primary' => __('Primary Navigation', 'uro'),
        'secondary' => __('Secondary Navigation', 'uro')
    ));

    // This theme uses a custom image size for featured images, displayed on "standard" posts.
    add_theme_support('post-thumbnails');
    add_theme_support( 'woocommerce' );
}
add_action('after_setup_theme', 'uro_setup');
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}



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
