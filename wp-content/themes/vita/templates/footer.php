<?php get_template_part( 'templates/quote-process' ); ?>
<footer>
	<?php get_template_part( 'templates/newsletter-row' ); ?>
	<div class="wrapper">
    	<div class="griddd">
        
            <div class="grid__item paddingfix">
                <ul class="inline-images">
                <?php if( have_rows('add_footer_awards', 18) ):  ?>
					<?php while( have_rows('add_footer_awards',18 ) ): the_row();  ?>
                        <li><img src="<?php the_sub_field('upload_award_logo', 18); ?>" alt="Vita Award"/></li>
                    <?php endwhile; ?>
                <?php endif; ?>
                </ul>
                
            </div>
            <div class="grid__item paddingfix">
            	<div class="small-print"><?php the_field('small_print',18); ?></div>
            </div>
            
        </div>
    </div>
   
</footer>


