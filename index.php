<?php
/**
 * 首页
 */
get_header();
?>
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--9-col xbug-card-list">
    <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post();
        get_template_part('template/content-post', get_post_format());
      endwhile;
    endif;
    ?>
    <!-- 分页工具 -->
    <div class="xbug-pagination">
      <a href="#" class="xbug-pagination__link--arrow"><i class="fa fa-chevron-left"></i></a>
      <a href="#" class="xbug-pagination__link">1</a>
      <a href="#" class="xbug-pagination__link">2</a>
      <a href="#" class="xbug-pagination__link">3</a>
      <a href="#" class="xbug-pagination__link">4</a>
      <a href="#" class="xbug-pagination__link">5</a>
      <a href="#" class="xbug-pagination__link--arrow"><i class="fa fa-chevron-right"></i></a>
    </div>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

