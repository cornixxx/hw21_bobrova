<?php
$args = array(
    'post_type' => 'slides',
);

$slides = new WP_Query($args);

if ($slides->have_posts()): ?>
    <div class="flexslider">
        <ul class="slides">

            <?php while ($slides->have_posts()) : $slides->the_post(); ?>
                <li>
                    <?php the_post_thumbnail('slides') ?>
                    <div class="slide-caption">
                        <?php the_content()  ?>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
<?php endif; ?>
