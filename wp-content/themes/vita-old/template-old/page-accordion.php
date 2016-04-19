<?php if( get_sub_field('main_section_title') ): ?>
	<h3><?php the_sub_field('main_section_title'); ?></h3>
<?php endif; ?>
<?php
if (get_sub_field('select_accordion_style') == 'With background') {
	$colourclass = 'accordion--grey';
} else if (get_sub_field('select_accordion_style') == 'Other Field Value') {
	$colourclass = 'Text only';
}
?>
<div class="accordion-bar accordion-bar--inpage">
    <?php 
		if( have_rows('add_accordion_item') ):  
			while( have_rows('add_accordion_item') ): the_row();
	?>
    <div class="accordion <?php echo $colourclass; ?>">
        <h3 class="accordion__head"><span class="arrow"></span><?php the_sub_field('item_name'); ?></h3>
        <div class="accordion__content">
            <?php the_sub_field('item_editor'); ?>
        </div>
    </div>
    <?php 
		endwhile;
	endif; 
	?>
</div>