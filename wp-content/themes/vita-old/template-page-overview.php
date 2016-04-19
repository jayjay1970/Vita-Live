<?php
/**
 * Template Name: Page Overview
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/content', 'page'); ?>
    <div class="background background--grey">
        <div class="wrapper">
        	<div class="page-boxes-over-banner">
                <div class="page-boxes page-boxes--absolute">
                	<?php get_template_part('components/page-boxes-over-image'); ?>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>
