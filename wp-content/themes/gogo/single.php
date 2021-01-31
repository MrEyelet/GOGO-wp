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
    <?php if(get_field('hero_heading')) : ?>
      <h1 class="section__heading" ><?php the_field('hero_heading'); ?></h1>
    <?php endif; ?>
    <?php if(get_field('hero_desc')) : ?>
      <p class="section__desc"><?php the_field('hero_desc'); ?></p>
    <?php endif; ?>
    <?php get_template_part('template_parts/slider'); ?>
  </section>
  <section class="section">
    <?php if(get_field('section_heading', get_option( 'page_on_front' ))) : ?>
      <h1 class="section__heading"><?php the_field('section_heading', get_option( 'page_on_front' )); ?></h1>
    <?php endif; ?>
    <?php if(get_field('section_desc')) : ?>
      <p class="section__desc"><?php the_field('section_desc'); ?></p>
    <?php endif; ?>
    <?php get_template_part('template_parts/container'); ?>
  </section>
</article>
<?php get_footer(); ?>
