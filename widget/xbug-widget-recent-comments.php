<?php

/**
 * Widget API: Xbug_Widget_Recent_Comments class
 *
 * User: wizard
 * Date: 2017/1/15
 * Time: 01:29
 */
class Xbug_Widget_Recent_Comments extends WP_Widget {

  public function __construct() {
    $widget_ops = array(
        'classname' => 'widget_recent_comments',
        'description' => __('您站点近期的评论。', 'xBug'),
        'customize_selective_refresh' => true,
    );
    parent::__construct('recent-comments', '近期评论', $widget_ops);
    $this->alt_option_name = 'widget_recent_comments';

    if (is_active_widget(false, false, $this->id_base) || is_customize_preview()) {
      add_action('wp_head', array($this, 'recent_comments_style'));
    }
  }

  public function recent_comments_style() {

    if (!current_theme_supports('widgets') // Temp hack #14876
        || !apply_filters('show_recent_comments_widget_style', true, $this->id_base)
    )
      return;
    ?>
    <style type="text/css">.recentcomments a {
        display: inline !important;
        padding: 0 !important;
        margin: 0 !important;
      }</style>
    <?php
  }

  public function widget($args, $instance) {
    if (!isset($args['widget_id']))
      $args['widget_id'] = $this->id;

    $output = '';
    $title = (!empty($instance['title'])) ? $instance['title'] : __('近期评论', 'xBug');

    $title = apply_filters('widget_title', $title, $instance, $this->id_base);

    $number = (!empty($instance['number'])) ? absint($instance['number']) : 5;
    if (!$number)
      $number = 5;

    $comments = get_comments(apply_filters('widget_comments_args', array(
        'number' => $number,
        'status' => 'approve',
        'post_status' => 'publish',
        'type' => 'comment',
        'user_id' => 0
    )));

    $output .= $args['before_widget'];
    if ($title) {
      $output .= $args['before_title'] . $title . $args['after_title'];
    }

    $output .= '<ul id="recentcomments">';
    if (is_array($comments) && $comments) {
      $post_ids = array_unique(wp_list_pluck($comments, 'comment_post_ID'));
      _prime_post_caches($post_ids, strpos(get_option('permalink_structure'), '%category%'), false);

      foreach ((array) $comments as $comment) {
        $output .= '<li class="recentcomments">';
        $output .= sprintf(__('%1$s   %2$s', 'xBug'),
            '<span class="comment-author-link">' . get_avatar($comment->comment_author_email, $size = '32') . '</span>',
            '&nbsp;<a href="' . esc_url(get_comment_link($comment)) . '">' . $comment->comment_content . '</a>'
        );
        $output .= '</li>';
      }
    }
    $output .= '</ul>';
    $output .= $args['after_widget'];

    echo $output;
  }

  public function update($new_instance, $old_instance) {
    $instance = $old_instance;
    $instance['title'] = sanitize_text_field($new_instance['title']);
    $instance['number'] = absint($new_instance['number']);

    return $instance;
  }

  public function form($instance) {
    $title = isset($instance['title']) ? $instance['title'] : '';
    $number = isset($instance['number']) ? absint($instance['number']) : 5;
    ?>
    <p><label
          for="<?php echo $this->get_field_id('title'); ?>"><?php __('标题:', 'xBug'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
             name="<?php echo $this->get_field_name('title'); ?>" type="text"
             value="<?php echo esc_attr($title); ?>"/></p>

    <p><label
          for="<?php echo $this->get_field_id('number'); ?>"><?php __('显示数量:', 'xBug'); ?></label>
      <input class="tiny-text" id="<?php echo $this->get_field_id('number'); ?>"
             name="<?php echo $this->get_field_name('number'); ?>" type="number" step="1" min="1"
             value="<?php echo $number; ?>" size="3"/></p>
    <?php
  }

  public function flush_widget_cache() {
    _deprecated_function(__METHOD__, '4.4.0');
  }
}

unregister_widget('WP_Widget_Recent_Comments');
register_widget('Xbug_Widget_Recent_Comments');

?>
