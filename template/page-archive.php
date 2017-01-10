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
        <?php
        $xbugPosts = get_posts('numberposts=-1&orderby=post_date&order=DESC');

        $pre_year = $year = 0;
        $pre_month = $month = 0;
        $pre_day = $day = 0;
        foreach ($xbugPosts as $post) {
          setup_postdata($post);
          $year = get_the_date('Y');
          $month = get_the_date('F');
          $day = get_the_date('j');
          if ($pre_year != $year || $pre_month != $month) {
            echo '<ul><p>' . $year . ' ' . $month . '</p>';
          }

          ?>
          <li>
            <time><?php echo $day; ?>日</time>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <span><?php comments_number('', '1评论', '%评论'); ?></span>
          </li>
          <?php
          if ($pre_year != $year || $pre_month != $month) {
            echo '</ul>';
          }
          $pre_year = $year;
          $pre_month = $month;
        }
        ?>
      </div>
      <hr/>
      <div class="mdl-typography--subhead-color-contrast">
        <?php
        if (comments_open() || get_comments_number()) {
          comments_template();
        }
        ?>
      </div>
    </div>
  </div>

</div>
<?php get_footer(); ?>

