<div class="background background--blue background--screen-height">
    <div class="wrapper">
        <div class="grid__item">
        	<section>
            	<h2 class="title-with-underline title-with-underline--white">Testimonials</h2>
            </section>
            
        	<div class="grid">
            <div class="testimonial-container">
				 <?php 
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array( 'post_type' => 'testimonials', 'orderby' => 'date', 'order' => 'DESC', 'paged' => $paged);
                    $wp_query = new WP_Query($args);
                
                    while ( have_posts() ) : the_post(); 
                ?>
                <div class="grid__item tablet--one-half">
                	<div class="testimonial">
                        <div class="testimonial__desc">
							<?php the_content(); ?>
                        </div>
                        <h2 class="testimonial__title"><?php the_title(); ?></h2>		
                    </div>
                </div>
                <?php endwhile;  ?>
                <?php if(function_exists('wp_paginate')) {
                    echo '<div class="grid__item">';
						wp_paginate();
					echo '</div>';
                } ?>
            </div>
            </div>
        </div>
    </div>
</div>