<?php
/**
 * Template Name: 文章归档2
 */
get_header();
?>
<div class="mdl-grid">
  <?php get_sidebar_page(); ?>
  <div class="mdl-cell mdl-cell--10-col">
    <div class="xbug-article-block">
      <div class="mdl-typography--display-1"><?php the_title(); ?></div>
      <hr />
      <div class="xbug-article-block__content">
        <?php
        $xbugPosts = get_posts( 'numberposts=-1&orderby=post_date&order=DESC' );
        if ( count( $xbugPosts ) > 0 ) {
          $prev_year  = $year = 0;
          $prev_month = $month = 0;
          $not_first  = false;
          foreach ( $xbugPosts as $post ) {
            setup_postdata( $post );
            $year  = get_the_date( 'Y' );
            $month = get_the_date( 'n' );
            $day   = get_the_date( 'j' );
            if ( $year != $prev_year || $month != $prev_month ) {
              if ( $not_first ) {
                echo '</ul></div>';
              }
              echo '<div><h3>' . get_the_date( 'F Y' ) . '</h3>' . '<ul>';
              $not_first = true;
            }
            $prev_year  = $year;
            $prev_month = $month;
            ?>
            <li>
              <time><?php echo $day; ?>日</time>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <span class="muted"><?php comments_number( '', '1评论', '%评论' ); ?></span>
            </li>
            <?php
          }
          echo '</ul></div>';
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

