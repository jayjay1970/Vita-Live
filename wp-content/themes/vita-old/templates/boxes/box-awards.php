<div class="page-box page-box--outline" style="background-color:<?php the_field('box_background_colour'); ?>">
    <h4 class="page-box__heading">Our Services are award winning</h4>
     <ul class="central-list">
         <?php 
              $args = array( 
                  'post_type' => 'awards', 
                  'posts_per_page' => -1
              );
              $wp_query = new WP_Query($args);
          
              while ( have_posts() ) : the_post(); 
          ?>                        <li>
              <?php 
                  if ( has_post_thumbnail() ) {
                      the_post_thumbnail('featureimg');
                  }
              ?>
          </li>
          <?php endwhile; wp_reset_query(); ?>
      </ul>
</div>