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