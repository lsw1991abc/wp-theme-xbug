<?php
/**
 * 公共函数
 */
// 移除不必要的wp_head
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);

// 设置页面title，只需wp_head()
add_theme_support( 'title-tag' );

// 修改摘要文字长度
function xbug_excerpt_length($length) {
    return 200;
}
add_filter('excerpt_length', 'xbug_excerpt_length', 200);

function xbug_excerpt_more($more) {
    return '......';
}
add_filter('excerpt_more', 'xbug_excerpt_more', '阅读全文');


?>