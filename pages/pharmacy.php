<?php
/*
* Template Name: 薬局を探す
* Template Post Type: page
*/
?>
<?php get_header() ?>
<main class="store">
    <h2>薬局を探す</h2>
    <ul>
        <li>
            <?php
            $terms = get_terms('area'); // タクソノミースラッグを指定
            foreach ($terms as $term) {
                if ($term->name == "下関市") {
                    echo '<p><a href="' . get_term_link($term) . '">' . $term->name . '（' . $term->count . '）</a></p>';
                }
            }
            ?>
        </li>
    </ul>
</main>
<?php get_footer(); ?>