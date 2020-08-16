<?php
/**
 * The most generic template file in hierarchy.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-12 col-md-8 p-3">
      <?php if ( have_posts() ) : ?>
      <?php if ( is_home() && is_front_page() ) : ?>
      <?php get_template_part( 'resources/templates/content/content' ); ?>
      <?php else : ?>
      <?php while ( have_posts() ) : ?>
      <?php the_post(); ?>

      <?php get_template_part( 'resources/templates/content/content', get_post_type() ); ?>
      <?php endwhile; ?>
      <?php endif; ?>
      <?php endif; ?>
    </div>
    <div class="col-12 col-md-4 p-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>