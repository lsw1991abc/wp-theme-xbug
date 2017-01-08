<?php
/**
 * 边栏模块
 */
?>
<div class="mdl-cell mdl-cell--3-col xbug-card-list xbug-sidebar">
  <div class="mdl-cell mdl-cell--12-col mdl-card">
    <div class="mdl-card__actions">
      <a href="#"><i class="fa fa-wechat fa-2x mdl-color-text--green"></i></a>
      <a href="#"><i class="fa fa-qq fa-2x mdl-color-text--indigo-900"></i></a>
      <a href="#"><i class="fa fa-weibo fa-2x mdl-color-text--deep-orange-500"></i></a>
      <a href="#"><i class="fa fa-google-plus-circle fa-2x mdl-color-text--red"></i></a>
    </div>
  </div>
  <?php
  if (is_active_sidebar('home-sidebar')) {
    dynamic_sidebar('home-sidebar');
  }
  ?>
</div>
