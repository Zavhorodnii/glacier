<?php

acf_add_local_field_group
(
    array
    (
        'key' => 'projects_group',
        'title' => 'Site options',
        'menu_order' => 10,
        'fields' => array
        (
            array
            (
                'key'               => 'projects_group_title_field',
                'label'             => 'Зображення проекту',
                'name'              => 'project_image',
                'type' 				=> 'image',
                'require'			=> 1,
                'return_format'     => 'array',
            )
        ),
        'location' => array
        (
            array
            (
                array
                (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'project',
                ),
            ),
        )
    )
);


?>