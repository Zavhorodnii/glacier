<?php

acf_add_local_field_group
(
    array
    (
        'key' => 'site_options_group',
        'title' => 'Site options',
        'menu_order' => 10,
        'fields' => array
        (
            array
            (
                'key'               => 'site_options_site_options_group_general_field',
                'label'             => 'General',
                'name'              => 'general',
                'type' 				=> 'tab',
            ),
            array
            (
                'key'               => 'site_options_site_options_group_left_logo_field',
                'label'             => 'Left logo',
                'name'              => 'left_logo',
                'type' 				=> 'image',
                'parent'            => 'group_hero_field',
                'require'			=> 1,
                'return_format'     => 'array',
            ),
            array
            (
                'key'               => 'site_options_site_options_group_center_logo_field',
                'label'             => 'Center logo',
                'name'              => 'center_logo',
                'type' 				=> 'image',
                'parent'            => 'group_hero_field',
                'require'			=> 1,
                'return_format'     => 'array',
            ),
            array
            (
                'key'               => 'site_options_site_options_group_footer_logo_field',
                'label'             => 'Footer logo',
                'name'              => 'footer_logo',
                'type' 				=> 'image',
                'parent'            => 'group_hero_field',
                'require'			=> 1,
                'return_format'     => 'array',
            ),
            array
            (
                'key'               => 'site_options_social_repeater_field',
                'label'             => 'Social',
                'name'              => 'social_repeater',
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
                'key'               => 'site_options_group_phone_field',
                'label'             => 'Phone',
                'name'              => 'phone',
                'type' 				=> 'text',
                'require'			=> 0,
            ),
            array
            (
                'key'               => 'site_options_group_email_field',
                'label'             => 'Email',
                'name'              => 'email',
                'type' 				=> 'email',
                'require'			=> 1,
            ),
            array
            (
                'key'               => 'site_options_group_order_email_field',
                'label'             => 'Email для замовлень',
                'name'              => 'mail_for_order',
                'type' 				=> 'email',
                'require'			=> 1,
            ),
            array
            (
                'key'               => 'site_options_work_time_field',
                'label'             => 'Графік роботи',
                'name'              => 'work_time',
                'type' 				=> 'text',
                'require'			=> 0,
            ),
            array
            (
                'key'               => 'site_options_work_google_map_field',
                'label'             => 'Google map',
                'name'              => 'google_map',
                'type' 				=> 'text',
                'require'			=> 0,
            ),
            array
            (
                'key'               => 'home_page_group_block_16_contact_images_field',
                'label'             => 'Контакт зображення',
                'name'              => 'contact_image',
                'type' 				=> 'image',
                'require'			=> 1,
                'return_format'     => 'array',
            ),
            array
            (
                'key'               => 'site_options_group_address_field',
                'instructions'      => htmlspecialchars('Додайте <br> для переноса на наступну строку'),
                'label'             => 'Адреса',
                'name'              => 'address',
                'type' 				=> 'text',
                'require'			=> 0,
            ),
            array
            (
                'key'               => 'site_options_group_header_field',
                'label'             => '404',
                'name'              => 'header',
                'type' 				=> 'tab',
            ),

            array
            (
                'key'               => 'home_page_group_block_404_image_field',
                'label'             => 'Зображення',
                'name'              => 'image_404',
                'type' 				=> 'image',
                'require'			=> 1,
                'return_format'     => 'array',
            ),
            array
            (
                'key'               => 'site_options_group_footer_title_404_field',
                'label'             => 'Заголовок',
                'name'              => 'title_404',
                'type' 				=> 'text',
                'require'			=> 0,
            ),
            array
            (
                'key'               => 'site_options_group_footer_subtitle_404_field',
                'label'             => 'Підзаголовок',
                'name'              => 'subtitle_404',
                'type' 				=> 'text',
                'require'			=> 0,
            ),
            array
            (
                'key'               => 'site_options_group_footer_text_404_field',
                'label'             => 'Текст',
                'name'              => 'text_404',
                'type' 				=> 'text',
                'require'			=> 0,
            ),
        ),
        'location' => array
        (
            array
            (
                array
                (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'site_main_settings_page',
                ),
            ),
        )
    )
);


acf_add_local_field
(
    array
    (
        'key'               => 'site_options_social_repeater_icon_field',
        'label'             => 'Icon',
        'name'              => 'icon',
        'type' 				=> 'image',
        'parent'            => 'site_options_social_repeater_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'site_options_social_repeater_hover_icon_field',
        'label'             => 'Hover icon',
        'name'              => 'hover_icon',
        'type' 				=> 'image',
        'parent'            => 'site_options_social_repeater_field',
        'require'			=> 1,
        'return_format'     => 'array',
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'site_options_social_repeater_link_field',
        'label'             => 'Link',
        'name'              => 'link',
        'type' 				=> 'text',
        'default_value'     => '#',
        'parent'            => 'site_options_social_repeater_field',
        'require'			=> 0,
    )
);
acf_add_local_field
(
    array
    (
        'key'               => 'site_options_social_repeater_title_field',
        'label'             => 'Title',
        'name'              => 'title',
        'type' 				=> 'text',
        'parent'            => 'site_options_social_repeater_field',
        'require'			=> 0,
    )
);

?>