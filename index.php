<?php get_header(); ?>

<section class="hero">
  <div class="hero-inner">
    <div class="hero-text">
      <h1><span class="ai">Ai</span> Agency</h1>
      <p>This is the default template (index.php). If you see this, front-page.php isn’t being used yet, but the hero still shows by design.</p>
      <div class="hero-ctas">
        <a class="btn btn-black" href="<?php echo esc_url(home_url('/contact/')); ?>">Free Discovery Workshop</a>
        <a class="btn btn-outline" href="<?php echo esc_url(home_url('/solutions/')); ?>">See how we can help you</a>
      </div>
    </div>
    <div class="hero-media">
      <img src="https://picsum.photos/id/1067/1600/1200" alt="Hero image">
    </div>
  </div>
</section>

<?php get_footer(); ?>
