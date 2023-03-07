<div class="pagenation">
    <?php
    $args = array(
        'show_all' => false,
        'end_size' => 1,
        'mid_size' => 2,
        'current' => max(1, get_query_var('paged')),
        'prev_text' => '前のページ',
        'next_text' => '次のページ',
    );

    echo paginate_links($args);
    ?>
</div>