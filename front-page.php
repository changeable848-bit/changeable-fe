<?php get_header(); ?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="grid">

      <div class="left">
        <div class="blush">
          <h1><span class="ai">Ai</span> Agency</h1>
          <p>Assisting business to successfully transform and thrive in the AI era. Simple, practical, and without disruption.</p>

          <div class="ctas">
            <a class="btn btn-black" href="<?php echo esc_url(home_url('/contact/')); ?>">Free Discovery Workshop</a>
            <a class="btn btn-outline" href="<?php echo esc_url(home_url('/solutions/')); ?>">See how we can help you</a>
          </div>
        </div>
      </div>

      <div class="media">
        <?php
          $hero_local = get_stylesheet_directory_uri() . '/assets/img/hero.jpg';
        ?>
        <img src="<?php echo esc_url($hero_local); ?>"
             alt="Hero image"
             onerror="this.onerror=null;this.src='https://picsum.photos/id/1067/1400/1000';">
        <div class="card">See how we can help you</div>
      </div>

    </div>
  </div>
</section>

<!-- More sections will be added below, once hero is approved -->

<?php get_footer(); ?>
