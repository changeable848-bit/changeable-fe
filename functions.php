<?php
/**
 * Changeable Front-End Theme Functions
 */

// Theme setup
add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  add_theme_support('html5', [
    'search-form','comment-form','comment-list','gallery','caption','style','script'
  ]);
});

// Enqueue main stylesheet (cache-busted)
add_action('wp_enqueue_scripts', function () {
  $style_path = get_stylesheet_directory() . '/style.css';
  $ver = file_exists($style_path) ? filemtime($style_path) : '1.0.3';
  wp_enqueue_style('changeable-fe', get_stylesheet_directory_uri() . '/style.css', [], $ver);
});

// Strip Gutenberg CSS
add_action('wp_enqueue_scripts', function () {
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('wp-block-library-theme');
  wp_dequeue_style('global-styles');
}, 100);
