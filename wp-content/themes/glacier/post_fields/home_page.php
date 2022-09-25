<?php

acf_add_local_field_group
(
    array
    (
        'key' => 'home_page_group',
        'title' => 'Site options',
        'menu_order' => 10,
        'fields' => array
        (
            array
            (
                'key'               => 'home_page_group_image_field',
                'label'             => 'Зображення',
                'name'              => 'video_image',
                'type' 				=> 'image',
                'require'			=> 1,
                'return_format'     => 'array',
            ),
            array
            (
                'key'               => 'home_page_group_file_video_1_field',
                'label'             => 'Відео',
                'name'              => 'file_video',
                'type' 				=> 'file',
                'require'			=> 1,
                'return_format'     => 'array',
            ),
            array
            (
                'key'               => 'home_page_group_file_video_2_field',
                'label'             => 'Відео 2',
                'name'              => 'file_video_2',
                'type' 				=> 'file',
                'require'			=> 1,
                'return_format'     => 'array',
            ),
            array
            (
                'key'               => 'home_page_group_file_title_field',
                'label'             => 'Зоголовок',
                'name'              => 'main_title',
                'instructions'      => htmlspecialchars('<br> - перенос на наступну строку,  <span>виділення червоним</span>'),
                'type' 				=> 'text',
                'require'			=> 0,
            ),
            array
            (
                'key'               => 'home_page_group_block_2_field',
                'label'             => 'Block 2',
                'name'              => 'block_2',
                'type' 				=> 'group',
                'require'			=> 0,
            ),
            array
            (
                'key'               => 'home_page_group_block_3_field',
                'label'             => 'Студія',
                'name'              => 'block_3',
                'type' 				=> 'group',
                'require'			=> 0,
            ),
            array
            (
                'key'               => 'home_page_group_block_3_field',
                'label'             => 'Апартаменти',
                'name'              => 'options_repeater_block',
                'type' 				=> 'repeater',
                'layout'			=> 'block',
                'sub_fields' 		=> array
                (
                    array
                    (
                        'button_label'	=> 'Add section',
                    ),
                ),
                'collapsed'			=> 'category_grid_title_field',
            ),
            array
            (
                'key'               => 'home_page_group_block_4_field',
                'label'             => 'Блок 4',
                'name'              => 'block_4',
                'type' 				=> 'group',
                'require'			=> 0,
            ),
            array
            (
                'key'               => 'home_page_group_block_5_field',
                'label'             => 'Блок 5',
                'name'              => 'block_5',
                'type' 				=> 'group',
                'require'			=> 0,
            ),
            array
            (
                'key'               => 'home_page_group_block_6_field',
                'label'             => 'Про забудовника',
                'name'              => 'block_6',
                'type' 				=> 'group',
                'require'			=> 0,
            ),
            array
            (
                'key'               => 'home_page_group_block_7_field',
                'label'             => 'Проекти',
                'name'              => 'block_7',
                'type' 				=> 'group',
                'require'			=> 0,
            ),
            array
            (
                'key'               => 'home_page_group_block_8_field',
                'label'             => 'Документація',
                'name'              => 'block_8',
                'type' 				=> 'group',
                'require'			=> 0,
            ),
            array
            (
                'key'               => 'home_page_group_block_9_field',
                'label'             => 'Про комплекс',
                'name'              => 'block_9',
                'type' 				=> 'group',
                'require'			=> 0,
            ),
            array
            (
                'key'               => 'home_page_group_block_10_field',
                'label'             => 'Відео',
                'name'              => 'block_10',
                'type' 				=> 'group',
                'require'			=> 0,
            ),
            array
            (
                'key'               => 'home_page_group_block_11_field',
                'label'             => 'Банер 1',
                'name'              => 'block_11',
                'type' 				=> 'group',
                'require'			=> 0,
            ),
            array
            (
                'key'               => 'home_page_group_block_12_field',
                'label'             => 'Банер 2',
                'name'              => 'block_12',
                'type' 				=> 'group',
                'require'			=> 0,
            ),
            array
            (
                'key'               => 'home_page_group_block_13_field',
                'label'             => 'Банер 3',
                'name'              => 'block_13',
                'type' 				=> 'group',
                'require'			=> 0,
            ),
            array
            (
                'key'               => 'home_page_group_block_14_field',
                'label'             => 'Банер 4',
                'name'              => 'block_14',
                'type' 				=> 'group',
                'require'			=> 0,
            ),
            array
            (
                'key'               => 'home_page_group_block_15_field',
                'label'             => 'Новини та відео',
                'name'              => 'block_15',
                'type' 				=> 'group',
                'require'			=> 0,
            ),
            array
            (
                'key'               => 'home_page_group_block_16_field',
                'label'             => 'Слайдер',
                'name'              => 'block_16',
                'type' 				=> 'group',
                'require'			=> 0,
            ),
        ),
        'location' => array
        (
            array
            (
                array
                (
                    'param' => 'page',
                    'operator' => '==',
                    'value' => '6',
                ),
            ),
        )
    )
);


acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_2_title_field',
        'label'             => 'Заголовок',
        'name'              => 'title',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_2_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_2_title_field',
        'label'             => 'Заголовок',
        'name'              => 'title',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_3_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_reverse_block_field',
        'label'             => 'Зворотній блок',
        'name'              => 'reverse_block',
        'type' 				=> 'true_false',
        'parent'            => 'home_page_group_block_3_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_3_repeater_field',
        'label'             => 'Характеристики',
        'name'              => 'options_repeater',
        'type' 				=> 'repeater',
        'layout'			=> 'block',
        'parent'            => 'home_page_group_block_3_field',
        'sub_fields' 		=> array
        (
            array
            (
                'button_label'	=> 'Add section',
            ),
        ),
        'collapsed'			=> 'category_grid_title_field',
    ),
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_3_repeater_field_field',
        'label'             => 'Заголовок',
        'name'              => 'title',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_3_repeater_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_3_repeater_value_field',
        'label'             => 'Значення',
        'name'              => 'value',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_3_repeater_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_3_text_field',
        'label'             => 'Опис',
        'name'              => 'description',
        'type' 				=> 'wysiwyg',
        'parent'            => 'home_page_group_block_3_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_3_image_field',
        'label'             => 'Hover icon',
        'name'              => 'image',
        'type' 				=> 'image',
        'parent'            => 'home_page_group_block_3_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_3_field_block_button_field',
        'label'             => 'Button',
        'name'              => 'button',
        'type' 				=> 'group',
        'parent'            => 'home_page_group_block_3_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_3_field_block_button_title_field',
        'label'             => 'Назва',
        'name'              => 'title',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_3_field_block_button_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_3_field_block_button_link_field',
        'label'             => 'Адреса',
        'name'              => 'link',
        'type' 				=> 'text',
        'default_value'     => '#',
        'parent'            => 'home_page_group_block_3_field_block_button_field',
        'require'			=> 0,
    )
);


acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_4_title_4_field',
        'label'             => 'Заголовок',
        'name'              => 'title',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_4_field',
        'require'			=> 0,
    )
);

acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_5_image_field',
        'label'             => 'Зображення',
        'name'              => 'image',
        'type' 				=> 'image',
        'parent'            => 'home_page_group_block_5_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_5_description_field',
        'label'             => 'Опис',
        'name'              => 'description',
        'type' 				=> 'wysiwyg',
        'parent'            => 'home_page_group_block_5_field',
        'require'			=> 0,
    )
);


acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_6_title_field',
        'label'             => 'Заголовок блоку',
        'name'              => 'title',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_6_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_6_logo_field',
        'label'             => 'Лого',
        'name'              => 'logo',
        'type' 				=> 'image',
        'parent'            => 'home_page_group_block_6_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_6_image_1_field',
        'label'             => 'Зображення 1',
        'name'              => 'image_1',
        'type' 				=> 'image',
        'parent'            => 'home_page_group_block_6_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_6_image_2_field',
        'label'             => 'Зображення 2',
        'name'              => 'image_2',
        'type' 				=> 'image',
        'parent'            => 'home_page_group_block_6_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_6_title_2_field',
        'label'             => 'Заголовок опису',
        'name'              => 'title_2',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_6_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_6_description_field',
        'label'             => 'Опис',
        'name'              => 'description',
        'type' 				=> 'wysiwyg',
        'parent'            => 'home_page_group_block_6_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_projects_list_field',
        'label'             => 'Проекти',
        'name'              => 'projects_list',
        'type' 				=> 'relationship',
        'post_type'         => 'project',
        'parent'            => 'home_page_group_block_7_field',
        'require'			=> 0,
        'filters'           => []
    ),
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_7_block_button_field',
        'label'             => 'Button',
        'name'              => 'button',
        'type' 				=> 'group',
        'parent'            => 'home_page_group_block_7_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_7_button_title_field',
        'label'             => 'Назва',
        'name'              => 'title',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_7_block_button_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_7_button_link_field',
        'label'             => 'Адреса',
        'name'              => 'link',
        'type' 				=> 'text',
        'default_value'     => '#',
        'parent'            => 'home_page_group_block_7_block_button_field',
        'require'			=> 0,
    )
);

acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_8_hide_field',
        'label'             => 'Приховати блок',
        'name'              => 'hide_block',
        'type' 				=> 'true_false',
        'parent'            => 'home_page_group_block_8_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_8_title_field',
        'label'             => 'Заголовок',
        'name'              => 'title',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_8_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_8_description_field',
        'label'             => 'Опис',
        'name'              => 'description',
        'type' 				=> 'wysiwyg',
        'parent'            => 'home_page_group_block_8_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_8_image_field',
        'label'             => 'Зображення ',
        'name'              => 'image_1',
        'type' 				=> 'image',
        'parent'            => 'home_page_group_block_8_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_8_block_button_field',
        'label'             => 'Button',
        'name'              => 'button',
        'type' 				=> 'group',
        'parent'            => 'home_page_group_block_8_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_8_button_title_field',
        'label'             => 'Назва',
        'name'              => 'title',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_8_block_button_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_8_button_link_field',
        'label'             => 'Адреса',
        'name'              => 'link',
        'type' 				=> 'text',
        'default_value'     => '#',
        'parent'            => 'home_page_group_block_8_block_button_field',
        'require'			=> 0,
    )
);
//------------------
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_9_title_field',
        'label'             => 'Заголовок',
        'name'              => 'title',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_9_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_9_image_field',
        'label'             => 'Зображення',
        'name'              => 'image',
        'type' 				=> 'image',
        'parent'            => 'home_page_group_block_9_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_9_title_description_field',
        'label'             => 'Заголовок опису',
        'name'              => 'title_description',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_9_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_9_description_field',
        'label'             => 'Опис',
        'name'              => 'description',
        'type' 				=> 'wysiwyg',
        'parent'            => 'home_page_group_block_9_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_9_block_button_field',
        'label'             => 'Button',
        'name'              => 'button',
        'type' 				=> 'group',
        'parent'            => 'home_page_group_block_9_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_9_button_title_field',
        'label'             => 'Назва',
        'name'              => 'title',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_9_block_button_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_9_button_link_field',
        'label'             => 'Адреса',
        'name'              => 'link',
        'type' 				=> 'text',
        'default_value'     => '#',
        'parent'            => 'home_page_group_block_9_block_button_field',
        'require'			=> 0,
    )
);
//----------

acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_10_video_field',
        'label'             => 'Адреса відео',
        'name'              => 'link',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_10_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_10_title_field',
        'label'             => 'Заголовок опису',
        'name'              => 'title',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_10_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_10_description_field',
        'label'             => 'Опис',
        'name'              => 'description',
        'type' 				=> 'wysiwyg',
        'parent'            => 'home_page_group_block_10_field',
        'require'			=> 0,
    )
);
//------------

acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_11_image_field',
        'label'             => 'Лого',
        'name'              => 'logo',
        'type' 				=> 'image',
        'parent'            => 'home_page_group_block_11_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_11_image_1_field',
        'label'             => 'Зображення 1',
        'name'              => 'image_1',
        'type' 				=> 'image',
        'parent'            => 'home_page_group_block_11_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_11_image_2_field',
        'label'             => 'Зображення 2',
        'name'              => 'image_2',
        'type' 				=> 'image',
        'parent'            => 'home_page_group_block_11_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_11_image_3_field',
        'label'             => 'Зображення 3',
        'name'              => 'image_3',
        'type' 				=> 'image',
        'parent'            => 'home_page_group_block_11_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_11_title_line_1_field',
        'label'             => 'Заголовок опису 1',
        'name'              => 'title_line_1',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_11_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_11_title_line_2_field',
        'label'             => 'Заголовок опису 2',
        'name'              => 'title_line_2',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_11_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_11_title_line_3_field',
        'label'             => 'Заголовок опису 3',
        'name'              => 'title_line_3',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_11_field',
        'require'			=> 0,
    )
);
//------------

acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_12_image_1_field',
        'label'             => 'Зображення 1',
        'name'              => 'image_1',
        'type' 				=> 'image',
        'parent'            => 'home_page_group_block_12_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_12_image_2_field',
        'label'             => 'Зображення 2',
        'name'              => 'image_2',
        'type' 				=> 'image',
        'parent'            => 'home_page_group_block_12_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_12_image_3_field',
        'label'             => 'Зображення 3',
        'name'              => 'image_3',
        'type' 				=> 'image',
        'parent'            => 'home_page_group_block_12_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_12_title_line_1_field',
        'label'             => 'Заголовок опису 1',
        'name'              => 'title_line_1',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_12_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_12_title_line_2_field',
        'label'             => 'Заголовок опису 2',
        'name'              => 'title_line_2',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_12_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_12_title_line_3_field',
        'label'             => 'Заголовок опису 3',
        'name'              => 'title_line_3',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_12_field',
        'require'			=> 0,
    )
);
//----------------


acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_13_image_1_field',
        'label'             => 'Зображення 1',
        'name'              => 'image_1',
        'type' 				=> 'image',
        'parent'            => 'home_page_group_block_13_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_13_image_2_field',
        'label'             => 'Зображення 2',
        'name'              => 'image_2',
        'type' 				=> 'image',
        'parent'            => 'home_page_group_block_13_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_13_image_3_field',
        'label'             => 'Зображення 3',
        'name'              => 'image_3',
        'type' 				=> 'image',
        'parent'            => 'home_page_group_block_13_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_13_title_line_1_field',
        'label'             => 'Заголовок опису 1',
        'name'              => 'title_line_1',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_13_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_13_title_line_2_field',
        'label'             => 'Заголовок опису 2',
        'name'              => 'title_line_2',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_13_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_13_title_line_3_field',
        'label'             => 'Заголовок опису 3',
        'name'              => 'title_line_3',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_13_field',
        'require'			=> 0,
    )
);
//-----------------

acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_14_image_1_field',
        'label'             => 'Банер',
        'name'              => 'banner',
        'type' 				=> 'image',
        'parent'            => 'home_page_group_block_14_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);
//-------------------

acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_title_field',
        'label'             => 'Заголовок блоку',
        'name'              => 'title',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_15_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_news_1_field',
        'label'             => 'Новини та відео 1',
        'name'              => 'block_15_1',
        'type' 				=> 'group',
        'parent'            => 'home_page_group_block_15_field',
        'require'			=> 0,
    ),
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_title_news_1_field',
        'label'             => 'Назва',
        'name'              => 'title',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_15_news_1_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_link_news_1_field',
        'label'             => 'Адреса',
        'name'              => 'link',
        'type' 				=> 'text',
        'default_value'     => '#',
        'parent'            => 'home_page_group_block_15_news_1_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_image_news_1_field',
        'label'             => 'Банер',
        'name'              => 'banner',
        'type' 				=> 'image',
        'parent'            => 'home_page_group_block_15_news_1_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);

acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_news_2_field',
        'label'             => 'Новини та відео 2',
        'name'              => 'block_15_2',
        'type' 				=> 'group',
        'parent'            => 'home_page_group_block_15_field',
        'require'			=> 0,
    ),
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_title_news_2_field',
        'label'             => 'Назва',
        'name'              => 'title',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_15_news_2_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_link_news_2_field',
        'label'             => 'Адреса',
        'name'              => 'link',
        'type' 				=> 'text',
        'default_value'     => '#',
        'parent'            => 'home_page_group_block_15_news_2_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_image_news_2_field',
        'label'             => 'Банер',
        'name'              => 'banner',
        'type' 				=> 'image',
        'parent'            => 'home_page_group_block_15_news_2_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);


acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_news_3_field',
        'label'             => 'Новини та відео 3',
        'name'              => 'block_15_3',
        'type' 				=> 'group',
        'parent'            => 'home_page_group_block_15_field',
        'require'			=> 0,
    ),
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_title_news_3_field',
        'label'             => 'Назва',
        'name'              => 'title',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_15_news_3_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_link_news_3_field',
        'label'             => 'Адреса',
        'name'              => 'link',
        'type' 				=> 'text',
        'default_value'     => '#',
        'parent'            => 'home_page_group_block_15_news_3_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_image_news_3_field',
        'label'             => 'Банер',
        'name'              => 'banner',
        'type' 				=> 'image',
        'parent'            => 'home_page_group_block_15_news_3_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);
//-----------------

acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_news_4_field',
        'label'             => 'Новини та відео 4',
        'name'              => 'block_15_4',
        'type' 				=> 'group',
        'parent'            => 'home_page_group_block_15_field',
        'require'			=> 0,
    ),
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_title_news_4_field',
        'label'             => 'Назва',
        'name'              => 'title',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_15_news_4_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_link_news_4_field',
        'label'             => 'Адреса',
        'name'              => 'link',
        'type' 				=> 'text',
        'default_value'     => '#',
        'parent'            => 'home_page_group_block_15_news_4_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_image_news_4_field',
        'label'             => 'Банер',
        'name'              => 'banner',
        'type' 				=> 'image',
        'parent'            => 'home_page_group_block_15_news_4_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);
//-----------------

acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_news_5_field',
        'label'             => 'Новини та відео 5',
        'name'              => 'block_15_5',
        'type' 				=> 'group',
        'parent'            => 'home_page_group_block_15_field',
        'require'			=> 0,
    ),
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_title_news_5_field',
        'label'             => 'Назва',
        'name'              => 'title',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_15_news_5_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_link_news_5_field',
        'label'             => 'Адреса',
        'name'              => 'link',
        'type' 				=> 'text',
        'default_value'     => '#',
        'parent'            => 'home_page_group_block_15_news_5_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_image_news_5_field',
        'label'             => 'Банер',
        'name'              => 'banner',
        'type' 				=> 'image',
        'parent'            => 'home_page_group_block_15_news_5_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);
//-----------------

acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_news_6_field',
        'label'             => 'Новини та відео 6',
        'name'              => 'block_15_6',
        'type' 				=> 'group',
        'parent'            => 'home_page_group_block_15_field',
        'require'			=> 0,
    ),
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_title_news_6_field',
        'label'             => 'Назва',
        'name'              => 'title',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_15_news_6_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_link_news_6_field',
        'label'             => 'Адреса',
        'name'              => 'link',
        'type' 				=> 'text',
        'default_value'     => '#',
        'parent'            => 'home_page_group_block_15_news_6_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_image_news_6_field',
        'label'             => 'Банер',
        'name'              => 'banner',
        'type' 				=> 'image',
        'parent'            => 'home_page_group_block_15_news_6_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);

acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_block_button_field',
        'label'             => 'Button',
        'name'              => 'button',
        'type' 				=> 'group',
        'parent'            => 'home_page_group_block_15_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_button_title_field',
        'label'             => 'Назва',
        'name'              => 'title',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_15_block_button_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_15_button_link_field',
        'label'             => 'Адреса',
        'name'              => 'link',
        'type' 				=> 'text',
        'default_value'     => '#',
        'parent'            => 'home_page_group_block_15_block_button_field',
        'require'			=> 0,
    )
);
//-----------------------

acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_16_title_field',
        'label'             => 'Заголовок блоку',
        'name'              => 'title',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_16_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_16_images_field',
        'label'             => 'Зображення',
        'name'              => 'image',
        'type' 				=> 'gallery',
        'parent'            => 'home_page_group_block_16_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'home_page_group_block_16_second_title_field',
        'label'             => 'Текст 2',
        'name'              => 'second_title',
        'type' 				=> 'text',
        'parent'            => 'home_page_group_block_16_field',
        'require'			=> 0,
    )
);

?>