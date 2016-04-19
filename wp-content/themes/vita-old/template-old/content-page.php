<?php if (get_field('select_layout_type') == 'Text only') { ?>
    <div class="full-screen-height">
        <div class="wrapper">
            <div class="grid__item tablet--eight-twelfths push--tablet--two-twelfths">
                <section>
                    <?php the_content(); ?>
                </section>
            </div>
           
            <div class="down-arrow">
                <div class="grid__item">
                    <a href="#anchor" class="anchor">
                        <p>Find out more</p>
                        <svg version="1.0" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 34 20"
                        style="enable-background:new 0 0 34 20;" width="34" height="20" xml:space="preserve">
                            <switch>
                            <g>
                                <path fill="#cbcbcb" d="M18.9,18.9L33.2,4.7c1.1-1.1,1.1-2.8,0-3.9c-1.1-1.1-2.8-1.1-3.9,0L17,13.1L4.7,0.8c-1.1-1.1-2.8-1.1-3.9,0 C0.3,1.3,0,2,0,2.7c0,0.7,0.3,1.4,0.8,1.9l14.3,14.3C16.1,20,17.9,20,18.9,18.9"/>    
                            </g>
                            <foreignObject>
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/down-arrow.png" alt="Find out more arrow"/>    
                            </foreignObject>
                        </switch>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php } else if (get_field('select_layout_type') == 'Text columns') { ?>
    <div class="full-screen-height">
        <div class="wrapper">
            <div class="grid__item">
            	<div class="grid">
                	<div class="grid__item">
                        <section>
                        	<h2><?php the_field('main_page_title'); ?></h2>
                        </section>
                    </div>
                    <div class="grid__item desktop--four-twelfths">
                        <section class="feature-column-text">
							<?php the_field('text_column_one'); ?>
                            <div class="content-video">
                                <a href="#" data-featherlight="#openvideo<?php  echo $postid; ?>">
                                    <div class="page-box page-box--video" style="background: url(<?php the_field('upload_video_placeholder_graphic'); ?>); background-position: 0 0; background-size:cover; background-repeat: no-repeat;">
                                        <div class="page-box__play">
                                            <svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
                                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 66 66"
                                                 style="enable-background:new 0 0 66 66;" width="42" height="42" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path fill="#ffffff" d="M61.6,16.5C52.5,0.7,32.3-4.7,16.5,4.4C0.7,13.5-4.7,33.7,4.4,49.5c9.1,15.8,29.3,21.2,45.1,12.1
                                                        C65.3,52.5,70.7,32.3,61.6,16.5L61.6,16.5z M46.2,55.9c-12.6,7.3-28.8,3-36.1-9.7c-7.3-12.6-3-28.8,9.7-36.1
                                                        c12.6-7.3,28.8-3,36.1,9.7C63.1,32.4,58.8,48.6,46.2,55.9L46.2,55.9z M44.9,31.7L27.6,21.6c-1.6-0.9-2.8-0.2-2.8,1.6l0.1,20
                                                        c0,1.8,1.3,2.6,2.9,1.7L44.9,35C46.4,34.1,46.5,32.6,44.9,31.7L44.9,31.7z M44.9,31.7"/>
                                                </g>
                                            </g>
                                            </svg>
                                            <p class="page-box--video__title"><?php the_field('video_title'); ?></p>
                                        </div>
                                    </div>
                                </a>
                                <div id="openvideo<?php  echo $postid; ?>" class="page-box__video-container">
                                    <div class='embed-container'><iframe src='https://player.vimeo.com/video/<?php the_field('video_id'); ?>' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="grid__item desktop--eight-twelfths">
                        <section>
                            <?php the_field('text_column_two'); ?>
                        </section>
                    </div>
                </div>
            </div>
           
            <div class="down-arrow">
                <div class="grid__item">
                    <a href="#anchor" class="anchor">
                        <p>Find out more</p>
                        <svg version="1.0" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 34 20"
                        style="enable-background:new 0 0 34 20;" width="34" height="20" xml:space="preserve">
                            <switch>
                            <g>
                                <path fill="#f8b572" d="M18.9,18.9L33.2,4.7c1.1-1.1,1.1-2.8,0-3.9c-1.1-1.1-2.8-1.1-3.9,0L17,13.1L4.7,0.8c-1.1-1.1-2.8-1.1-3.9,0 C0.3,1.3,0,2,0,2.7c0,0.7,0.3,1.4,0.8,1.9l14.3,14.3C16.1,20,17.9,20,18.9,18.9"/>    
                            </g>
                            <foreignObject>
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/down-arrow.png" alt="Find out more arrow"/>    
                            </foreignObject>
                        </switch>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php } else if (get_field('select_layout_type') == 'Text with graphic') { ?>
    <div class="background background--grey background--into-panel background--no-padding-bottom">
        <div class="text-with-graphic">
            <div class="wrapper">
                <div class="grid__item tablet--two-thirds">
                    <section class="text-with-graphic-boxes-over-top">
                        <?php the_content(); ?>
                        
                        <?php if( get_field('show_slideout_social_media_icons_under_content') ) { ?>
                            <div class="sharethis">
                                <p class="share-text">Share this page</p>
                                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                <div class="addthis_sharing_toolbox"></div>
                        	</div>
                        <?php } ?>
                        
                    </section>
                </div>
                <div class="grid__item tablet--one-third">
                    <img src="<?php the_field('add_banner_graphic'); ?>" alt=""/>
                </div>
            </div>
        </div>
    </div>
<?php } else if (get_field('select_layout_type') == 'None') { ?>

<?php } ?>

