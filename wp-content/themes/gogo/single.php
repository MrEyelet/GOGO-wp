<?php get_header(); ?>
<article class="theme theme--dark">
  <section class="section">
    <h1 class="section__heading"><?php the_title(); ?></h1>
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
  <section class="section">
    <h2 class="section__heading"><?php the_field('section_heading', get_option( 'page_on_front' )); ?></h2>
    <?php get_template_part('template_parts/container'); ?>
  </section>
</article>
<?php get_footer(); ?>
