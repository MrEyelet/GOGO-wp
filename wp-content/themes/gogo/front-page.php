<?php /* Template Name: FrontPage */ ?>

<?php get_header(); ?>

<article class="theme theme--dark dot-ornate">
  <section class="section">
    <?php if(get_field('hero_heading')) : ?>
      <h1 class="section__heading"><?php the_field('hero_heading'); ?></h1>
    <?php endif; ?>
    <?php if(get_field('hero_desc')) : ?>
      <p class="section__desc"><?php the_field('hero_desc'); ?></p>
    <?php endif; ?>
    <?php get_template_part('template_parts/slider'); ?>
  </section>
</article>
<article class="theme theme--light">
  <section class="section">
    <?php if(get_field('section_heading', get_option( 'page_on_front' ))) : ?>
      <h1 class="section__heading"><?php the_field('section_heading'); ?></h1>
    <?php endif; ?>
    <?php if(get_field('section_desc')) : ?>
      <p class="section__desc"><?php the_field('section_desc'); ?></p>
    <?php endif; ?>
    <?php get_template_part('template_parts/container'); ?>
  </section>
</article>

<?php get_footer(); ?>


