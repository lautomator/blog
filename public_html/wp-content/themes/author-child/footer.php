<?php do_action( 'main_bottom' ); ?>
</section><!-- .main -->
<footer class="site-footer" role="contentinfo">
    <?php do_action( 'footer_top' ); ?>
    <div class="design-credit">
        <span>© <?php echo date('Y'); ?> John Merigliano</span>
    </div>
</footer>
</div><!-- .max-width -->
<?php do_action( 'overflow_bottom' ); ?>
</div><!-- .overflow-container -->
<?php do_action( 'body_bottom' ); ?>
<?php wp_footer(); ?>
</body>
</html>