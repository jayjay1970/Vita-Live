<?php
if( have_rows('select_section') ):

	while ( have_rows('select_section') ) : the_row();
	

		if( get_row_layout() == 'add_accordion' ):

			get_template_part('templates/page-accordion');
			
		elseif( get_row_layout() == 'add_content_area' ):

			get_template_part('templates/general-content');
			
		elseif( get_row_layout() == 'add_button_with_lightbox' ):
			
			get_template_part('templates/lightbox-button');
			
		elseif( get_row_layout() == 'add_question_and_answer_box' ):
			
			get_template_part('templates/question-answer-box');
	
		endif;
		
	endwhile;
else :
	// no layouts found
endif;
?>