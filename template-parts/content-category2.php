<article class="galery-item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a class="post-link" href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(''); ?>

            <?php
                the_title('<h3 class="entry-title">', '</h3>');
                the_content();
            ?>


            <?php
            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', '_s'),
                'after' => '</div>',
            ));
            ?>
    </a>

</article><!-- #post-## -->