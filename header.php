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
  <link href="<?php echo $templateDirUri; ?>/static/font-awesome-4.7.0/css/font-awesome.min.css"
        rel="stylesheet" />
  <link href="<?php echo $templateDirUri; ?>/style.css" rel="stylesheet" />
  <link rel="profile" href="#">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link rel="icon" href="<?php echo $templateDirUri ?>/images/xbug.ico" />
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
        <a href="#">
          <img src="data:image/png;base64,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" />
        </a>
      </h1>
      <div class="mdl-layout-spacer"></div>
      <div
        class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right">
        <label class="mdl-button mdl-js-button mdl-button--icon" for="header-search-input">
          <i class="fa fa-search"></i>
        </label>
        <div class="mdl-textfield__expandable-holder">
          <input type="text" name="q" class="mdl-textfield__input" id="header-search-input" />
        </div>
      </div>
        <?php wp_nav_menu(array(
            'theme_location' => 'header_menu'
        ));?>
    </div>
    <div class="mdl-layout__drawer-button">
      <i class="fa fa-bars"></i>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <?php wp_nav_menu(array(
        'theme_location' => 'drawer_menu'
    ));?>
    <!--<nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="#">文章归档</a>
      <a class="mdl-navigation__link" href="#">下载仓库</a>
      <a class="mdl-navigation__link" href="#">推荐图书</a>
      <a class="mdl-navigation__link" href="#">友情链接</a>
      <a class="mdl-navigation__link" href="#">留言板</a>
      <a class="mdl-navigation__link" href="#">关于我</a>
    </nav>-->
  </div>
  <main class="mdl-layout__content nicescroll">
