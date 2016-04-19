<?php
/**
 * Template Name: Case Studies
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/content', 'case-studies'); ?>
<?php endwhile; ?>
