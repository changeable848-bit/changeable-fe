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
<section class="logos-intro" aria-labelledby="trusted-by">
  <div class="logos-row" role="list" aria-label="Trusted by">
    <!-- OpenAI -->
    <span class="logo" role="img" aria-label="OpenAI">
      <svg viewBox="0 0 256 64" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path d="M33.7 24.2c0-8.1-6.6-14.7-14.7-14.7S4.3 16.1 4.3 24.2c0 3.6 1.3 6.9 3.4 9.4-1.5 2.3-2.3 4.9-2.3 7.7 0 8.1 6.6 14.7 14.7 14.7 4.5 0 8.6-2 11.3-5.2 1.7.8 3.6 1.2 5.6 1.2 8.1 0 14.7-6.6 14.7-14.7 0-2.8-.8-5.4-2.1-7.6 1.4-2.3 2.1-4.9 2.1-7.7 0-8.1-6.6-14.7-14.7-14.7-3 0-5.8.9-8.1 2.4z"/>
        <path d="M69 49V15h9.6c7.7 0 12.8 4.8 12.8 11.9 0 7.2-5.1 12.1-12.8 12.1H78v10H69zm9-17.7h.5c3.5 0 5.7-2.1 5.7-5.3 0-3.3-2.2-5.3-5.7-5.3H78v10.6z"/>
      </svg>
    </span>

    <!-- n8n -->
    <span class="logo" role="img" aria-label="n8n">
      <svg viewBox="0 0 256 64" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <circle cx="28" cy="32" r="12"/>
        <rect x="54" y="20" width="16" height="24" rx="8"/>
        <rect x="78" y="20" width="16" height="24" rx="8"/>
        <path d="M114 20h16v24h-16zM114 20a12 12 0 1124 0v24a12 12 0 11-24 0V20z"/>
      </svg>
    </span>

    <!-- Perplexity -->
    <span class="logo" role="img" aria-label="Perplexity">
      <svg viewBox="0 0 256 64" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <circle cx="32" cy="32" r="16"/>
        <path d="M70 49V15h18c9 0 15 6 15 17s-6 17-15 17H70zm18-9c4 0 7-3 7-8s-3-8-7-8h-9v16h9zM120 49V15h32v8h-23v18h23v8h-32z"/>
      </svg>
    </span>

    <!-- Copilot -->
    <span class="logo" role="img" aria-label="Copilot">
      <svg viewBox="0 0 256 64" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <rect x="16" y="16" width="32" height="32" rx="8"/>
        <rect x="28" y="12" width="8" height="40" rx="4"/>
        <path d="M72 32c0-10 7-17 18-17 8 0 14 3 17 9l-8 4c-2-3-5-5-9-5-6 0-9 4-9 9s3 9 9 9c4 0 7-2 9-5l8 4c-3 6-9 9-17 9-11 0-18-7-18-17z"/>
      </svg>
    </span>
  </div>

  <div class="intro-text" id="trusted-by">
    <h2>We are a creative, bold AI agency based in New Zealand</h2>
    <p>Combining AI strategies, workshops, automation and customised solutions,
       we embed a human-first approach to AI and deliver measurable outcomes.</p>

    <div class="intro-stats" role="list">
      <div class="stat" role="listitem">
        <strong>28+</strong>
        years experience delivering productivity & profitability gains.
      </div>
      <div class="stat" role="listitem">
        <strong>200+</strong>
        clients including SMEs, enterprise and government organisations.
      </div>
      <div class="stat" role="listitem">
        <strong>250+</strong>
        successfully completed digital transformation projects.
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
