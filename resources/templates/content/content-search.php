<?php
/**
 * Template part for displaying search result from search.php
 *
 * @link https://developer.wordpress.org/themes/basics/linking-theme-files-directories/
 */
?>

<section class="section-container">
  <?php if (have_posts()) : ?>
  <h1 class="text-uppercase -title"><u>Search Results</u></h1>
  <?php while ( have_posts() ) : ?>
  <article class="article-container">
    <?php the_post(); ?>
    <?php get_template_part( 'resources/templates/common/common', 'article' ); ?>
  </article>
  <?php endwhile; ?>
  <?php else : ?>
  <h1 class="text-uppercase -title">OOPS!</h1>
  <h2>No Results Found!</h2>
  <?php endif; ?>
</section>