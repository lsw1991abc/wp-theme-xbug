<?php
/**
 * Template Name: 友情链接
 */
get_header();
?>
<div class="mdl-grid">
  <?php get_sidebar_page(); ?>
  <div class="mdl-cell mdl-cell--10-col">
    <div class="xbug-article-block">
      <div class="mdl-typography--display-1"><?php the_title(); ?></div>
      <hr />
      <div class="xbug-article-content">
        <?php
        $xbug_bookmarks = get_bookmarks();
        if (count($xbug_bookmarks) > 0) {
          echo '<ul>';
          foreach ($xbug_bookmarks as $bookmark) {
            echo '<li><a href="' . $bookmark->link_url . '" target="' . $bookmark->link_target . '" title="' . $bookmark->link_description . '">' . $bookmark->link_name . '</a></li>';
          }
          // 'link_id', '', '', 'link_image', '', 'link_category', '', 'link_visible', 'link_owner', 'link_rating', 'link_updated', 'link_rel', 'link_notes', 'link_rss',
          echo '</ul>';
        }
        ?>
      </div>
      <hr />
      <div class="mdl-typography--subhead-color-contrast">
        <?php
        if ( comments_open() || get_comments_number() ) {
          comments_template();
        }
        ?>
      </div>
    </div>
  </div>

</div>
<?php get_footer(); ?>

