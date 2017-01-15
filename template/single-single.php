<?php
/**
 * 文章
 */
?>
<div id="post-<?php the_ID() ?>" class="xbug-article-block">
  <div class="mdl-typography--display-1">
      <?php the_title(); ?>
  </div>
  <div class="mdl-typography--font-thin mdl-color-text--grey-600">
    <i class="fa fa-folder-open-o fa-lg"></i> <?php the_category(', '); ?>&nbsp;&nbsp;&nbsp;
    <?php the_tags($before = '<i class="fa fa-tags fa-lg"></i> ') ?>&nbsp;&nbsp;&nbsp;
    <i class="fa fa-commenting-o fa-lg"></i> <a href="#comments"><?php comments_number(); ?></a>&nbsp;&nbsp;&nbsp;
    <i class="fa fa-clock-o fa-lg"></i> <?php echo get_the_date() . ' ' . get_the_time(); ?>&nbsp;&nbsp;&nbsp;
    <?php edit_post_link('[编辑]'); ?>
  </div>
  <hr />
  <div class="xbug-article-block__content">
      <?php
      the_content();
      wp_link_pages( array(
          'before'      => '<div class="page-links">' . __( '页码:', 'xBug' ),
          'after'       => '</div>',
          'link_before' => '<span class="page-number">',
          'link_after'  => '</span>',
      ) );
      ?>
  </div>
  <div class="mdl-typography--subhead-color-contrast xbug-article-block__copyright">
    <b>版权保护:</b> 转载请保留链接: <a href="<?php echo get_the_permalink(); ?>" title="<?php the_title() ?>"><?php echo get_the_permalink(); ?></a>
  </div>
</div>

<div class="xbug-article-block">
  <div class="mdl-typography--subhead-color-contrast xbug-article-block__related">
    <p>相关文章</p>
    <?php
    // 相关文章
    $postTags = get_the_tags();
    if ($postTags) {
      $tags = '';
      foreach ($postTags as $postTag) {
        $tags .= $postTag->term_id . ',';
      }
      query_posts(array(
          'tag__in' => explode(',', $tags),
          'post__not_in' => explode(',', $post->ID)
      ));
      if ( have_posts() ) {
        echo '<ul>';
        while (have_posts()) {
          the_post();
          ?>
          <li><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></li>
          <?php
        }
        echo '</ul>';
      }

      wp_reset_query();
    }
    ?>
  </div>
</div>
<div class="xbug-article-block">
  <div id="comments" class="mdl-typography--subhead-color-contrast">
    <?php
    if (comments_open() || get_comments_number()) :
      comments_template();
    endif;
    ?>
  </div>
</div>