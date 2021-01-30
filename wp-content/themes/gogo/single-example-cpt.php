<?php get_header(); ?>
<article class="theme theme--dark">
  <section class="section">
    <h1><?php the_title(); ?></h1>
  </section>
  <section class="section">
    <div class="container">
      <div class="container__inner container__inner--subpage">
        <?php the_content(); ?>
      </div>
    </div>
  </section>
</article>
<?php get_footer(); ?>
