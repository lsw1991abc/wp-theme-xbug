<?php
/**
 * 公共函数
 */
// 移除不必要的wp_head
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'rel_canonical' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );

// 设置页面title，只需wp_head()
add_theme_support( 'title-tag' );

// 修改摘要文字长度
function xbug_excerpt_length( $length ) {
  return 200;
}

add_filter( 'excerpt_length', 'xbug_excerpt_length', 200 );

function xbug_excerpt_more( $more ) {
  return '......';
}

add_filter( 'excerpt_more', 'xbug_excerpt_more', '阅读全文' );

register_nav_menus( array(
  'header_menu' => __( '头部' ),
  /*'pre_footer_menu' => __('副页脚'),
  'footer_menu' => __('页脚'),*/
  'drawer_menu' => __( '抽屉' )
) );

register_sidebar( array(
  'name' => '侧边栏',
  'id'   => 'home-sidebar'
) );

function xbug_posts_pagination( $args = array() ) {
  $args['screen_reader_text'] = 'xBug';
  echo str_replace( '<h2 class="screen-reader-text">xBug</h2>', '', get_the_posts_pagination( $args ) );
}

function get_sidebar_page() {
  get_sidebar( 'page' );
}

function xbug_comment_list( $comment, $args, $depth ) {
  echo '<li class="xbug-comment-item">
  <div>
    <div class="comment-avatar">' . get_avatar( $comment->comment_author_email, $size = '64' ) . '</div>
    <div class="comment">
      <span class="comment-span"><a href="#">' . get_comment_author_link() . '</a></span>
      <div class="comment-text">
         ' . get_comment_text() . '
      </div>
	    <div class="comment-footer">
        <time>' . get_comment_time( 'Y-m-d H:i ' ) . '</time>
        ' . get_comment_reply_link( array_merge( $args, array(
      'add_below' => 'div-comment',
      'depth'     => $depth,
      'max_depth' => $args['max_depth']
    ) ) ) . '
      </div>
    </div>
  </div>';
}

add_filter('pre_option_link_manager_enabled','__return_true');

?>