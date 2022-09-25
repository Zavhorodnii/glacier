<?php
require_once 'options/init.php';
require_once 'post_type/init.php';
require_once 'post_fields/init.php';
require_once 'ajax/ajax.php';


add_theme_support( 'title-tag' );

function theme_builder() {
    wp_enqueue_style('font', get_template_directory_uri() . '/libs/swiper/swiper.css', 1.0);
    wp_enqueue_style('css', get_template_directory_uri() . '/css/style.css', 1.0);
    wp_enqueue_style('v_style', get_template_directory_uri() . '/css/v_style.css', 1.0);
}
//
function footer_scripts(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/libs/jquery.js');
    wp_enqueue_script('jquery_mask', get_template_directory_uri() . '/libs/jquery.mask.min.js');
    wp_enqueue_script('simpleParallax', get_template_directory_uri() . '/libs/simpleParallax.min.js');
    wp_enqueue_script('ScrollTrigger', get_template_directory_uri() . '/libs/ScrollTrigger.min.js');
    wp_enqueue_script('swiper', get_template_directory_uri() . '/libs/swiper/swiper.min.js');
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');
    wp_enqueue_script('v_script', get_template_directory_uri() . '/js/v_script.js');
}
add_action('get_footer', 'footer_scripts', 50);
//
add_action('wp_enqueue_scripts', 'theme_builder');

// menus
register_nav_menus([
  'nav_main' => __('Menu principal'),
  'nav_footer' => __('Menu footer'),
]);
