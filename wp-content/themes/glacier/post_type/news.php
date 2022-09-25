<?php


add_action('init', 'reg_project_template'); // register post type

function reg_project_template()
{
    $labels = array
    (
        'name' => 'Новини',
        'singular_name' => 'Новина',
        'add_new' => 'Створити нову',
        'add_new_item' => 'Створити нову',
        'edit_item' => 'Редагувати новину',
        'new_item' => 'Нова новина',
        'all_items' => 'Всі новини',
        'view_item' => 'Оглянути',
        'search_items' => 'Пошук',
        'not_found' => 'Не знайдено',
        'not_found_in_trash' => 'Новини в корзині не знайдено',
        'menu_name' => 'Новини'
    );
    $args = array
    (
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'has_archive' => false,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-excerpt-view',
        'menu_position' => 10,
        'publicly_queryable' => true,
        'supports' 				=> array( 'title','thumbnail', 'custom-fields', 'editor', ),
    );
    register_post_type('news', $args);
}
