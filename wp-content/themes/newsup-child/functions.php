<?php

function wittebrug_enqueue_styles()
{
    $bootstrap = 'bootstrap';
    $bootstrap_smartmenus = 'smartmenus';
    $newsup_style = 'newsup-style';
    $newsup_default = 'newsup-default';
    $newsup_fonts = 'newsup-fonts';
    $parent_style = 'parent-style';
    $child_style = 'child-style';
    $fontawesome_5 = 'font-awesome-5-all';
    $fontawesome_4 = 'font-awesome-4-shim';
    $owl_carousel = 'owl-carousel';

    wp_register_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_register_style($child_style,
        get_template_directory_uri() . '/style.css',
        array($parent_style, $bootstrap, $newsup_default, $newsup_fonts),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style($child_style);
}

add_action('wp_enqueue_scripts', 'wittebrug_enqueue_styles');
