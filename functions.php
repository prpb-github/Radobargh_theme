<?php
function add_theme_scripts(){
    wp_enqueue_style('icon-bootstrap','https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', array(), false,'all');
    wp_enqueue_style('style', get_stylesheet_uri(), array(), false,'all');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/script/bootstrap.js', array('jquery'), false, true);
    wp_enqueue_style('script_bootstrap', get_template_directory_uri().'/style/bootstrap.css', array(), false,'all');
    wp_enqueue_script('search_type2', get_template_directory_uri().'/script/search-type2.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts','add_theme_scripts');

function register_my_menus() {
    register_nav_menus(
        array(
           'header-menu' => __('header-menu'),
        )
    );
}
add_action( 'init', 'register_my_menus' );

function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

require_once 'elementor/elements.php';
require_once 'customize/customize.php';
?>
