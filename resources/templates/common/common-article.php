<?php
/**
 * <article> common component that display basic information about post in loop. You can manage other commons components in this folder.
 */
?>

<?php global $post; ?>

<div class="post-container <?php echo get_post_type(); ?>">
  <header class="article-header">
    <?php if (is_single()) : ?>
    <div class="-thumbnail">
      <?php the_post_thumbnail(); ?>
    </div>
    <br /><br />
    <h1 class="text-uppercase -title">
      <?php the_title(); ?>
    </h1>
    <?php elseif (is_home() || is_front_page()) : ?>
    <h1 class="text-uppercase -title">
      <?php the_title(); ?>
    </h1>
    <div class="-thumbnail">
      <?php the_post_thumbnail(); ?>
    </div>
    <?php else : ?>
    <a class="-title-link" href="<?php echo get_permalink($post->ID) ?>">
      <h1 class="text-uppercase -title">
        <?php the_title(); ?>
      </h1>
    </a>
    <?php endif ?>

    <div class="entry-meta-container">
      <span class="meta-author">By <?php echo get_the_author_meta('first_name'); ?>
        <?php echo get_the_author_meta('last_name'); ?> | </span>
      <span class="meta-date"><?php echo get_the_date('F j, Y'); ?></span>
    </div>
  </header>

  <?php // POST CONTENT ?>
  <div class="article-content">
    <?php
			if (is_single() || is_home() || is_front_page()) {
				the_content();
      } else {
        the_excerpt();
			}
		?>
  </div>
</div>