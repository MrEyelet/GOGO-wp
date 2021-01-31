<?php get_header(); ?>

<?php 
$args = array( 'posts_per_page' => 10 );
$the_query = new WP_Query( $args ); 
?>
<article class="theme theme--light">
  <section class="section">
    <?php if ( $the_query->have_posts() ) : ?>
    <div class="container">
      <?php if(get_field('subheading', get_option( 'page_on_front' ))) : ?>
        <h2 class="section__heading"><?php echo the_field('subheading', get_option( 'page_on_front' )); ?></h2>
      <?php endif; ?>
      <div class="container__inner">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="box box--link">
          <?php the_title('<h3 class="box__heading">', '</h3>'); ?>
          <?php if(has_excerpt()) : ?>
            <p class="box__desc"><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
          <?php endif; ?>
          <?php if (has_post_thumbnail()) : ?>
            <div class="box__ic"><?php the_post_thumbnail(); ?></div>
          <?php endif; ?>
        </a>
        <?php endwhile;
        wp_reset_postdata(); ?>
      </div>  
    </div>
    <?php endif; ?>
  </section>
</article>
<?php get_footer();?>