<?php
/**
 * 文章
 */
?>
<div id="post-<?php the_ID() ?>" class="xbug-article-block">
  <div class="mdl-typography--display-1">
      <?php the_title(); ?>
  </div>
  <div class="mdl-typography--font-light"><?php the_tags() ?> 时间：<?php echo get_the_date() . ' ' .
          get_the_time(); ?>作者：<?php the_author(); ?></div>
  <hr />
  <div class="xbug-article-content">
      <?php the_content(); ?>
  </div>
  <hr />
  <div class="mdl-typography--subhead-color-contrast">
    本文链接：<a href="<?php echo get_the_permalink(); ?>" title="<?php the_title() ?>"><?php echo get_the_permalink(); ?></a>
  </div>
  <hr />
  <div class="mdl-typography--subhead-color-contrast">
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
          while (have_posts()) {
              the_post();
              ?>
            <a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a>
              <?php
          }
          wp_reset_query();
      }
      ?>
  </div>
  <hr />
  <div class="mdl-typography--subhead-color-contrast">
      <?php
      if (comments_open() || get_comments_number()) :
          comments_template();
      endif;
      ?>
  </div>
</div>