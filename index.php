<?php get_header(); ?>
<div class="container section">
  <h2>Blog</h2>
  <?php if (have_posts()): while (have_posts()): the_post(); ?>
    <article style="margin:16px 0;">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <div class="muted"><?php the_excerpt(); ?></div>
    </article>
  <?php endwhile; else: ?>
    <p>No posts yet.</p>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
