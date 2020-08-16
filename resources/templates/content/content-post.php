<?php
/**
 * Template part for displaying page content in single-post.php
 *
 * @link https://developer.wordpress.org/themes/basics/linking-theme-files-directories/
 */
?>

<section class="section-container">
  <h1 class="text-uppercase -title"><u><?php single_cat_title(); ?></u></h1>
  <article class="article-container">
    <?php get_template_part( 'resources/templates/common/common', 'article' ); ?>
  </article>
</section>