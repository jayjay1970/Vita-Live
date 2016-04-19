<?php $uniqid = uniqid('item_'); ?>
<a href="#" class="btn with-icon" data-featherlight="#openimage<?php  echo $uniqid; ?>">
	<span class="pie-chart"></span>
	<?php the_sub_field('lightbox_button_text'); ?>
</a>
<div id="openimage<?php  echo $uniqid; ?>" class="image-content-lightbox">
    <img src="<?php the_sub_field('lightbox_image'); ?>" alt=""/>
</div>

<!--<a class="thumbnail gallery btn with-icon" href=".galley-first">
    Open
</a>
<a class="thumbnail gallery galley-first" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/lightbox-calculator-desktop.jpg"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/lightbox-calculator-desktop.jpg" /></a>
<a class="thumbnail gallery" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/lightbox-calculator-desktop.jpg"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/lightbox-calculator-desktop.jpg" /></a>
<a class="thumbnail gallery" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/lightbox-calculator-desktop.jpg"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/lightbox-calculator-desktop.jpg" /></a>
<a class="thumbnail gallery" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/lightbox-calculator-desktop.jpg"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/lightbox-calculator-desktop.jpg" /></a>
<a class="thumbnail gallery" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/lightbox-calculator-desktop.jpg"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/lightbox-calculator-desktop.jpg" /></a>
-->
