<?php
/**
 * Template Name: 文章归档
 */
get_header();
?>
<div class="mdl-grid">
  <?php get_sidebar_page(); ?>
  <div class="mdl-cell mdl-cell--10-col">
    <div class="xbug-article-block">
      <div class="mdl-typography--display-1"><?php the_title(); ?></div>
      <hr/>
      <div class="xbug-article-content">
        <?php the_content() ?>
      </div>
      <hr/>
      <div class="mdl-typography--subhead-color-contrast">
        版权说明
      </div>
      <hr/>
      <div class="mdl-typography--subhead-color-contrast">
        相关文章
      </div>
      <hr/>
      <div class="mdl-typography--subhead-color-contrast">
        评论区
      </div>
      <div class="mdl-typography--subhead-color-contrast">
        历史评价
      </div>
    </div>
  </div>

</div>
<?php get_footer(); ?>
