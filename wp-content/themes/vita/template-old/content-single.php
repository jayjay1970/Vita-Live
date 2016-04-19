<?php while (have_posts()) : the_post(); ?>

    <div class="background background--grey background--into-panel">
        <div class="wrapper">
            <div class="grid__item tablet--nine-twelfths">
                <div class="border-right-white">
                    <section>
                        <h2 class="title-with-underline">Blog</h2>
                        <?php 
                                if ( has_post_thumbnail() ) { 
                                    the_post_thumbnail('thumbnail', array( 'class'	=> "post__image"));
                                }
                                ?>  	
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
                        
                        <div class="sharethis">
                            <p class="share-text">Share this page</p>
                            <!-- Go to www.addthis.com/dashboard to customize your tools -->
                            <div class="addthis_sharing_toolbox"></div>
                        </div>
                        
                        <div class="comments-container">
                            <?php comments_template(); ?>
                        </div>
                    </section>
                </div>
            </div>
            <div class="grid__item tablet--three-twelfths">
                <aside class="blog-sidebar">
                    <?php $id = 65; $p = get_page($id); echo apply_filters('the_content', $p->post_content); ?>
                    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Category Sidebar')) : ?>

<?php endif; ?>

<?php get_template_part('templates/sidebar'); ?>
                </aside>
            </div>
        </div>
    </div>

<?php endwhile; ?>