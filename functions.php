<?php
// Theme setup (title tag, HTML5)
add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);
});

// Enqueue main stylesheet (cache-busted)
add_action('wp_enqueue_scripts', function () {
  $ver = file_exists(get_stylesheet_directory() . '/style.css') ? filemtime(get_stylesheet_directory() . '/style.css') : '1.0';
  wp_enqueue_style('changeable-fe', get_stylesheet_uri(), [], $ver);
});

// (Perf) Remove block library CSS since we aren’t using Gutenberg on the front end
add_action('wp_enqueue_scripts', function () {
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('wp-block-library-theme');
  wp_dequeue_style('global-styles');
}, 100);
