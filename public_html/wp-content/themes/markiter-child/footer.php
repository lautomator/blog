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
                    __( '&copy; Copyright %d %s. All rights reserved.', 'markiter' ), date('Y'), 'John Merigliano'
                )
            );
            ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
