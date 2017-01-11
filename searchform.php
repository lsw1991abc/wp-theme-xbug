<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 */
?>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right">
  <label class="mdl-button mdl-js-button mdl-button--icon" for="header-search-input">
    <i class="fa fa-search"></i>
  </label>
  <div class="mdl-textfield__expandable-holder">
    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <input type="search" class="mdl-textfield__input" placeholder="关键字，回车键搜索" name="s" id="header-search-input" />
    </form>
  </div>
</div>
