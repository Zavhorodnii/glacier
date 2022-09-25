<?php


add_action('init', 'reg_project_template'); // register post type

function reg_project_template()
{
    $labels = array
    (
        'name' => 'Проекти',
        'singular_name' => 'Проект',
        'add_new' => 'Створити новий',
        'add_new_item' => 'Створити новий проект',
        'edit_item' => 'Редагувати проект',
        'new_item' => 'Новий проект',
        'all_items' => 'Всі проекти',
        'view_item' => 'Оглянути',
        'search_items' => 'Пошук',
        'not_found' => 'Не знайдено',
        'not_found_in_trash' => 'Проекти в корзині не знайдено',
        'menu_name' => 'Проекти'
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
    register_post_type('project', $args);
}
