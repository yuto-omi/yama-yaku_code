<?php
/*
* Template Name: 薬局検索
* Template Post Type: page
*/
?>
<?php get_header() ?>
<main class="search">
    <section class="fv">
        <div>
            <span>Search</span>
            <h2 class="pageTitle">薬局検索</h2>
        </div>
    </section>
    <section class="cont1">
        <div class="wrap1080">
            <h3 class="titleL line">山口県内の薬局を探す</h3>
            <div class="search__body">
                <?php echo img("top", "yamaguchiken@×2", "webp", "search__img-yamaguchi", "山口県") ?>
                <div id="abutyou" class="search__item hover-opacity">
                    <?php
                    $terms = get_terms('area');
                    foreach ($terms as $term) {
                        if ($term->name == "阿武町") {
                            echo '<p><a href="' . get_term_link($term) . '">' . $term->name . '</a></p>';
                        }
                    }
                    ?>
                </div>
                <div id="shimonoseki" class="search__item hover-opacity">
                    <?php
                    $terms = get_terms('area');
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            if ($term->name == "下関市") {
                                echo '<p><a href="' . get_term_link($term) . '">' . $term->name . '</a></p>';
                            }
                        }
                    }
                    ?>
                </div>
                <div id="hagishi" class="search__item hover-opacity">
                    <?php
                    $terms = get_terms('area');
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            if ($term->name == "萩市") {
                                echo '<p><a href="' . get_term_link($term) . '">' . $term->name . '</a></p>';
                            }
                        }
                    }
                    ?>
                </div>
                <div id="nagato" class="search__item hover-opacity">
                    <?php
                    $terms = get_terms('area');
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            if ($term->name == "長門市") {
                                echo '<p><a href="' . get_term_link($term) . '">' . $term->name . '</a></p>';
                            }
                        }
                    }
                    ?>
                </div>
                <div id="mineshi" class="search__item hover-opacity">
                    <?php
                    $terms = get_terms('area');
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            if ($term->name == "美祢市") {
                                echo '<p><a href="' . get_term_link($term) . '">' . $term->name . '</a></p>';
                            }
                        }
                    }
                    ?>
                </div>
                <div id="sanyouonodashi" class="search__item hover-opacity">
                    <?php
                    $terms = get_terms('area');
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            if ($term->name == "山陽小野田市") {
                                echo '<p><a href="' . get_term_link($term) . '">' . $term->name . '</a></p>';
                            }
                        }
                    }
                    ?>
                </div>
                <div id="yamaguchishi" class="search__item hover-opacity">
                    <?php
                    $terms = get_terms('area');
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            if ($term->name == "山口市") {
                                echo '<p><a href="' . get_term_link($term) . '">' . $term->name . '</a></p>';
                            }
                        }
                    }
                    ?>
                </div>
                <div id="ubeshi" class="search__item hover-opacity">
                    <?php
                    $terms = get_terms('area');
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            if ($term->name == "宇部市") {
                                echo '<p><a href="' . get_term_link($term) . '">' . $term->name . '</a></p>';
                            }
                        }
                    }
                    ?>
                </div>
                <div id="bouhushi" class="search__item hover-opacity">
                    <?php
                    $terms = get_terms('area');
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            if ($term->name == "防府市") {
                                echo '<p><a href="' . get_term_link($term) . '">' . $term->name . '</a></p>';
                            }
                        }
                    }
                    ?>
                </div>
                <div id="syunanshi" class="search__item hover-opacity">
                    <?php
                    $terms = get_terms('area');
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            if ($term->name == "周南市") {
                                echo '<p><a href="' . get_term_link($term) . '">' . $term->name . '</a></p>';
                            }
                        }
                    }
                    ?>
                </div>
                <div id="kudamatsushi" class="search__item hover-opacity">
                    <?php
                    $terms = get_terms('area');
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            if ($term->name == "下松市") {
                                echo '<p><a href="' . get_term_link($term) . '">' . $term->name . '</a></p>';
                            }
                        }
                    }
                    ?>
                </div>
                <div id="iwakunishi" class="search__item hover-opacity">
                    <?php
                    $terms = get_terms('area');
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            if ($term->name == "岩国市") {
                                echo '<p><a href="' . get_term_link($term) . '">' . $term->name . '</a></p>';
                            }
                        }
                    }
                    ?>
                </div>
                <div id="hikarishi" class="search__item hover-opacity">
                    <?php
                    $terms = get_terms('area');
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            if ($term->name == "光市") {
                                echo '<p><a href="' . get_term_link($term) . '">' . $term->name . '</a></p>';
                            }
                        }
                    }
                    ?>
                </div>
                <div id="tabusechou" class="search__item hover-opacity">
                    <?php
                    $terms = get_terms('area');
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            if ($term->name == "田布施町") {
                                echo '<p><a href="' . get_term_link($term) . '">' . $term->name . '</a></p>';
                            }
                        }
                    }
                    ?>
                </div>
                <div id="hiraochou" class="search__item hover-opacity">
                    <?php
                    $terms = get_terms('area');
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            if ($term->name == "平生町") {
                                echo '<p><a href="' . get_term_link($term) . '">' . $term->name . '</a></p>';
                            }
                        }
                    }
                    ?>
                </div>
                <div id="kaminosekichou" class="search__item hover-opacity">
                    <?php
                    $terms = get_terms('area');
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            if ($term->name == "上関町") {
                                echo '<p><a href="' . get_term_link($term) . '">' . $term->name . '</a></p>';
                            }
                        }
                    }
                    ?>
                </div>
                <div id="yanaishi" class="search__item hover-opacity">
                    <?php
                    $terms = get_terms('area');
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            if ($term->name == "柳井市") {
                                echo '<p><a href="' . get_term_link($term) . '">' . $term->name . '</a></p>';
                            }
                        }
                    }
                    ?>
                </div>
                <div id="suouoshimachou" class="search__item hover-opacity">
                    <?php
                    $terms = get_terms('area');
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            if ($term->name == "周防大島町") {
                                echo '<p><a href="' . get_term_link($term) . '">' . $term->name . '</a></p>';
                            }
                        }
                    }
                    ?>
                </div>
                <div id="wakichou" class="search__item hover-opacity">
                    <?php
                    $terms = get_terms('area');
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            if ($term->name == "和木町") {
                                echo '<p><a href="' . get_term_link($term) . '">' . $term->name . '</a></p>';
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="cont2">
        <div class="wrap1080">
            <h3 class="titleL line">在宅訪問対応薬局</h3>
            <ul>
                <li class="hover-opacity">
                    <a href="">
                        <p class="txt">下関市</p><span><?php echo img("common", "pdf-logo", "svg", "", "pdf") ?></span>
                    </a>
                </li>
                <li class="hover-opacity">
                    <a href="">
                        <p class="txt">長門市・萩市・阿武町</p><span><?php echo img("common", "pdf-logo", "svg", "", "pdf") ?></span>
                    </a>
                </li>
                <li class="hover-opacity">
                    <a href="">
                        <p class="txt">山陽小野田市・美祢市</p><span><?php echo img("common", "pdf-logo", "svg", "", "pdf") ?></span>
                    </a>
                </li>
                <li class="hover-opacity">
                    <a href="">
                        <p class="txt">宇部市</p><span><?php echo img("common", "pdf-logo", "svg", "", "pdf") ?></span>
                    </a>
                </li>
                <li class="hover-opacity">
                    <a href="">
                        <p class="txt">山口市</p><span><?php echo img("common", "pdf-logo", "svg", "", "pdf") ?></span>
                    </a>
                </li>
                <li class="hover-opacity">
                    <a href="">
                        <p class="txt">防府市</p><span><?php echo img("common", "pdf-logo", "svg", "", "pdf") ?></span>
                    </a>
                </li>
                <li class="hover-opacity">
                    <a href="">
                        <p class="txt">周南市</p><span><?php echo img("common", "pdf-logo", "svg", "", "pdf") ?></span>
                    </a>
                </li>
                <li class="hover-opacity">
                    <a href="">
                        <p class="txt">下松市・光市</p><span><?php echo img("common", "pdf-logo", "svg", "", "pdf") ?></span>
                    </a>
                </li>
                <li class="hover-opacity">
                    <a href="">
                        <p class="txt">岩国市・和木町</p><span><?php echo img("common", "pdf-logo", "svg", "", "pdf") ?></span>
                    </a>
                </li>
                <li class="hover-opacity">
                    <a href="">
                        <p class="txt">柳井市・田布施町・平生町<br>
                            上関町・周防大島町</p><span><?php echo img("common", "pdf-logo", "svg", "", "pdf") ?></span>
                    </a>
                </li>
            </ul>
            <div class="cont2__banner">
                <a class="hover-opacity" target="_blank" href="http://info.yama-yaku.or.jp/yakkyoku_search.html">
                    <?php echo img("search", "banner@×2", "webp", "", "在宅薬局を探す") ?>
                </a>
            </div>
        </div>
    </section>
    <section class="pan">
        <div class="wrap1080">
            <ul>
                <li class="hover-opacity"><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
                <li>薬局検索</li>
            </ul>
        </div>
    </section>
</main>
<?php get_footer(); ?>