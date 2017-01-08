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
add_theme_support('title-tag');

// 修改摘要文字长度
function xbug_excerpt_length($length) {
  return 200;
}

add_filter('excerpt_length', 'xbug_excerpt_length', 200);

function xbug_excerpt_more($more) {
  return '......';
}

add_filter('excerpt_more', 'xbug_excerpt_more', '阅读全文');

register_nav_menus(array(
    'header_menu' => __('头部'),
  /*'pre_footer_menu' => __('副页脚'),
  'footer_menu' => __('页脚'),*/
    'drawer_menu' => __('抽屉')
));

// 文章分页导航
function xbug_get_the_posts_pagination($args = array()) {
  if ($GLOBALS['wp_query']->max_num_pages > 1) {
    $args = wp_parse_args($args, array(
        'mid_size' => 1,
        'prev_text' => _x('Previous', 'previous set of posts'),
        'next_text' => _x('Next', 'next set of posts')
    ));

    // Make sure we get a string back. Plain is the next best thing.
    if (isset($args['type']) && 'array' == $args['type']) {
      $args['type'] = 'plain';
    }

    $links = xbug_paginate_links($args);

    if ($links) {
      return sprintf('<div class="xbug-pagination">%1$s</div>', $links);
    }
  } else {
    return '';
  }
}

function xbug_the_posts_pagination($args = array()) {
  echo xbug_get_the_posts_pagination($args);
}


function xbug_paginate_links( $args = '' ) {
  global $wp_query, $wp_rewrite;
  $pagenum_link = html_entity_decode( get_pagenum_link() );
  $url_parts    = explode( '?', $pagenum_link );

  $total   = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;
  $current = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;

  $pagenum_link = trailingslashit( $url_parts[0] ) . '%_%';

  $format  = $wp_rewrite->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
  $format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';

  $defaults = array(
      'base' => $pagenum_link, // http://example.com/all_posts.php%_% : %_% is replaced by format (below)
      'format' => $format, // ?page=%#% : %#% is replaced by the page number
      'total' => $total,
      'current' => $current,
      'show_all' => false,
      'prev_next' => true,
      'prev_text' => __('&laquo; Previous'),
      'next_text' => __('Next &raquo;'),
      'end_size' => 1,
      'mid_size' => 2,
      'type' => 'plain',
      'add_args' => array(), // array of query args to add
      'add_fragment' => '',
      'before_page_number' => '',
      'after_page_number' => ''
  );

  $args = wp_parse_args( $args, $defaults );

  if ( ! is_array( $args['add_args'] ) ) {
    $args['add_args'] = array();
  }

  if ( isset( $url_parts[1] ) ) {
    $format = explode( '?', str_replace( '%_%', $args['format'], $args['base'] ) );
    $format_query = isset( $format[1] ) ? $format[1] : '';
    wp_parse_str( $format_query, $format_args );

    wp_parse_str( $url_parts[1], $url_query_args );

    foreach ( $format_args as $format_arg => $format_arg_value ) {
      unset( $url_query_args[ $format_arg ] );
    }

    $args['add_args'] = array_merge( $args['add_args'], urlencode_deep( $url_query_args ) );
  }

  $total = (int) $args['total'];
  if ( $total < 2 ) {
    return;
  }
  $current  = (int) $args['current'];
  $end_size = (int) $args['end_size']; // Out of bounds?  Make it the default.
  if ( $end_size < 1 ) {
    $end_size = 1;
  }
  $mid_size = (int) $args['mid_size'];
  if ( $mid_size < 0 ) {
    $mid_size = 2;
  }
  $add_args = $args['add_args'];
  $page_links = array();
  $dots = false;

  if ( $args['prev_next'] && $current && 1 < $current ) :
    $link = str_replace( '%_%', 2 == $current ? '' : $args['format'], $args['base'] );
    $link = str_replace( '%#%', $current - 1, $link );
    if ( $add_args )
      $link = add_query_arg( $add_args, $link );
    $link .= $args['add_fragment'];
    $page_links[] = '<a class="xbug-pagination__link prev" href="' . esc_url( apply_filters( 'paginate_links', $link ) ) . '"><i class="fa fa-chevron-left"></i></a>';
  endif;
  for ( $n = 1; $n <= $total; $n++ ) :
    if ( $n == $current ) :
      $page_links[] = "<span class='xbug-pagination__link current'>" . $args['before_page_number'] . number_format_i18n( $n ) . $args['after_page_number'] . "</span>";
      $dots = true;
    else :
      if ( $args['show_all'] || ( $n <= $end_size || ( $current && $n >= $current - $mid_size && $n <= $current + $mid_size ) || $n > $total - $end_size ) ) :
        $link = str_replace( '%_%', 1 == $n ? '' : $args['format'], $args['base'] );
        $link = str_replace( '%#%', $n, $link );
        if ( $add_args )
          $link = add_query_arg( $add_args, $link );
        $link .= $args['add_fragment'];

        $page_links[] = "<a class='xbug-pagination__link' href='" . esc_url( apply_filters( 'paginate_links', $link ) ) . "'>" . $args['before_page_number'] . number_format_i18n( $n ) . $args['after_page_number'] . "</a>";
        $dots = true;
      elseif ( $dots && ! $args['show_all'] ) :
        $page_links[] = '<span class="xbug-pagination__link dots">' . __( '&hellip;' ) . '</span>';
        $dots = false;
      endif;
    endif;
  endfor;
  if ( $args['prev_next'] && $current && $current < $total ) :
    $link = str_replace( '%_%', $args['format'], $args['base'] );
    $link = str_replace( '%#%', $current + 1, $link );
    if ( $add_args )
      $link = add_query_arg( $add_args, $link );
    $link .= $args['add_fragment'];

    $page_links[] = '<a class="xbug-pagination__link next" href="' . esc_url( apply_filters( 'paginate_links', $link ) ) . '"><i class="fa fa-chevron-right"></i></a>';
  endif;

  return join("\n", $page_links);
}

?>