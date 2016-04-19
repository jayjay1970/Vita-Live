<div class="background background--blue background--our-experts">
	<div class="wrapper">
        <div class="grid__item">
        	<h2 class="our-expert-main-title"><?php the_sub_field('our_experts_title'); ?></h2>
        </div>
        <?php 
            $args = array( 
                'post_type' 		=> 'experts', 
                'orderby' 		=> 'title', 
                'order' 			=> 'DESC',
				'meta_key'		=> 'show_expert_at_the_top_of_list',
				'meta_value'		=> 'Yes'
            );
            $wp_query = new WP_Query($args);
			
			$count = 0;
        
            while ( have_posts() ) : the_post(); $count++; 
			
        ?>
        <div class="grid__item tablet--one-half">
            <div class="our-expert post-<?php echo $count ?>">
                <?php 
                if ( has_post_thumbnail() ) { 
                    the_post_thumbnail('full', array( 'class'	=> "our-expert__image"));
                }
                ?>
                <div class="our-expert-content">
                    <h3><?php the_title(); ?> / <span><?php the_field('job_title'); ?></span></h3>
                    <?php the_content(); ?>
                    <a href="mailto:<?php the_field('contact_email_address'); ?>"><?php the_field('contact_email_address'); ?></a>
                </div>
            </div>
        </div>
       
        <?php 
            endwhile; 
            wp_reset_query();
        ?>
        
        <div class="grid__item tablet--one-half">
        	<div class="column-border-top">
				<?php the_sub_field('text_shown_under_main_experts'); ?>
            </div>
        </div>
        
        <div class="grid__item tablet--one-half">
            <div class="column-border-top with-accordion">
                <div class="accordion-bar">
                    <?php 
                        $args = array( 
                            'post_type' 	=> 'experts', 
                            'orderby' 		=> 'title', 
                            'order' 			=> 'DESC',
                            'meta_key'		=> 'show_expert_at_the_top_of_list',
                            'meta_value'	=> 'No'
                        );
                        $wp_query = new WP_Query($args);
                    
                        while ( have_posts() ) : the_post(); 
                    ?>
                    <div class="accordion">
                        <h3 class="accordion__head"><span class="arrow"></span> <?php the_title(); ?>  <span class="job-title"><?php the_field('job_title'); ?></span></h3>
                        <div class="accordion__content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <?php 
                        endwhile; 
                        wp_reset_query();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>