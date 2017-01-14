<?php
/**
 * 文章
 */
$templateDirUri = esc_url(get_template_directory_uri());
?>
<div id="post-<?php the_ID(); ?>" class="mdl-cell mdl-cell--12-col mdl-card">
  <div class="mdl-card__title">
    <h4 class="mdl-card__title-text">
      <!--<label class="xbug-catalog__label"><a href="#">文章标题</a> <s></s></label>-->
      <?php the_title(sprintf('<a href="%s" target="_blank">', esc_url(get_permalink())), '</a>'); ?>
    </h4>
  </div>
  <div class="xbug-card__rich-media">
    <div class="mdl-card__media xbug-media__width-max">
      <a href="<?php the_permalink(); ?>" target="_blank">
        <img src="<?php echo xbug_get_thumbnail_src(); ?>" alt="<?php the_title(); ?>"
             title="<?php the_title(); ?>"
             class="xbug-image__border"/></a>
    </div>
    <div class="mdl-card__supporting-text">
      <p class="xbug-card__text-summary">
        <?php echo get_the_excerpt(); ?>
      </p>
      <p class="mdl-typography--text-right">
        <i class="fa fa-clock-o fa-lg"></i> <?php the_date(); ?> &nbsp;&nbsp;&nbsp;
        <i class="fa fa-user fa-lg"></i> <?php the_author(); ?> &nbsp;&nbsp;&nbsp;
        <a href="<?php the_permalink(); ?>" target="_blank">阅读全文</a>
      </p>
    </div>
  </div>
</div>
