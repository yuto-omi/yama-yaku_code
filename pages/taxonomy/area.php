<?php get_header() ?>
<?php
if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <li style="margin-top: 20px;">
            <a class="hover-opacity" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>