<?php
/**
 * <footer> content with bottom-nav content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<footer class="footer">
  <?php get_template_part( 'resources/templates/nav/nav', 'bottom' ); ?>

  <span>&copy; <?php echo Date('Y') ?></span>
</footer>