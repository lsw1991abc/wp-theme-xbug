<?php
/**
 * 头部模块
 */
$templateDirUri = esc_url(get_template_directory_uri());
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>Index</title>
  <link href="<?php echo $templateDirUri; ?>/static/font-awesome-4.7.0/css/font-awesome.min.css"
        rel="stylesheet"/>
  <link href="<?php echo $templateDirUri; ?>/style.css" rel="stylesheet"/>
  <link rel="profile" href="#">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <!--[if lt IE 9]>
  <script src="<?php echo $templateDirUri ?>/static/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <h1>
        <a href="#"><img
              src="data:image/png;base64,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"
              style="width: 102px;"/></a>
      </h1>
      <div class="mdl-layout-spacer"></div>
      <div
          class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right">
        <label class="mdl-button mdl-js-button mdl-button--icon" for="header-search-input">
          <i class="fa fa-search"></i>
        </label>
        <div class="mdl-textfield__expandable-holder">
          <input type="text" name="q" class="mdl-textfield__input" id="header-search-input"/>
        </div>
      </div>
      <?php echo strip_tags(wp_nav_menu(array(
          'container' => 'nav',
          'container_class' => 'mdl-navigation',
          'container_id' => 'xbug-navigation-header',
          'echo' => false,
          'items_wrap' => '%3$s'
      )), '<nav><a>'); ?>
    </div>
    <div class="mdl-layout__drawer-button">
      <i class="fa fa-bars"></i>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="#">文章归档</a>
      <a class="mdl-navigation__link" href="#">下载仓库</a>
      <a class="mdl-navigation__link" href="#">推荐图书</a>
      <a class="mdl-navigation__link" href="#">友情链接</a>
      <a class="mdl-navigation__link" href="#">留言板</a>
      <a class="mdl-navigation__link" href="#">关于我</a>
    </nav>
  </div>
  <main class="mdl-layout__content nicescroll">
