<?php
/**
 * This is the template that displays all of the <head> section and <header> section.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport"
    content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php wp_title( '-', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php // TODO: Separate as a fragment ?>
  <div class="modal-container">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- UNDER CONSTRUCTION MODAL -->
          <dialog class="nes-dialog is-dark" id="dialog-dark">
            <form method="dialog">
              <p class="title">The current design was not yet done!</p>
              <p>
                Currently working for improvements then polishing before<br />
                pushing to the first 'OFFICIAL' release.
              </p>
              <menu class="dialog-menu p-0 float-right">
                <!-- <button class="nes-btn">Cancel</button> -->
                <button id="dialog-dark-dismiss-btn" class="nes-btn is-primary">Okay</button>
              </menu>
            </form>
          </dialog>
        </div>
      </div>
    </div>
  </div>

  <?php get_template_part( 'resources/templates/parts/parts', 'header' ); ?>

  <div class="content-container">