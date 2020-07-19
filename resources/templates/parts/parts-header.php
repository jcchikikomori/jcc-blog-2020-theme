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
      <!-- <a class="navbar-brand" href="#">Navbar</a> -->

      <a class="navbar-brand" href="<?php echo esc_attr( get_site_url() ); ?>"
        title="<?php echo esc_attr( 'Back to homepage', 'tonik' ); ?>">
        <?php if (has_custom_logo()) { ?>
        <?php echo get_custom_logo(); ?>
        <?php } else { ?>
        <img src="<?php echo esc_html( get_template_directory_uri() ); ?>/public/images/ico/test.svg" class="logo"
          alt="logo" />
        <?php } ?>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form role="search" method="get" class="search-form form-inline my-2 my-lg-0"
          action="<?php echo home_url( '/' ); ?>">
          <label>
            <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
            <input type="search" class="search-field form-control mr-sm-2"
              placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
              value="<?php echo get_search_query() ?>" name="s"
              title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
          </label>
          <input type="submit" class="search-submit btn btn-outline-success my-2 my-sm-0"
            value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
        </form>

        <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
      </div>
    </nav>
  </div>

  <!-- <?php // get_template_part( 'resources/templates/nav/nav', 'top' ); ?> -->
</header>