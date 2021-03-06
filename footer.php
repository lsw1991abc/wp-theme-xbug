<?php
/**
 * 尾部模块
 */
$templateDirUri = esc_url(get_template_directory_uri());
?>
<!--<section class="xbug-pre-footer">
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--5-col mdl-cell--1-offset">
      <h1 class="mdl-mega-footer__heading">关于本站</h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a href="#">About</a></li>
        <li><a href="#">Terms</a></li>
        <li><a href="#">Partners</a></li>
        <li><a href="#">Updates</a></li>
        <li><a href="#">Specs</a></li>
        <li><a href="#">Tools</a></li>
        <li><a href="#">Resources</a></li>
      </ul>
    </div>
    <div class="mdl-cell mdl-cell--5-col">
      <h1 class="mdl-mega-footer__heading">致谢</h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a href="#">WordPress</a></li>
        <li><a href="#">阿里云</a></li>
      </ul>
    </div>
  </div>
</section>-->
<footer class="mdl-mini-footer">
  <div class="mdl-mini-footer--left-section">
    <ul class="mdl-mini-footer--link-list">
      <li>Copyright &copy; 2012-2017 xBug All rights reserved.</li>
      <li>Powered by <a href="http://wordpress.org/" target="_blank">WordPress</a>.</li>
      <li>Theme by <a href="https://theme.xbug.lol/" target="_blank" title="笑谈xBug">xBug</a>.</li>
      <li>Hosted by <a href="http://www.vultr.com/?ref=7145543" target="_blank" title="Vultr">Vultr</a>.</li>
    </ul>
  </div>
  <div class="mdl-mini-footer--right-section">
    <ul class="mdl-mini-footer--link-list">
      <li><a href="<?php echo home_url();?>/sitemap.html" target="_blank">站点地图</a></li>
      <li><a href="#">百度统计</a></li>
      <li><a href="http://www.miitbeian.gov.cn/" target="_blank">鲁ICP备13014029号</a></li>
    </ul>
  </div>
</footer>
</main>

</div>
<script src="<?php echo $templateDirUri; ?>/static/jquery/jquery-2.2.0.min.js"></script>
<script src="<?php echo $templateDirUri; ?>/static/material/material.min.js"></script>
<script src="<?php echo $templateDirUri; ?>/static/jquery/jquery.nicescroll.js"></script>
<script src="<?php echo $templateDirUri; ?>/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>
