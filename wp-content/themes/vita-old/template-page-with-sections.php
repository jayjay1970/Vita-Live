<?php
/**
 * Template Name: Page with sections
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <a name="anchor"></a>
  <?php get_template_part('templates/flexible-page'); ?>
<?php endwhile; ?>
