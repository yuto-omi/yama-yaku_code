<div class="pagenation">
    <?php
    $big = 9999999999;
    $arg = array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'current' => max(1, get_query_var('paged')),
        'total'   => $the_query->max_num_pages,
        'prev_text' => '',
        'next_text' => '',
    );
    echo paginate_links($arg);
    ?>
</div><!-- /pagenation -->