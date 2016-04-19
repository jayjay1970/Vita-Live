<a class="page-box" href="<?php the_field('link_box_to_page_or_file'); ?>" style="background-color:<?php the_field('box_background_colour'); ?>">
  <h2 class="page-box__title"><?php the_title(); ?></h2>
  <div class="page-box__intro">
      <?php the_content(); ?>
  </div>
  <span class="page-box__button"><?php the_field('box_link_text'); ?> &rsaquo;</span>
</a>