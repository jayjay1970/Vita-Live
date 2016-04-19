<div class="logo-slider">
    <div class="owl-carousel owl-carousel-clients">
        <?php 
            $args = array( 
                'post_type' => 'clientlogos', 
                'posts_per_page' => -1
            );
            $wp_query = new WP_Query($args);
        
            while ( have_posts() ) : the_post(); 
        ?>
        <div class="client-logo">
            <?php 
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('clientlogo');
                }
            ?>
        </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
</div>
<?php if( get_field('strapline_text', 18) ): ?>
	<div class="logo-strapline"><?php the_field('strapline_text', 18); ?></div>
<?php endif; ?>

