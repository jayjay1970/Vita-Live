<aside>
	<?php 
	$posts = get_field('select_side_boxes_to_add_to_the_sidebar');
		if( $posts ): 
			foreach( $posts as $post):  setup_postdata($post);
			
	?>
    <?php 
	if (get_field('select_box_type') == 'Link box') { 
			if (get_field('select_link_type') == 'Link to a file') { ?>
            	<?php get_template_part('templates/boxes/box', 'link-to-file'); ?>
			<?php	
			} else if (get_field('select_link_type') == 'Link to a page') {
				$pageorfile = get_field('link_box_to_page_or_file'); ?>
            <?php get_template_part('templates/boxes/box', 'link-to-page'); ?>
        <?php } ?>
   	 	<?php } else if (get_field('select_box_type') == 'Quote box') { ?>
			<?php get_template_part('templates/boxes/box', 'quote'); ?>
    	<?php } else if (get_field('select_box_type') == 'Offer box') {  ?>
    		<?php get_template_part('templates/boxes/box', 'offer'); ?>
    	<?php } else if (get_field('select_box_type') == 'Awards box') {  ?>
        	<?php get_template_part('templates/boxes/box', 'awards'); ?>
		<?php } else if (get_field('select_box_type') == 'Video') {  
			$postid = get_the_ID();
		?>
		<?php get_template_part('templates/boxes/box', 'video'); ?>
		<?php } else if (get_field('select_box_type') == 'External Video Page') { ?>
              <?php get_template_part('templates/boxes/box', 'video-external'); ?>
        <?php } else if (get_field('select_box_type') == 'Quiz') { 
		$postid = get_the_ID();
		?>
        	<?php get_template_part('templates/boxes/box', 'quiz'); ?>
        <?php } else if (get_field('select_box_type') == 'Share icons') { ?>
        	<?php get_template_part('templates/boxes/box', 'share-icons'); ?>
        <?php } ?>
		<?php 
        	endforeach; 
             wp_reset_postdata();  
     endif; 
	?>
</aside>