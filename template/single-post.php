<?php
/**
 * 文章
 */
$templateDirUri = esc_url(get_template_directory_uri());
?>
<div id="post-<?php the_ID(); ?>" <?php post_class($class= 'mdl-cell mdl-cell--12-col mdl-card'); ?>>
  <div class="mdl-card__title">
    <h4 class="mdl-card__title-text">
      <label class="mdl-card__title-tag"><?php the_category(', '); ?></label>
      <?php
      $current_permalink = esc_url(get_permalink());
      the_title(sprintf('<a href="%s">', $current_permalink), '</a>&nbsp;&nbsp;
        <a href="' . $current_permalink . '" target="_blank" title="新窗口打开">
          <i class="fa fa-external-link-square"></i>
        </a>');
      ?>
    </h4>
  </div>
  <div class="xbug-card__rich-media">
    <div class="mdl-card__media">
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
        <i class="fa fa-clock-o fa-lg"></i> <?php echo get_the_date(); ?> &nbsp;&nbsp;&nbsp;
        <i class="fa fa-commenting-o fa-lg"></i> <a href="<?php the_permalink(); ?>#comments" target="_blank"><?php comments_number(); ?></a> &nbsp;&nbsp;&nbsp;
        <a href="<?php the_permalink(); ?>" target="_blank">阅读全文</a>
      </p>
    </div>
  </div>
</div>
