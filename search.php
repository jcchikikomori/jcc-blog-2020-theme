<?php
/**
 * Template for displaying search result
 *
 * @link https://codex.wordpress.org/Creating_a_Search_Page
 */
?>

<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-12 col-md-8 p-3">
      <?php get_template_part( 'resources/templates/content/content', 'search' ); ?>
    </div>
    <div class="col-12 col-md-4 p-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>