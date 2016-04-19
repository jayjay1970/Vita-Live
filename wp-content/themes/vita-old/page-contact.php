<?php
/**
 * Template Name: Contact
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <div class="background background--blue">
        <div class="wrapper">
        	<div class="grid__item max-tablet--one-half tablet--one-half">
            	<section class="contact-page">
                
                    
                	<?php the_content(); ?>
                    
                    <ul class="contact-numbers align-left">
                        <li class="phone"><a href="tel:<?php the_field('telephone_number'); ?>"><span class="phone-icon"></span><?php the_field('telephone_number'); ?></a></li>
                        <li class="email"><a href="mailto:<?php the_field('email_address'); ?>"><span class="email-icon"></span><?php the_field('email_address'); ?></a></li>
                        <li><a class="btn btn--grey" data-featherlight="#callback">Request a Call Back</a>
                   </li>
                        
                    </ul>
                </section>
            </div>
            <div class="grid__item max-tablet--one-half tablet--one-half">
            	<section class="contact-page-button">
                    
                    
                	<div id="callback" class="page-box__form-container">
                   		<h2>Request a Call Back</h2>
                        <?php echo do_shortcode("[contact-form-7 id='479' title='Request a callback']"); ?>	
					</div>
                </section>
            </div>
            <div class="grid__item tablet--one-half">
            	<div class="contact-left">
                	<?php echo do_shortcode("[contact-form-7 id='256' title='Contact form 1']"); ?>
                    
                </div>
            </div>
            <div class="grid__item tablet--one-half">
            	<div class="contact-right">
                <address class="address"><?php the_field('address_line_1', 6); ?> <?php the_field('address_line_2', 6); ?></address>
                
                	<!--<div id="map_canvas" class="acf-map"></div>-->
                
                <?php echo do_shortcode('[google_map_easy id="1"]')?>
                 
                    <a class="btn btn--border" href="https://www.google.co.uk/maps/place/Vita/@51.4797546,-3.1556998,17z/data=!3m1!4b1!4m2!3m1!1s0x486e0331870ee753:0x41139ce648cde591" target="_blank">View on map</a>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>
