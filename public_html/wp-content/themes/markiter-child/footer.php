<?php
/**
 * Default footer template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/
 *
 * @package markiter
 */

?>

<footer id="footer" class="site-footer" role="contentinfo">
    <div class="site-footer-wrap">
        <?php if ( has_nav_menu( 'secondary' ) ) : ?>
            <nav id="footer-navigation" class="footer-navigation" role="navigation">
                <?php
                wp_nav_menu(
                    array(
                        'container'      => false,
                        'depth'          => 1,
                        'theme_location' => 'secondary',
                    )
                );
                ?>
            </nav>
        <?php endif; ?>

        <div class="copyright">
            <?php
            echo wp_kses_post(
                sprintf(
                    // translators: %s is for the site title.
                    __( '&copy; copyright %d %s. all rights reserved.', 'markiter' ), date('Y'), 'john merigliano'
                )
            );
            ?>
        </div>
        <div class="copyright">
            <a href="https://twitter.com/<?php echo get_user_meta(1, 'twitter')[0]; ?>" target="_blank">twitter</a> | <a href="<?php echo get_home_url(); ?>/feed/" target="_blank">rss</a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
