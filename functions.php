<?php

function my_scripts()
{
    wp_enqueue_script('modernizr', get_template_directory_uri(). '/js/modernizr-custom.js', array(), '1.0', true);
    wp_enqueue_script('zoomslider', get_template_directory_uri(). '/js/dist/jquery.zoomslider.min.js', array(), '1.0', true);
    wp_enqueue_script('iscroll', get_template_directory_uri(). '/js/iscroll.js', array(), '1.0', true);
    wp_enqueue_script('scroll', get_template_directory_uri(). '/js/menuScroll.js', array(), '1.0', true);
    wp_enqueue_script('main', get_template_directory_uri(). '/js/main.js', array(), '1.0', true);
    wp_enqueue_script('drawer', get_template_directory_uri(). '/js/drawer.min.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'my_scripts');

add_action('init', 'create_news');
function create_news()
{
    register_post_type('blog', array(
    'labels' => array(
    'name' => 'ブログ',
    'singular_name' => 'ブログ',
  ),
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'query_var' => true,
  'rewrite' => true,
  'capability_type' => 'post',
  'has_archive' => true,
  'hierarchical' => false,
  'menu_position' => 5,
  'supports' => array('title', 'editor', 'thumbnail')
  ));
 
    // 追加した箇所
    register_taxonomy('blogs_category', 'blog', array(
    'hierarchical' => true,
    'label' => 'カテゴリー',
    'show_ui' => true,
    'public' => true
  ));
 
    register_taxonomy('blogs_tag', 'blog', array(
      'hierarchical' => false,
      'label' => 'タグ',
      'show_ui' => true,
      'public' => true
    ));
    add_theme_support('post-thumbnails');
}
/*抜粋の文字数設定*/
function wpdocs_custom_excerpt_length($length)
{
    return 50;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);

function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news'; // 任意のURL
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
