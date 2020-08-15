<?php
/**
 * <header> content with top-nav content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<header class="header">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar navbar-dark">

      <?php if (has_custom_logo()) { ?>
      <?php echo get_custom_logo(); ?>
      <?php } else { ?>
      <a class="navbar-brand" href="<?php echo esc_attr( get_site_url() ); ?>"
        title="<?php echo esc_attr( 'Back to homepage', 'tonik' ); ?>">
        <img src="<?php echo esc_html( get_template_directory_uri() ); ?>/public/images/ico/test.svg" class="logo"
          alt="logo" />
      </a>
      <?php } ?>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <?php
        wp_nav_menu([
          'menu'            => 'top',
          'theme_location'  => 'top',
          'container'       => 'div',
          'container_id'    => 'navbarSupportedContent',
          'container_class' => 'collapse navbar-collapse',
          'menu_id'         => false,
          'menu_class'      => 'navbar-nav mr-auto',
          'depth'           => 2,
          'fallback_cb'     => 'bs4navwalker::fallback',
          'walker'          => new bs4navwalker()
        ]);
      ?>

      <form role="search" method="get" class="search-form form-inline my-2 my-lg-0"
        action="<?php echo home_url( '/' ); ?>">
        <label>
          <span class="screen-reader-text"><?php echo _x( '', 'label' ) ?></span>
          <input type="search" class="search-field form-control mr-sm-2"
            placeholder="<?php echo esc_attr_x( 'Looking for ...', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( '', 'label' ) ?>" />
        </label>
        <input type="submit" class="search-submit btn btn-outline-success my-2 my-sm-0"
          value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
      </form>
    </nav>
  </div>

  <!-- <?php // get_template_part( 'resources/templates/nav/nav', 'top' ); ?> -->
</header>