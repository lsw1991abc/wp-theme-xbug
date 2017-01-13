<?php
/**
 * 搜索结果
 */
get_header();
?>
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--9-col xbug-card-list">
    <div class="mdl-cell mdl-cell--12-col mdl-card">
      <div class="mdl-card__title">
        <?php
        if ( have_posts() ) {
          printf( __( ' %s 的搜索结果：', 'xbug' ), '<span>' . get_search_query() . '</span>' );
        } else {
          printf( __( '未找到 %s 相关的信息', 'xbug' ), '<span>' . get_search_query() . '</span>' );
        }
        ?>
      </div>
    </div>
    <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        get_template_part( 'template/single-post', get_post_format() );
      }
      xbug_posts_pagination( array(
        'mid_size'           => '2',
        'prev_text'          => '<i class="fa fa-chevron-left"></i>',
        'next_text'          => '<i class="fa fa-chevron-right"></i>',
        'screen-reader-text' => 'xBug'
      ) );
    }
    ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

