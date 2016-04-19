<?php
if( have_rows('add_page_section') ):

	while ( have_rows('add_page_section') ) : the_row();

		if( get_row_layout() == 'our_experts' ):

			get_template_part('templates/our-experts');
			
		elseif( get_row_layout() == 'page_boxes' ): 

			get_template_part('templates/page-boxes');
			
		elseif( get_row_layout() == 'logo_slider' ): 

			get_template_part('templates/page-logo-slider');
			
		elseif( get_row_layout() == 'add_accordion' ): 

			get_template_part('templates/page-accordion');

		endif;

	endwhile;
else :
	// no layouts found
endif;
?>