<?php
/**
 * 边栏模块
 */
?>
<ul class="mdl-cell mdl-cell--3-col xbug-card-list xbug-sidebar">
  <li class="widget">
    <ul class="mdl-card__actions">
      <li><a href="#"><i class="fa fa-wechat fa-2x mdl-color-text--green"></i></a></li>
      <li><a href="#"><i class="fa fa-qq fa-2x mdl-color-text--indigo-900"></i></a></li>
      <li><a href="#"><i class="fa fa-weibo fa-2x mdl-color-text--deep-orange-500"></i></a></li>
      <li><a href="#"><i class="fa fa-google-plus-circle fa-2x mdl-color-text--red"></i></a></li>
    </ul>
  </li>
  <?php
  if (is_active_sidebar('home-sidebar')) {
    dynamic_sidebar('home-sidebar');
  }
  ?>
</ul>
