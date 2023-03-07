<?php
/*-------------------------     サムネイル設定    -------------------------*/
add_theme_support('post-thumbnails');

/*-------------------------     自動整形無効化    -------------------------*/
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

/*-------------------------     タイムゾーン設定    -------------------------*/
date_default_timezone_set('Asia/Tokyo');

/*-------------------------     投稿編集用管理画面    -------------------------*/
add_action('admin_menu', 'remove_menus');
function remove_menus()
{
    if (current_user_can('editor')) {
        remove_menu_page('index.php');
        remove_menu_page('upload.php');
        remove_menu_page('edit.php?post_type=page');
        remove_menu_page('edit-comments.php');
        remove_menu_page('themes.php');
        remove_menu_page('plugins.php');
        remove_menu_page('users.php');
        remove_menu_page('tools.php');
        remove_menu_page('options-general.php');
        remove_menu_page('wpcf7');
        remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=category');
        remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag');
    }
}

/*-------------------------     投稿ネーミング設定    -------------------------*/
add_filter('post_type_labels_post', 'aktk_post_type_labels_post');
function aktk_post_type_labels_post($labels)
{
    foreach ($labels as $key => $value) {
        $labels->$key = str_replace('投稿', 'NEWS&BLOG', $value);
    }
    return $labels;
}

/*-------------------------     自作関数    -------------------------*/
/**
 *スラッグを文字を返す
 *
 * @return $pagename スラッグ名
 */

function pn()
{
    if (is_page()) $pagename = get_post(get_the_ID())->post_name;
    elseif (is_single()) $pagename = 'single';
    else $pagename = 'other';
    return $pagename;
}

/**
 *画像のパスを返す
 *
 * @param [char] $falder フォルダ名
 * @param [char] $imgname 画像名
 * @param [char] $extension 画像の拡張子
 * @param [char] $class クラス名
 * @param [char] $alt alt属性
 * @return $images 画像までのパス
 */
/*
使用例
<?php echo img("common", "logo", "svg", "クラス名", "alt属性名") ?>
*/
function img($falder, $imgname, $extension, $class = null, $alt = null)
{
    $images = get_template_directory_uri() . "/assets/images";
    $images = "<img loading='lazy' alt='$alt' class='$class'src='" . $images . "/" . $falder . "/" . $imgname . "." . $extension . "'>";
    return $images;
}

/*
カテゴリ名を1つだけ取得
*/
function my_the_post_category($anchor = true, $id = 0)
{
    global $post;
    //引数が渡されなければ投稿IDを見るように設定
    if (0 === $id) {
        $id = $post->ID;
    }

    //カテゴリー一覧を取得
    $this_categories = get_the_category($id);
    if ($this_categories[0]) {
        if ($anchor) { //引数がtrueならリンク付きで出力
            echo '<a href="' . esc_url(get_category_link($this_categories[0]->term_id)) . '">' . esc_html($this_categories[0]->cat_name) . '</a>';
        } else { //引数がfalseならカテゴリー名のみ出力
            echo esc_html($this_categories[0]->cat_name);
        }
    }
}

// // エラーメッセージの変更
// function validation_rule($validation, $data, $Data)
// {
//     $validation->set_rule('your-name', 'noempty', array('message' => '※必須項目です'));
//     $validation->set_rule('your-furi', 'noempty', array('message' => '※必須項目です'));
//     $validation->set_rule('your-mail', 'noempty', array('message' => '※必須項目です'));
//     $validation->set_rule('mwform_checkbox-817', 'required', array('message' => '※必須項目です'));
//     return $validation;
// }
// add_filter('mwform_validation_mw-wp-form-56', 'validation_rule', 10, 3);


// // 管理画面にカスタム投稿のキーワードを検索できるウィンドウの作成
// function change_posts_per_page($query)
// {
//     if (!is_admin() && $query->is_main_query()) {    // 管理画面,メインクエリに干渉しないために必須
//         if (is_post_type_archive('recipe')) {     //※１　カスタム投稿タイプ「xxxx」を指定
//             $query->set('posts_per_page', '12');     //表示件数を指定
//         } else if (is_tax('genre')) {                //※２　カスタムタクソノミ「yyyy」を指定
//             $query->set('posts_per_page', '12');     //表示件数を指定
//         }
//     }
//     return $query;
// }

// add_action('pre_get_posts', 'change_posts_per_page');

//記事表示数の設定
function change_posts_per_page($query)
{
    //コラム
    if (!is_admin() && $query->is_main_query()) {    // 管理画面,メインクエリに干渉しないために必須
        if (is_post_type_archive('pharmacy')) {     //※１　カスタム投稿タイプ「xxxx」を指定
            $query->set('posts_per_page', '1');     //表示件数を指定
        } else if (is_tax('area')) {                //※２　カスタムタクソノミ「yyyy」を指定
            $query->set('posts_per_page', '1');     //表示件数を指定
        }
    }

    // //施工事例
    // if (!is_admin() && $query->is_main_query()) {    // 管理画面,メインクエリに干渉しないために必須
    //     if (is_post_type_archive('works')) {     //※１　カスタム投稿タイプ「xxxx」を指定
    //         $query->set('posts_per_page', '12');     //表示件数を指定
    //     } else if (is_tax('case')) {                //※２　カスタムタクソノミ「yyyy」を指定
    //         $query->set('posts_per_page', '12');     //表示件数を指定
    //     }
    // }

    // //住まう
    // if (!is_admin() && $query->is_main_query()) {    // 管理画面,メインクエリに干渉しないために必須
    //     if (is_post_type_archive('owned')) {     //※１　カスタム投稿タイプ「xxxx」を指定
    //         $query->set('posts_per_page', '10');     //表示件数を指定
    //     }
    // }
    // if (!is_admin() && $query->is_main_query()) {    // 管理画面,メインクエリに干渉しないために必須
    //     if (is_post_type_archive('condominium')) {     //※１　カスタム投稿タイプ「xxxx」を指定
    //         $query->set('posts_per_page', '10');     //表示件数を指定
    //     }
    // }

    // //お知らせ
    // if (!is_admin() && $query->is_main_query()) {    // 管理画面,メインクエリに干渉しないために必須
    //     if (is_post_type_archive('post')) {     //※１　カスタム投稿タイプ「xxxx」を指定
    //         $query->set('posts_per_page', '10');     //表示件数を指定
    //     }
    // }

    // if (is_category()) {
    //     $query->set('posts_per_page', '10');
    // }

    return $query;
}
add_action('pre_get_posts', 'change_posts_per_page');
