<?php
/**
 * Template Name: 简历
 */
$templateDirUri = esc_url(get_template_directory_uri());
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>李世伟的个人简历</title>
  <link href="<?php echo $templateDirUri; ?>/style.css" rel="stylesheet"/>
  <link rel="icon" href="<?php echo $templateDirUri ?>/images/xbug.ico"/>
  <!--[if lt IE 9]>
  <script src="<?php echo $templateDirUri ?>/static/html5.js"></script>
  <![endif]-->
</head>
<body <?php body_class(); ?>>
<div class="mdl-layout mdl-js-layout">
  <main class="mdl-layout__content">
    <div class="xbug-resume-item">
      <div class="xbug-resume-item__title">个人信息</div>
      <div class="xbug-resume-item__content">
        content
      </div>
    </div>
    <div class="xbug-resume-item">
      <div class="xbug-resume-item__title">理想职位</div>
      <div class="xbug-resume-item__content">
        content
      </div>
    </div>
    <div class="xbug-resume-item">
      <div class="xbug-resume-item__title">教育经历</div>
      <div class="xbug-resume-item__content">
        content
      </div>
    </div>
    <div class="xbug-resume-item">
      <div class="xbug-resume-item__title">工作经历</div>
      <div class="xbug-resume-item__content">
        content
      </div>
    </div>
    <div class="xbug-resume-item">
      <div class="xbug-resume-item__title">参与的项目</div>
      <div class="xbug-resume-item__content">
        content
      </div>
    </div>
    <div class="xbug-resume-item">
      <div class="xbug-resume-item__title">技能属性</div>
      <div class="xbug-resume-item__content">
        content
      </div>
    </div>
    <div class="xbug-resume-item">
      <div class="xbug-resume-item__title">战果</div>
      <div class="xbug-resume-item__content">
        content
      </div>
    </div>
    <div class="xbug-resume-item">
      <div class="xbug-resume-item__title">自我评价</div>
      <div class="xbug-resume-item__content">
        content
      </div>
    </div>
  </main>
</div>
<script src="<?php echo $templateDirUri; ?>/static/jquery/jquery-2.2.0.min.js"></script>
<script src="<?php echo $templateDirUri; ?>/static/material/material.min.js"></script>
</body>
</html>


