<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="date">
        <span class="day"> <?php the_time('j'); ?> </span>
        <span class="month"> <?php the_time('F'); ?> </span>
    </div>
    <div class="article-content">
        <header class="entry-header">
            <div class="post-heading">
                <?php
                if (is_single()) {
                    the_title('<h1 class="entry-title">', '</h1>');
                } else {
                    the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
                }

                if ('post' === get_post_type()) : ?>
                <div class="post-info"> <span class="fa fa-comment"> </span><?php comments_number(); ?> </div>
                <div class="post-info"> <span class="fa fa-folder-open "></span><?php the_category(' ') ?></div>
            </div>

            <?php
            endif; ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php
            the_content(sprintf(
            /* translators: %s: Name of current post. */
                wp_kses(__('Continue reading %s <span class="fa fa-angle-right"></span>', '_s'), array('span' => array('class' => array()))),
                the_title('<span class="screen-reader-text">"', '"</span>', false)
            ));

            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', '_s'),
                'after' => '</div>',
            ));
            ?>
        </div><!-- .entry-content -->
    </div>

</article><!-- #post-## -->
