<?php
/**
 * Default page content template part.
 *
 * @package markiter
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-thumb">
        <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail();
        }

        ?>
    </div>

    <div class="post-caption">
        <?php the_post_thumbnail_caption(); ?>
    </div>

	<?php the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header>' ); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'      => '<nav class="post-nav-links" aria-label="' . esc_attr__( 'Page', 'markiter' ) . '"><span class="label">' . esc_html__( 'Pages: ', 'markiter' ) . '</span>',
				'after'       => '</nav>',
				'before_link' => '<span class="page-numbers">',
				'after_link'  => '</span>',
			)
		);
		?>
	</div>
</article>
