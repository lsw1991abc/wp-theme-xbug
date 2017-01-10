<?php
/**
 * 单页的边栏模块
 */
?>
<div class="mdl-cell mdl-cell--2-col">
  <?php
  wp_page_menu(array(
      'sort_column' => 'menu_order, post_title',
      'menu_class' => 'xbug-sidebar-page'
  ));
  ?>
</div>
