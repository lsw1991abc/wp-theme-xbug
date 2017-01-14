<?php
/**
 * 边栏模块
 */
?>
<ul class="mdl-cell mdl-cell--3-col xbug-card-list xbug-sidebar">
  <li class="widget">
    <ul class="mdl-card__actions">
      <li>
        <a id="social-wechat"><i class="icon fa fa-wechat fa-2x mdl-color-text--green"></i></a>
        <div class="mdl-tooltip" data-mdl-for="social-wechat">
          <img class="social-pic" src="<?php echo esc_url(get_template_directory_uri()) ?>/images/xbug-qr.jpg" />
        </div>
      </li>
      <li><a href="tencent://message/?uin=357966261&Site=xbug.lol&Menu=yes" title="QQ联系我"><i class="icon fa fa-qq fa-2x mdl-color-text--indigo-900"></i></a></li>
      <li><a href="http://weibo.com/321893939" target="_blank" title="微博"><i class="icon fa fa-weibo fa-2x mdl-color-text--deep-orange-500"></i></a></li>
      <li><a href="https://github.com/lsw1991abc" target="_blank" title="GitHub"><i class="icon fa fa-github fa-2x mdl-color-text--blue"></i></a></li>
    </ul>
  </li>
  <?php
  if (is_active_sidebar('home-sidebar')) {
    dynamic_sidebar('home-sidebar');
  }
  ?>
</ul>
