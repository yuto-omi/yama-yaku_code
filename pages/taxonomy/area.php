<?php get_header() ?>
<main class="area">
    <div class="wrap1080">
        <h3 class="titleL line">
            <?php
            $my_terms = get_queried_object();
            echo $my_terms->name . "の薬局一覧";
            ?>
        </h3>
        <?php $postnums = $count = 0 < get_query_var('posts_per_page') ? $wp_query->found_posts : $wp_query->post_count; ?>
        <div class="area__result">検索結果：<span><?php echo $postnums; ?></span>件</div>
        <ul class="area__line">
            <li>地区</li>
            <li>薬局名</li>
            <li>住所</li>
            <li>電話番号</li>
            <li>在宅応需</li>
            <li>その他</li>
        </ul>
        <ul class="area__list">
            <?php
            if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <li class="area__item">
                        <div class="area__item-place">
                            <?php $myfield = scf::get('area');
                            if (!(empty($myfield))) {
                                echo $myfield;
                            } ?>
                        </div>
                        <div class="area__item-title">
                            <?php the_title(); ?>
                        </div>
                        <div class="area__item-address">
                            <?php $myfield = scf::get('address');
                            if (!(empty($myfield))) {
                                echo $myfield;
                            } ?>
                        </div>
                        <div class="area__item-tel">
                            <?php $myfield = scf::get('tel');
                            echo $myfield; ?>
                        </div>
                        <div class="area__item-home">
                            <?php $status = SCF::get('home'); ?>
                            <?php if ($status == 'あり') {
                                echo "〇";
                            } else {
                                echo "✕";
                            } ?>
                        </div>
                        <div class="area__item-another">
                            <a class="hover-opacity" href="<?php the_permalink(); ?>">詳細</a>
                        </div>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
        <?php include(dirname(__FILE__) . '/../../parts/main-loop-pagenation.php'); ?>
    </div>
    <section class="pan">
        <div class="wrap1080">
            <ul>
                <li class="hover-opacity"><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
                <li class="hover-opacity"><a href="<?php echo esc_url(home_url('/search')); ?>">薬局検索</a></li>
                <li> <?php
                        $my_terms = get_queried_object();
                        echo $my_terms->name . "検索結果";
                        ?>
                </li>
            </ul>
        </div>
    </section>
</main>
<?php get_footer(); ?>