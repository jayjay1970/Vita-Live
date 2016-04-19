<div class="page-box page-box--download"  style="background-color:<?php the_field('box_background_colour'); ?>">
    <h2 class="page-box__title"><?php the_title(); ?></h2>
    <div class="page-box__intro">
    	<?php the_content(); ?>
    </div>
    <div class='pop-up-download-form'>
    	<?php the_field('add_shortcode_for_file_download'); ?>
    </div>
</div>
