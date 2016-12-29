<?php
get_header();
?>
  <div class="mdl-grid">
    <article class="mdl-cell mdl-cell--9-col">
      <?php
      if (have_posts()) :
        the_post();
        get_template_part('template/content-single', get_post_format());
      else: get_template_part('template/content-none', get_post_format());
      endif;
      ?>

    </article>
    <?php get_sidebar(); ?>
  </div>
<?php get_footer(); ?>