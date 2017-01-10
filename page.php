<?php
get_header();
?>
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--2-col xbug-card-list xbug-sidebar">
        <!-- 卡片 begin -->
        <div class="mdl-cell mdl-cell--12-col mdl-card">
          <div class="mdl-card__supporting-text mdl-list xbug-page-tab__vertical">
            <div class="mdl-list__item"><a href="#" target="_blank">文章归档</a></div>
            <div class="mdl-list__item"><a href="#" target="_blank">下载仓库</a></div>
            <div class="mdl-list__item"><a href="#" target="_blank">推荐图书</a></div>
            <div class="mdl-list__item"><a href="#" target="_blank">友情链接</a></div>
            <div class="mdl-list__item"><a href="#" target="_blank">留言板</a></div>
            <div class="mdl-list__item"><a href="#" target="_blank">关于我</a></div>
          </div>
        </div>
        <!-- 卡片 end -->
      </div>
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
