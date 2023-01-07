<?php

/** Require Nav Walker for Boostrap5 Navbar */
require get_template_directory() . '/inc/bs5-navwalker.php';

/** Require Customizer File */
require get_template_directory() . '/inc/customizer.php';

function owd_enq_styles() {
    wp_enqueue_style( 'main-css', get_template_directory_uri(  ) . '/style.css' );
    wp_enqueue_style('bs5-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css');
    wp_enqueue_script('popperjs', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js');
    wp_enqueue_script('bs5-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'owd_enq_styles');

function owd_sidebars() {
    register_sidebar( array(
        'name' => 'OWD Footer Widget 1',
        'id' => 'owd-footer-widget-1',
        'description' => 'Footer Widget 1',
        'before_widget' => '<div class="col-md-4 text-center">',
        'after_widget' => '</div>'
    ) );

    register_sidebar( array(
        'name' => 'OWD Footer Widget 2',
        'id' => 'owd-footer-widget-2',
        'description' => 'Footer Widget 2',
        'before_widget' => '<div class="col-md-4 text-center">',
        'after_widget' => '</div>'
    ) );

    register_sidebar( array(
        'name' => 'OWD Footer Widget 3',
        'id' => 'owd-footer-widget-3',
        'description' => 'Footer Widget 3',
        'before_widget' => '<div class="col-md-4 text-center">',
        'after_widget' => '</div>'
    ) );
}

add_action('widgets_init', 'owd_sidebars');

function owd_config() {
    register_nav_menu('main-menu', 'Main menu');

    add_theme_support( 'custom-logo', array(
        'height' => 85,
        'width' => 85,
    ));

}

add_action('after_setup_theme', 'owd_config');