<?php get_header(); ?>
<article class="theme theme--dark">
  <section class="section">
    <h1><?php the_title(); ?></h1>
  </section>
  <?php if( '' !== get_post()->post_content ) : ?>
    <section class="section">
      <div class="container">
        <div class="container__inner container__inner--subpage">
          <?php the_content(); ?>
        </div>
      </div>
    </section>
  <?php endif; ?>
</article>
<?php get_footer(); ?>
