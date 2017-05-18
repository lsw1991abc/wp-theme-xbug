<?php
if ( post_password_required() ) {
  return;
}
?>
<?php
$req      = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );
$html_req = ( $req ? " required='required'" : '' );
comment_form( array(
  'fields'               => array(
    'author' => '<p class="xbug-form--item">
                  <label for="xbug-comment-nickname">你的昵称</label>&nbsp;&nbsp;
                  <input class="xbug-input" type="text" id="xbug-comment-nickname" name="author" placeholder="你的昵称" size="30" maxlength="100" ' . $aria_req . $html_req . ' />' . ( $req ? ' <span class="required">*</span> ' : '' ) . '
                </p>',
    'email'  => '<p class="xbug-form--item">
                  <label for="xbug-comment-email">电子邮箱</label>&nbsp;&nbsp;
                  <input class="xbug-input" type="email" id="xbug-comment-email" name="email" placeholder="电子邮箱(不会被公开)" size="30" maxlength="100" ' . $aria_req . $html_req . ' />' . ( $req ? ' <span class="required">*</span> ' : '' ) . '
                 </p>',
    'url'    => '<p class="xbug-form--item">
                  <label for="xbug-comment-url">个人网站</label>&nbsp;&nbsp;
                  <input class="xbug-input" type="url" id="xbug-comment-url" name="url" placeholder="http(s)://" size="30" maxlength="200" />
                  </p>',
  ),
  'comment_notes_before' => '',
  'comment_field'        => '<p class="xbug-form--item" id="xbug-comment-content"><textarea class="xbug-textfield" rows= "5" cols="100" name="comment" maxlength="1000"></textarea></p>',
  'id_form'              => 'xbug-comment-form',
  'class_form'           => 'xbug-comment-form',
  'title_reply_before'   => '<p>',
  'title_reply_after'    => '</p>',
  'submit_button'        => '<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">发表评论</button>',
) );
if ( have_comments() ) {
  echo '<ul class="xbug-comment-list">';
  wp_list_comments( array(
    'short_ping' => true,
    'avatar_size'       => 64,
    'reply_text' => '<i class="fa fa-reply fa-lg" aria-hidden="true"></i> 回复',
    'callback' => 'xbug_comment_list'
  ) );
  echo '</ul>';
  the_comments_pagination( array(
    'prev_text' => '<span class="screen-reader-text">上一页</span>',
    'next_text' => '<span class="screen-reader-text">下一页</span>'
  ) );
}
if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) {
  echo '<p class="no-comments">已关闭评论!</p>';
}
?>
