<?php
/**
 * Template Name: Our promise
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'our-promise'); ?>
  <a name="anchor"></a>
  <?php get_template_part('templates/flexible-page'); ?>
<?php endwhile; ?>
