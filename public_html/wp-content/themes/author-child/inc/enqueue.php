<?php

add_action('wp_enqueue_scripts', 'author_child_enqueue_styles');
function author_child_enqueue_styles() {
    $parenthandle = 'parent-style';
    $theme = wp_get_theme();

    if (ENV === 'development') {
        $ver = random_int(111, 99999); // dev only
    } else {
        $ver = '2020-06-24';
    }

    wp_enqueue_style($parenthandle, get_template_directory_uri() . '/style.css',
        array(),
        $theme->parent()->get('Version')
    );
    wp_enqueue_style('child-style', get_stylesheet_uri(),
        array($parenthandle),
        $ver
    );
}