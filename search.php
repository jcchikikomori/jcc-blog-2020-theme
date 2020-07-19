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
    <div class="col-12">
      <?php get_template_part( 'resources/templates/content/content', 'search' ); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>