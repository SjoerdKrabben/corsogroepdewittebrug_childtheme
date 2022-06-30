<?php

function wittebrug_enqueue_styles()
{
    $parent_style = 'parent-style';
    $child_style = 'child-style';

    wp_register_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_register_style($child_style,
        get_template_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style($child_style);
}

add_action('wp_enqueue_scripts', 'wittebrug_enqueue_styles');
