<?php
/**
 * Template Name: Get a quote
 */
?>

<?php while (have_posts()) : the_post(); ?>

	<div class="background background--grey background--into-panel background--no-padding-bottom">
    	<div class="wrapper">
            <div class="grid__item">
                <section class="text-with-graphic-boxes-over-top">
                    <a name="anchor"></a>
                    <?php the_content(); ?>
                    <div class="get-a-quote-form">
                    	
                        
                        
                        <?php echo do_shortcode("[contact-form-7 id='950' title='Get a quote']"); ?>
                    </div>
					<?php if( get_field('show_slideout_social_media_icons_under_content') ) { ?>
                        <div class="sharethis">
                        <p class="share-text">Share</p>
                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <div class="addthis_sharing_toolbox"></div>
                    </div>
                    <?php } ?>
                </section>
            </div>
        </div>
    </div>
    
    
<?php endwhile; ?>
