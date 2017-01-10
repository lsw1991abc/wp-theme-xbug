<?php
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
            while (have_posts()) {
              the_post();
              the_content();
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
