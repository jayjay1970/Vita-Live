<div class="question-answer-box" style="background-color:<?php the_sub_field('box_background_colour'); ?>">
     <div class="grid">
     	<div class="grid__item">
        	<h3><?php the_sub_field('main_box_title'); ?></h3>
        </div>
     	<div class="grid__item tablet--one-half">
        	
        	<?php the_sub_field('column_one_editor'); ?>
            <?php the_sub_field('column_two_question_editor'); ?>
            
            <?php if (get_sub_field('show_answer_dropdown') == 'Show') { ?>
                <div class="answer-reveal">
                    <h4 class="answer-reveal-trigger">ANSWER <span>(click here)</span></h4>
                    <div class="answer-reveal-answer">
                        <?php the_sub_field('column_two_answer_editor'); ?>
                    </div>
                </div>
            <?php } ?>
            
     	</div>
        <div class="grid__item tablet--one-half">
        	<img src="<?php the_sub_field('column_two_image'); ?>" alt=""/>
            <?php the_sub_field('column_two_general_text'); ?>
     	</div>
     </div>
</div>