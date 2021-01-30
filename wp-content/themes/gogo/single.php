<?php get_header(); ?>
<article class="theme theme--dark">
  <section class="section">
    <h1><?php the_title(); ?></h1>
  </section>
  <section class="content theme theme--light">
    <div class="content__inner">
      <?php the_content(); ?>
    </div>
  </section>
</article>
<?php get_footer(); ?>
