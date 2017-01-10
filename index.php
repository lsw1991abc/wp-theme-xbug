<?php
/**
 * 首页
 */
get_header();
?>
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--9-col xbug-card-list">
    <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        get_template_part( 'template/single-post', get_post_format() );
      }
      xbug_posts_pagination( array(
        'mid_size'           => '2',
        'prev_text'          => '<i class="fa fa-chevron-left"></i>',
        'next_text'          => '<i class="fa fa-chevron-right"></i>',
        'screen-reader-text' => 'xBug'
      ) );
    } else {
      get_template_part( 'template/single-none', get_post_format() );
    }
    ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

