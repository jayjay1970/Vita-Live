<?php
/**
 * Template Name: Blog
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/content', 'blog-roll'); ?>
<?php endwhile; ?>
