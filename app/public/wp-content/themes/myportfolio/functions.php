<?php

// Set content width
if(!isset($content_width)) {
  $content_width = 723;
}

function custom_theme_setup() {
  // Show feed links in head
  add_theme_support('automatic_feed_links');

  // Show title tag dynamically
  add_theme_support('title-tag');

  // Activate CSS for block editor
  add_theme_support('wp-block-styles');

  // Make embedded content responsive
  add_theme_support('responsive-embeds');

  // Thumbnail
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(231, 177, false);

  // Activate Custom menu. And Set the position of the menu.
  register_nav_menus(
    array(
      'globalnav' => 'グローバルナビゲーション',
    )
  );
}
add_action('after_setup_theme', 'custom_theme_setup');


function myportfolio_scripts() {
  wp_enqueue_style(
    'base-style',           // handle name
    get_stylesheet_uri(),   // file path
    array(),                // dependency 
    '1.0',                  // version
    'all'                   // media type
  );
}
add_action('wp_enqueue_scripts', 'myportfolio_scripts');

// Widget
function custom_widget_register() {
  register_sidebar(array(
    'name' => 'サイドバーウィジェットエリア',
    'id' => 'sidebar-widget',
    'description' => 'ブログページのサイドバーに表示',
    'before_widget' => '<div id="%1$s" class="c-widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="c-widget__title">',
    'after_title' => '</h2>',
  ));
}
add_action('widgets_init', 'custom_widget_register');