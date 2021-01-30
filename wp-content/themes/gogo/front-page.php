<?php /* Template Name: FrontPage */ ?>

<?php get_header(); ?>

<?php $hero_heading = get_field('hero_heading'); ?>
<?php $hero_desc = get_field('hero_desc'); ?>
<?php $section_heading = get_field('section_heading'); ?>
<?php $section_desc = get_field('section_desc'); ?>
<article class="theme theme--dark dot-ornate">
  <section class="section">
    <?php if($hero_heading) : ?><h1><?php echo $hero_heading; ?></h1><?php endif; ?>
    <?php if($hero_desc) : ?><p><?php echo $hero_desc; ?></p><?php endif; ?>
    <?php get_template_part('template_parts/slider'); ?>
  </section>
</article>
<article class="theme theme--light">
  <section class="section">
    <h1><?php if($section_heading) : ?><?php echo $section_heading; ?><?php endif; ?></h1>
    <p><?php if($section_desc) : ?><?php echo $section_desc; ?><?php endif; ?></p>
    <?php get_template_part('template_parts/container'); ?>
  </section>
</article>

<?php get_footer(); ?>


