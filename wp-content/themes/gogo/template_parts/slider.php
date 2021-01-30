<?php $args = array( 'post_type' => 'example-cpt', 'posts_per_page' => 10 );
$the_query = new WP_Query( $args ); ?>
<?php if ( $the_query->have_posts() ) : ?>
<div class="slider">
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="slider__slide box">
      <?php the_title('<h3 class="box__heading">', '</h3>'); ?>
      <?php if(has_excerpt()) : ?>
        <p class="box__desc"><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
      <?php endif; ?>
      <?php if (has_post_thumbnail()) : ?>
        <div class="box__ic"><?php the_post_thumbnail(); ?></div>
      <?php endif; ?>
    </div>
    <?php endwhile;
    wp_reset_postdata(); ?>
</div>
<?php endif; ?>
