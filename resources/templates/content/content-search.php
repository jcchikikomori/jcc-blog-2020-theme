<?php
/**
 * Template part for displaying search result from search.php
 *
 * @link https://developer.wordpress.org/themes/basics/linking-theme-files-directories/
 */
?>

<section class="nes-container is-rounded is-dark">
  <h1>Search Results</h1>

  <?php while ( have_posts() ) : ?>
  <article>
    <?php the_post(); ?>
    <article>
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <header><?php the_title(); ?></header>
      </a>
      <p><?php the_excerpt(); ?></p>
    </article>
  </article>
  <?php endwhile; ?>
</section>