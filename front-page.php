<?php get_header(); ?>

<section class="hero">
  <div class="hero-inner">

    <div class="hero-text">
      <h1><span class="ai">Ai</span> Agency</h1>
      <p>Assisting business to successfully transform and thrive in the AI era. Simple, practical, and without disruption.</p>
      <div class="hero-ctas">
        <a class="btn btn-black" href="<?php echo esc_url(home_url('/contact/')); ?>">Free Discovery Workshop</a>
        <a class="btn btn-outline" href="<?php echo esc_url(home_url('/solutions/')); ?>">See how we can help you</a>
      </div>
    </div>

    <div class="hero-media">
      <?php $hero = get_stylesheet_directory_uri() . '/assets/img/hero.jpg'; ?>
      <img src="<?php echo esc_url($hero); ?>"
           alt="Hero image"
           onerror="this.onerror=null;this.src='https://picsum.photos/id/1067/1600/1200';">
    </div>

  </div>
</section>

<!-- Logo strip + intro -->
<section class="logos-intro">
  <div class="logos-row">
    <img src="https://via.placeholder.com/120x40?text=OpenAI" alt="OpenAI">
    <img src="https://via.placeholder.com/120x40?text=n8n" alt="n8n">
    <img src="https://via.placeholder.com/120x40?text=Perplexity" alt="Perplexity">
    <img src="https://via.placeholder.com/120x40?text=Copilot" alt="Copilot">
  </div>

  <div class="intro-text">
    <h2>We are a creative, bold AI agency based in New Zealand</h2>
    <p>Combining AI strategies, workshops, automation and customised solutions, 
    we embed a human-first approach to AI and deliver measurable outcomes.</p>

    <div class="intro-stats">
      <div class="stat">
        <strong>28+</strong>
        years experience delivering productivity & profitability gains.
      </div>
      <div class="stat">
        <strong>200+</strong>
        clients including SMEs, enterprise and government organisations.
      </div>
      <div class="stat">
        <strong>250+</strong>
        successfully completed digital transformation projects.
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
