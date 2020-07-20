<?php

function addtnl_markiter_setup() {
    add_theme_support( 'post-thumbnails' );

    // add more, if needed (see: https://developer.wordpress.org/reference/functions/add_theme_support/)
}

add_action( 'after_setup_theme', 'addtnl_markiter_setup' );

