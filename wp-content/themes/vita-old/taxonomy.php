<div class="background background--grey background--into-panel">
    <div class="wrapper">
        <div class="grid__item tablet--nine-twelfths">
        	<div class="border-right-white">
                <section>
                    <h2 class="title-with-underline">Categories</h2>
                </section>
                <div class="grid">
                    <?php 
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array( 'post_type' => 'post', 'orderby' => 'date', 'order' => 'DESC', 'paged' => $paged);
                        $wp_query = new WP_Query($args);
                    
                        while ( have_posts() ) : the_post(); 
                    ?>
                    <article class="post">
                        <a class="post__link" href="<?php echo get_permalink(); ?>">
                            <div class="grid__item tablet--one-third">
                                <?php 
                                if ( has_post_thumbnail() ) { 
                                    the_post_thumbnail('thumbnail', array( 'class'	=> "post__image"));
                                }
                                ?>   	
                            </div>
                            <div class="grid__item tablet--two-thirds">
                                <h3 class="post__title"><?php the_title(); ?></h3>	
                                <p class="post__excerpt"><?php echo truncate($post->post_content, 170); ?> &nbsp;<span> MORE &raquo;</span></p>
                                <p class="post__author">By: <?php the_author(); ?></p>
                            </div>
                        </a>
                    </article>
                    <?php endwhile; wp_reset_query();  ?>
                    <?php if(function_exists('wp_paginate')) {
                        wp_paginate();
                    } ?>	
                    
                </div>
        	</div>
        </div>
        <div class="grid__item tablet--three-twelfths"> 
        	<aside class="blog-sidebar">
        		
                
 <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Category Sidebar')) : ?>

<?php endif; ?>

<?php get_template_part('templates/sidebar'); ?>
                
            </aside>
        </div>
    </div>
</div>