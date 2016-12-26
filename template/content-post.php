<?php
/**
 * 文章
 */
?>
<div id="post-<?php the_ID(); ?>" class="mdl-cell mdl-cell--12-col mdl-card">
  <div class="mdl-card__title">
    <h4 class="mdl-card__title-text">
      <label class="xbug-catalog__label"><a href="#">文章标题</a> <s></s></label>
      <?php the_title(sprintf('<a href="%s" target="_blank">', esc_url(get_permalink())), '</a>'); ?>
    </h4>
  </div>
  <div class="xbug-card__rich-media">
    <div class="mdl-card__media">
      <a href="#" target="_blank"><img
            src="http://www.yelook.com/wp-content/themes/YeLook/img/random/6.jpg" alt="test"
            class="xbug-image__border"/></a>
    </div>
    <div class="mdl-card__supporting-text">
      <p class="xbug-card__text-summary">
        内容asdfasfasdfasdfasfasdfasdasdfasfasdfasdasdfasfasdfasdasdfasfasdfasdasdfasfasdfasdasdfasfasdfasdasdfasfasdfasdasdfasfasdfasdasdfasfasdfasdasdfasfasdfasdasdfasfasdfasdasdfasfasdfasdasdfasfasdfasdasdfasfasdfasdasdfasfasdfasdasdfasfasdfasdasdfasfasdfasdasdfasfasdfasdasdfasfasdfasdasdfasfasdfasdasdfasfasdfasdasdfasfasdfasdasdfasfasdfasdasdfasfasdfasdasdfasfasdfasdasd</p>
      <p class="mdl-typography--text-right">
        <i class="fa fa-clock-o fa-lg"></i> 2016-12-22 &nbsp;&nbsp;&nbsp;
        <i class="fa fa-user fa-lg"></i> <a href="#" target="_blank">Wizard</a> &nbsp;&nbsp;&nbsp;
        <a href="#" target="_blank">阅读全文</a></p>
    </div>
  </div>
</div>
