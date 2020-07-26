<?php
/**
 * Template that handle 404 requests on server
 *
 * @link https://developer.wordpress.org/themes/functionality/404-pages/
 */
?>

<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <section>
        <article>
          <h1 class="text-uppercase"><?php echo esc_html( 'Page not found', 'tonik' ); ?></h1>

          <h2>
            <a href="<?php echo esc_attr( home_url() ); ?>">
              <?php echo esc_html( 'Homepage', 'tonik' ); ?>
            </a>
          </h2>
        </article>
      </section>
    </div>
    <div class="col-sm-4">
      <aside>
        <?php get_sidebar(); ?>
      </aside>
    </div>
  </div>
</div>

<?php get_footer(); ?>