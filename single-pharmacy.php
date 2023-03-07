<?php get_header() ?>
<main class="single-pharmacy">
    <div class="wrap900">
        <h3 class="titleL line"><?php the_title(); ?></h3>
        <!-- <dl>
            <dt>地域名</dt>
            <dd>○○エリア</dd>
            <dt>郵便番号</dt>
            <dd>〒750-0008</dd>
        </dl> -->
        <table>
            <tr>
                <th>地域名</th>
                <td>
                    <?php $myfield = scf::get('area');
                    if (!(empty($myfield))) {
                        echo $myfield;
                    } ?>
                </td>
            </tr>
            <tr>
                <th>郵便番号</th>
                <td>
                    <?php $myfield = scf::get('post');
                    if (!(empty($myfield))) {
                        echo "<span>" . $myfield . "</span>";
                    } ?>
                </td>
            </tr>
            <tr>
                <th>住　所</th>
                <td>
                    <?php $myfield = scf::get('address');
                    if (!(empty($myfield))) {
                        echo $myfield;
                    } ?>
                </td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>
                    <?php $myfield = scf::get('tel');
                    if (!(empty($myfield))) {
                        echo $myfield;
                    } ?>
                </td>
            </tr>
            <tr>
                <th>FAX</th>
                <td>
                    <?php $myfield = scf::get('fax');
                    if (!(empty($myfield))) {
                        echo $myfield;
                    } ?>
                </td>
            </tr>
            <tr>
                <th>開局時間</th>
                <td>
                    <?php
                    $customfield = SCF::get('time');
                    echo nl2br($customfield);
                    ?>
                </td>
            </tr>
            <tr>
                <th>設備</th>
                <td>
                    <?php $myfield = scf::get('facility');
                    if (!(empty($myfield))) {
                        echo $myfield;
                    } ?>
                </td>
            </tr>
            <tr>
                <th>E-mail</th>
                <td>
                    <?php $myfield = scf::get('mail');
                    if (!(empty($myfield))) {
                        echo $myfield;
                    } ?>
                </td>
            </tr>
            <tr>
                <th>在宅支援薬局</th>
                <td>
                    <?php $status = SCF::get('help'); ?>
                    <?php if ($status == 'あり') {
                        echo "〇";
                    } else {
                        echo "✕";
                    } ?>
                </td>
            </tr>
            <tr>
                <th>訪問指導の実績</th>
                <td>
                    <?php $status = SCF::get('guidance'); ?>
                    <?php if ($status == 'あり') {
                        echo "〇";
                    } else {
                        echo "✕";
                    } ?>
                </td>
            </tr>
        </table>
        <div class="btn1 hover-opacity"> <?php
                            $terms = get_the_terms($post->ID, 'area');
                            foreach ($terms as $term) {
                                echo '<a href="' . get_term_link($term->slug, 'area') . '">' . '一覧へ戻る' . '</a>';
                            }
                            ?></div>
    </div>
    <section class="pan">
        <div class="wrap1080">
            <ul>
                <li class="hover-opacity"><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
                <li class="hover-opacity"><a href="<?php echo esc_url(home_url('/search')); ?>">薬局検索</a></li>
                <li>
                    <?php
                    $terms = get_the_terms($post->ID, 'area');
                    foreach ($terms as $term) {
                        echo '<a class = "hover-opacity" href="' . get_term_link($term->slug, 'area') . '">' . $term->name . '検索結果' . '</a>';
                    }
                    ?>
                </li>
                <li>
                    <?php echo the_title(); ?>
                </li>
            </ul>
        </div>
    </section>
</main>
<?php get_footer(); ?>