<?php get_header(); ?>

<section class="hero">
  <div class="hero-inner">

    <!-- Strawberry panel -->
    <div class="hero-text">
      <h1><span class="ai">Ai</span> Agency</h1>
      <p>Assisting business to successfully transform and thrive in the AI era. Simple, practical, and without disruption.</p>
      <div class="hero-ctas">
        <a class="btn btn-black" href="<?php echo esc_url(home_url('/contact/')); ?>">Free Discovery Workshop</a>
        <a class="btn btn-outline" href="<?php echo esc_url(home_url('/solutions/')); ?>">See how we can help you</a>
      </div>
    </div>

    <!-- Image matches height exactly -->
    <div class="hero-media">
      <?php
        // Use your own image in /assets/img/hero.jpg; falls back to a placeholder if missing
        $hero = get_stylesheet_directory_uri() . '/assets/img/hero.jpg';
      ?>
      <img src="<?php echo esc_url($hero); ?>"
           alt="Hero image"
           onerror="this.onerror=null;this.src='https://picsum.photos/id/1067/1600/1200';">
    </div>

  </div>
</section>

<?php get_footer(); ?>
