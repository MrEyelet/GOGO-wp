<?php /* Template Name: FrontPage */ ?>

<?php get_header(); ?>

<article class="theme theme--dark dot-ornate">
  <section class="section">
    <?php if(get_field('hero_heading')) : ?><h1><?php the_field('hero_heading'); ?></h1><?php endif; ?>
    <?php if(get_field('hero_desc')) : ?><p><?php the_field('hero_desc'); ?></p><?php endif; ?>
    <?php get_template_part('template_parts/slider'); ?>
  </section>
</article>
<article class="theme theme--light">
  <section class="section">
    <h1><?php if(get_field('section_heading')) : ?><?php the_field('section_heading'); ?><?php endif; ?></h1>
    <p><?php if(get_field('section_desc')) : ?><?php the_field('section_desc'); ?><?php endif; ?></p>
    <?php get_template_part('template_parts/container'); ?>
  </section>
</article>

<?php get_footer(); ?>


