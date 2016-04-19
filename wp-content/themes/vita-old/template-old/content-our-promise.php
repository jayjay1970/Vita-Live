<div class="full-screen-height">
    <div class="wrapper">
        <div class="grid__item">
            <div class="grid">
                <div class="grid__item">
                    <section>
                        <h2 class="with-border"><?php the_title(); ?></h2>
                    </section>
                </div>
                <div class="grid__item desktop--one-half">
                    <section class="padding-right">
                        <?php
						if( have_rows('add_column_area') ):
						
							while ( have_rows('add_column_area') ) : the_row();
						
								if( get_row_layout() == 'main_content_editor' ):
						
									get_template_part('templates/left-column-content');
									
								elseif( get_row_layout() == 'add_button_with_lightbox' ):
						
									get_template_part('templates/left-column-button-lightbox');
						
								endif;
						
							endwhile;
						else :
							// no layouts found
						endif;
						?>
                    </section>
                </div>
                <div class="grid__item desktop--one-half">
                    <section class="padding-left">
                        <?php
						if( have_rows('add_right_column_area') ):
						
							while ( have_rows('add_right_column_area') ) : the_row();
						
								if( get_row_layout() == 'add_general_content_area' ):
						
									get_template_part('templates/right-column-content');
									
								elseif( get_row_layout() == 'button_with_lightbox' ):
						
									get_template_part('templates/right-column-button-lightbox');
						
								endif;
						
							endwhile;
						else :
							// no layouts found
						endif;
						?>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>