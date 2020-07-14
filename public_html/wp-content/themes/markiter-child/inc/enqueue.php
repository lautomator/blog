<?php

add_action('wp_enqueue_scripts', 'markiter_child_enqueue_styles');
function markiter_child_enqueue_styles() {
    $parenthandle = 'markiter-style';
    $theme = wp_get_theme();

    if (ENV === 'development') {
        $ver = random_int(111, 99999); // dev only
    } else {
        $ver = $theme->get('Version');
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