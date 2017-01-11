<?php
if ( post_password_required() ) {
  return;
}
?>
<?php
comment_form( array(
  'fields'               => array(
    'author' => '<p class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="xbug-comment-nickname" name="author" ' . $aria_req . $html_req . ' />
                  <label class="mdl-textfield__label" for="xbug-comment-nickname">' . ( $req ? ' <span class="required">*</span> ' : '' ) . '昵称</label>
                  <span class="mdl-textfield__error">请输入有效昵称</span>
                </p>',
    'email'  => '<p class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="email" id="xbug-comment-email" name="email" ' . $aria_req . $html_req . ' />
                  <label class="mdl-textfield__label" for="xbug-comment-email">' . ( $req ? ' <span class="required">*</span> ' : '' ) . '电子邮件(不会被公开)</label>
                  <span class="mdl-textfield__error">请输入有效电子邮件地址</span>
                 </p>',
    'url'    => '<p class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="url" id="xbug-comment-url" name="url" size="30" maxlength="200" />
                  <label class="mdl-textfield__label" for="xbug-comment-url">站点 http(s)://</label>
                  <span class="mdl-textfield__error">请输入有效站点地址</span>
                  </p>',
  ),
  'comment_notes_before' => '',
  'comment_field'        => '<p class="mdl-textfield mdl-js-textfield" id="xbug-comment-content"><textarea class="mdl-textfield__input" type="text" rows= "3" name="comment" maxlength="65525"></textarea><label class="mdl-textfield__label" for="xbug-comment-content">* 评论内容</label></p>',
  'id_form'              => 'xbug-comment-form',
  'class_form'           => 'xbug-comment-form',
  'title_reply_before'   => '<p>',
  'title_reply_after'    => '</p>',
  'submit_button'        => '<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">发表评论</button>',
) );
if ( have_comments() ) {
  echo '<ul>';
  wp_list_comments( array(
    'short_ping' => true,
    'avatar_size'       => 64,
    'reply_text' => '回复',
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
