
<div class="fixed-nav">
    <div class="grid__item">
        <div class="wrapper">
              <div class="top-bar">
                  <?php get_template_part( 'components/social' ); ?>
                  <a class="contact-number" href="<?php echo site_url(); ?>/contact/"><?php the_field('telephone_number',6); ?></a>
                  <div class="border"></div>
              </div>
        </div>
        <header>
        <div class="wrapper">
        	<a class="vita-logo vita-logo--tablet-up" href="<?php echo site_url(); ?>"></a>
                  <div class="menu-container">
                      <a class="vita-logo vita-logo--mobile" href="<?php echo site_url(); ?>"></a>
                      <a class="btn btn-nudge" href="<?php echo site_url(); ?>/get-a-quote/">Get a quote</a>
                      <div id="callbackform" class="page-box__form-container">
                   		<h2>Request a Call Back</h2>
                        <?php echo do_shortcode("[contact-form-7 id='479' title='Request a callback']"); ?>	
					 </div>

           
					  <?php get_search_form(); ?>
                      <a href='#menu' class='menu-link' aria-label='navigation menu'>
                          <span class='ico-caret-down right' aria-hidden='true'>
                              <svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
                                  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 33 20"
                                  enable-background="new 0 0 33 20" width="33" height="20" xml:space="preserve">
                                  <switch>
                                  <g>
                                      <path fill="#989898" d="M31,4H2C0.9,4,0,3.1,0,2s0.9-2,2-2h29c1.1,0,2,0.9,2,2S32.1,4,31,4z"/>
                                      <path fill="#989898" d="M31,12H2c-1.1,0-2-0.9-2-2s0.9-2,2-2h29c1.1,0,2,0.9,2,2S32.1,12,31,12z"/>
                                      <path fill="#989898" d="M31,20H2c-1.1,0-2-0.9-2-2s0.9-2,2-2h29c1.1,0,2,0.9,2,2S32.1,20,31,20z"/>    
                                  </g>
                                  <foreignObject>
                                      <img src='<?php echo get_bloginfo('template_directory'); ?>/img/burger-icon.png' alt=''/>	    
                                  </foreignObject>
                                  </switch>
                              </svg>
                          </span>
                      </a>
                      <div class='menu-wrapper'>
                          <nav id='menu'>
                              <?php
                                  wp_nav_menu(
                                  array (
                                      'menu'            => 'main-menu',
                                      'container'       => FALSE,
                                      'container_id'    => FALSE,
                                      'menu_class'      => 'menu',
                                      'menu_id'         => FALSE
                                  ));
                              ?>
                          </nav>
                      </div>
                  </div>
        	</div>
        </header>
    </div>
</div>
