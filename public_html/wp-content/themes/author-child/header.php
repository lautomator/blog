<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <?php wp_head(); ?>

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/ship-x-icon.png">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56241017-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-56241017-2');
    </script>

</head>

<body id="<?php print get_stylesheet(); ?>" <?php body_class(); ?>>
    <?php do_action( 'body_top' ); ?>
    <a class="skip-content" href="#main"><?php _e( 'Skip to content', 'author' ); ?></a>
        <div id="overflow-container" class="overflow-container">
            <div class="max-width">
                <div id="main-sidebar" class="main-sidebar">
                    <?php do_action( 'before_main_sidebar' ); ?>
                    <header class="site-header" id="site-header" role="banner">
                        <div id="title-container" class="title-container">
                            <div id="site-avatar" class="site-avatar" style="background-image: url('<?php echo home_url('/'); ?>wp-content/uploads/2020/06/john-merigliano-headshot.jpg')" title="A Ship Arriving Too Late avatar"></div>
                            <div class="container">
                                <?php get_template_part( 'logo' ) ?>
                                <?php
                                if ( get_bloginfo( 'description' ) ) {
                                    echo '<p class="tagline">' . esc_html( get_bloginfo( "description" ) ) . '</p>';
                                } ?>
                            </div>
                        </div>
                        <button id="toggle-navigation" class="toggle-navigation" aria-expanded="false">
                            <span class="screen-reader-text"><?php _e( 'open primary menu', 'author' ); ?></span>
                            <i class="fas fa-bars"></i>
                        </button>
                        <?php ct_author_social_icons_output(); ?>
                        <?php get_template_part( 'menu', 'primary' ); ?>
                    </header>
                    <?php do_action( 'after_header' ); ?>
                    <?php get_sidebar( 'primary' ); ?>
                    <?php do_action( 'after_sidebar' ); ?>
                </div>
                <?php do_action( 'before_main' ); ?>
                <section id="main" class="main" role="main">
                    <?php do_action( 'main_top' );
                    if ( function_exists( 'yoast_breadcrumb' ) ) {
                        yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
                    }