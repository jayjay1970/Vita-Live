<div class="newsletter-row">
  <div class="wrapper">
      <div class="grid__item tablet--one-third">
          <h3><a href="<?php echo site_url(); ?>/introducer-area/">Introducer area</a></h3>
          <p>Sign up to newsletter</p>
          <?php echo do_shortcode("[mc4wp_form]"); ?>
      </div>
      <div class="grid__item tablet--two-thirds">
          <div class="newsletter-row-contact-details">
              <?php get_template_part( 'components/social' ); ?>
              <address>
                  <?php the_field('address_line_1', 6); ?><br><?php the_field('address_line_2', 6); ?>
              </address> 
              <p>Open Mon-Fri 9am – 6pm</p>
              <p><?php the_field('telephone_number',6); ?></p>  
              <p><a href="mailto:<?php the_field('email_address',6); ?>"><?php the_field('email_address',6); ?></a></p>
              <?php
                wp_nav_menu(
                array (
                    'menu'            => 'Footer',
                    'container'       => FALSE,
                    'container_id'    => FALSE,
                    'menu_class'      => 'menu-with-divider',
                    'menu_id'         => FALSE
                ));
              ?>
          </div>
      </div>
  </div>
</div>