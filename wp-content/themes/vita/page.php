<?php while (have_posts()) : the_post(); ?>

	<div class="background background--grey background--into-panel background--no-padding-bottom">
        <div class="text-with-graphic">
            <div class="wrapper">
                <div class="grid__item tablet--two-thirds">
                    <section class="text-with-graphic-boxes-over-top">
                        <a name="anchor"></a>
						<?php the_content(); ?>
                    </section>
                    <section class="column-template">
						<?php get_template_part('templates/flexible-column'); ?>
                    </section>
                </div>
                <div class="grid__item tablet--one-third">
                    <img src="<?php the_field('add_banner_graphic'); ?>" alt=""/>
                    <?php get_template_part('templates/sidebar'); ?>
                </div>
            </div>
        </div>
    </div>
    
<?php endwhile; ?>
