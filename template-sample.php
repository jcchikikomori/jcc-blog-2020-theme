<?php
/**
 * Template Name: Sample Template
 *
 * This is custom template, that you can select from template option when adding new page/post/custom-post.
 * To modify template, simply rename this file and change Template Name below
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1><?php the_title(); ?></h1>

      <p>This is a sample custom-template content. To edit this text, please modify 'template-sample.php' file</p>
    </div>
  </div>
</div>

<?php get_footer(); ?>