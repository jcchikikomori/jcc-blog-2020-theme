<?php
/**
 * <article> common component that display basic information about post in loop. You can manage other commons components in this folder.
 */
?>

<header class="article-header">
  <div class="-thumbnail">
    <?php the_post_thumbnail(); ?>
  </div>
  <br /><br />
  <h1 class="text-uppercase -title"><?php the_title(); ?></h1>
</header>

<div class="article-content">
  <?php the_content(); ?>
</div>