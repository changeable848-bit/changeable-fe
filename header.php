<?php
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="row">
    <div class="brand">Changeable</div>
    <nav class="nav" aria-label="Primary">
      <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
      <a href="<?php echo esc_url(home_url('/solutions/')); ?>">Solutions</a>
      <a href="<?php echo esc_url(home_url('/portfolio/')); ?>">Portfolio</a>
      <a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a>
      <a href="<?php echo esc_url(home_url('/about/')); ?>">About</a>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a>
    </nav>
  </div>
</header>

<main>
