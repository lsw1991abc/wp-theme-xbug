<?php
/**
 * 尾部模块
 */
$templateDirUri = esc_url(get_template_directory_uri());
?>
<section class="xbug-pre-footer">
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--4-col">
      <h1 class="mdl-mega-footer__heading">Features</h1>
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
    <div class="mdl-cell mdl-cell--4-col">
      <h1 class="mdl-mega-footer__heading">Technology</h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a href="#">How it works</a></li>
        <li><a href="#">Patterns</a></li>
        <li><a href="#">Usage</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Contracts</a></li>
      </ul>
    </div>
    <div class="mdl-cell mdl-cell--4-col">
      <h1 class="mdl-mega-footer__heading">FAQ</h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a href="#">Questions</a></li>
        <li><a href="#">Answers</a></li>
        <li><a href="#">Contact us</a></li>
      </ul>
    </div>
  </div>
</section>
<footer class="mdl-mini-footer">
  <div class="mdl-mini-footer--left-section">
    <div class="mdl-logo">Title</div>
    <ul class="mdl-mini-footer--link-list">
      <li><a href="#">Help</a></li>
      <li><a href="#">Privacy & Terms</a></li>
    </ul>
  </div>
  <div class="mdl-mini-footer--right-section">
    <ul class="mdl-mini-footer--link-list">
      <li><a href="#">1234</a></li>
      <li><a href="#">1234</a></li>
      <li><a href="#">1234</a></li>
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
