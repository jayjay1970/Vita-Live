<?php $uniqid = uniqid('item_'); ?>
<div class="btn-container">
    <a class="btn revert btn-clear" href="#" data-featherlight="#openlightboximage<?php  echo $uniqid; ?>"><?php the_sub_field('button_name'); ?></a>
    <div id="openlightboximage<?php  echo $uniqid; ?>" class="image-content-lightbox">
        <img src="<?php the_sub_field('upload_lightbox_image_desktop'); ?>" alt=""/>
    </div>
</div>