<?php
add_filter('show_admin_bar', '__return_false');
/**************************************************
CSSファイルの読み込み
 **************************************************/
function my_enqueue_styles()
{
 wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
 wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), false, 'all');
 if (is_category()||is_tag()) {
    wp_enqueue_style('category', get_theme_file_uri('css/category.css'), array('ress', 'style'), false, 'all');
   }elseif (is_home() || is_front_page() || $_SERVER['HTTP_HOST']) {
  wp_enqueue_style('top', get_theme_file_uri('css/top.css'), array('ress', 'style'), false, 'all');
 } 
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

/**************************************************
アイキャッチを有効化
 **************************************************/
add_theme_support('post-thumbnails');

// ページ表示件数の設定
function custom_posts_per_page($query) {
    if(is_admin() || ! $query->is_main_query()){
        return;
    }
    // 制作実績
    if($query->is_category('works')) {
        $query->set('posts_per_page', '9');
    }
    // blog
    if($query->is_category('blog')) {
        $query->set('posts_per_page', '9');
    }
}
add_action('pre_get_posts', 'custom_posts_per_page');

function load_js() {
	//管理画面を除外
	if ( !is_admin() ){
		//事前に読み込まれるjQueryを解除
		wp_deregister_script( 'jquery' );

		//Google CDNのjQueryを出力
		wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), NULL, true );

		//自作スクリプトや、jQueryのライブラリも同様に読み込みます。
		// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
	}
}
add_action( 'init', 'load_js' );