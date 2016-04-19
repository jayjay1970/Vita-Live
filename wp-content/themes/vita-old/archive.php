
<div class="background background--grey background--into-panel">
    <div class="wrapper">
        <div class="grid__item tablet--nine-twelfths">
        	<div class="border-right-white">
                <section>
                    <h2 class="title-with-underline">
						<?php
                        if ( is_category() ) {
                            printf( __( 'Category Archives: %s', 'mattbanks' ), '<span>' . single_cat_title( '', false ) . '</span>' );
                        
                        } elseif ( is_tag() ) {
                            printf( __( 'Tag Archives: %s', 'mattbanks' ), '<span>' . single_tag_title( '', false ) . '</span>' );
                        
						
                        } elseif ( is_author() ) {
                            /* Queue the first post, that way we know
                             * what author we're dealing with (if that is the case).
                            */
                            the_post();
                            printf( __( 'Author Archives: %s', 'mattbanks' ), '<span class="vcard"><a class="url fn n" href="' . get_author_posts_url( get_the_author_meta( "ID" ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
                            /* Since we called the_post() above, we need to
                             * rewind the loop back to the beginning that way
                             * we can run the loop properly, in full.
                             */
                            rewind_posts();
                        
                        } elseif ( is_day() ) {
                            printf( __( 'Daily Archives: %s', 'mattbanks' ), '<span>' . get_the_date() . '</span>' );
                        
                        } elseif ( is_month() ) {
                            printf( __( 'Monthly Archives: %s', 'mattbanks' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
                        
                        } elseif ( is_year() ) {
                            printf( __( 'Yearly Archives: %s', 'mattbanks' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
                        
                        } else {
                            _e( 'Archives', 'mattbanks' );
                        
                        }
                        ?>
                    </h2>
                </section>
                <div class="grid">
                    <?php while ( have_posts() ) : the_post(); ?>
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
                    <?php endwhile; ?>
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