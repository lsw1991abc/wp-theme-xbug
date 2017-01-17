<?php
/**
 * 头部模块
 */
$templateDirUri = esc_url(get_template_directory_uri());
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <link href="<?php echo $templateDirUri; ?>/style.css" rel="stylesheet"/>
  <link rel="profile" href="#">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link rel="icon" href="<?php echo $templateDirUri ?>/images/xbug.ico"/>
  <!--[if lt IE 9]>
  <script src="<?php echo $templateDirUri ?>/static/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <h1>
        <?php
        if (has_custom_header()) {
          ?>
          <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>">
            <img src="<?php header_image(); ?>" class="xbug-layout__header-logo"/>
          </a>
          <?php
        } else {
          ?>
          <a href="<?php echo esc_url(home_url('/')) ?>"
             title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
          <small><?php bloginfo('description'); ?></small>
          <?php
        }
        ?>
      </h1>
      <div class="mdl-layout-spacer"></div>
      <?php
      get_search_form();
      if (has_nav_menu('header_menu')) {
        wp_nav_menu(array(
            'theme_location' => 'header_menu',
            'container' => 'nav'
        ));
      }
      ?>
    </div>
    <div class="mdl-layout__drawer-button">
      <i class="fa fa-bars"></i>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <?php wp_nav_menu(array(
        'theme_location' => 'drawer_menu',
        'container' => 'nav'
    )); ?>
  </div>
  <main class="mdl-layout__content nicescroll">
