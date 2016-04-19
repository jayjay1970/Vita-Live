<div class="wrapper">
	<div class="page-boxes">
    <?php 
		$posts = get_sub_field('select_boxes_to_show');
		if( $posts ): 
			foreach( $posts as $post):  setup_postdata($post); 
	?>
	<?php if (get_field('select_box_type') == 'Link box') { ?> 
		<?php if (get_field('select_link_type') == 'Link to a file') { ?>
		<div class="grid__item desktop--one-half">
			<?php get_template_part('templates/boxes/box', 'link-to-file'); ?>
		</div>
		<?php	
		} else if (get_field('select_link_type') == 'Link to a page') {
		$pageorfile = get_field('link_box_to_page_or_file');
		?>
		<div class="grid__item desktop--one-half">
			<?php get_template_part('templates/boxes/box', 'link-to-page'); ?>
		</div>
		<?php } ?>
		<?php } else if (get_field('select_box_type') == 'Quote box') { ?>
		<div class="grid__item desktop--one-half">
			<?php get_template_part('templates/boxes/box', 'quote'); ?>
		</div>
		<?php } else if (get_field('select_box_type') == 'Offer box') {  ?>
		<div class="grid__item desktop--one-half">
			<?php get_template_part('templates/boxes/box', 'offer'); ?>
		</div>
		<?php } else if (get_field('select_box_type') == 'Awards box') {  ?>
		<div class="grid__item desktop--one-half">
			<?php get_template_part('templates/boxes/box', 'awards'); ?>
		</div>
		<?php } else if (get_field('select_box_type') == 'Video') {  
		$postid = get_the_ID();
		?>
		<div class="grid__item desktop--one-half">
			<?php get_template_part('templates/boxes/box', 'video'); ?>
		</div>
		<?php } else if (get_field('select_box_type') == 'External Video Page') {  
		?>
		<div class="grid__item desktop--one-half">
			<?php get_template_part('templates/boxes/box', 'video-external'); ?>
		</div>
		<?php } else if (get_field('select_box_type') == 'Quiz') { 
		$postid = get_the_ID();
		?>
		<div class="grid__item desktop--one-half">
			<?php get_template_part('templates/boxes/box', 'quiz'); ?>
		</div>
		<?php } ?>
	<?php 
		endforeach; 
		wp_reset_postdata();  
	endif; 
	?>
	</div> 
</div>
