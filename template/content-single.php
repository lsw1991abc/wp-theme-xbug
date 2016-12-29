<?php
/**
 * 文章
 */
?>
<div id="post-<?php the_ID() ?>" class="xbug-article-block">
  <div class="mdl-typography--display-1">
    <?php the_title(); ?>
  </div>
  <div class="mdl-typography--font-light">标签：tag 时间：2016-12-12 作者：Wizard</div>
  <hr/>
  <div class="xbug-article-content">
    <?php the_content(); ?>
  </div>
  <hr/>
  <div class="mdl-typography--subhead-color-contrast">
    本文链接：<a href="<?php echo get_the_permalink(); ?>" title="<?php the_title()?>"><?php echo get_the_permalink(); ?></a>
  </div>
  <hr/>
  <div class="mdl-typography--subhead-color-contrast">
    <?php
    // 相关文章
    ?>
  </div>
  <hr/>
  <div class="mdl-typography--subhead-color-contrast">
    评论区
  </div>
  <div class="mdl-typography--subhead-color-contrast">
    历史评价
  </div>
</div>