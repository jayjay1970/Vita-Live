<?php  while (have_posts()) : the_post(); ?>

    <div class="grid__item">
        <div class="owl-carousel-container">
        	<div class="wrapper">
                
                <div class="owl-carousel owl-carousel-slider">
                    <?php if( have_rows('add_slides') ): $i = 0; ?>
                    	<?php while( have_rows('add_slides') ): the_row(); $i++;  ?>
                        
                        	<?php if (get_sub_field('select_slide_type') == 'Text and Image') { ?>
                                <div class="owl-carousel__slide">
                                    <div class="owl-carousel__image">
                                    <img src="<?php the_sub_field('upload_slider_image'); ?>" alt=""/>
                                    </div>
                                    <div class="owl-carousel__content">
                                        <h1><?php the_sub_field('slide_main_title'); ?></h1>
                                        <?php if( get_sub_field('sub_text') ): ?>
                                            <p><?php the_sub_field('sub_text'); ?> <span><a href="<?php the_sub_field('link_slide_to_page'); ?>">More &rsaquo;</a></span></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php } elseif (get_sub_field('select_slide_type') == 'Text and Video') { ?>
                            	<div class="owl-carousel__slide">
                                	<a href="#" data-featherlight="#openvideo<?php echo $i; ?>">
                                    <div class="owl-carousel__play">
                                        <svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
                                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 66 66"
                                             style="enable-background:new 0 0 66 66;" width="66" height="66" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path fill="#00a3c4" d="M61.6,16.5C52.5,0.7,32.3-4.7,16.5,4.4C0.7,13.5-4.7,33.7,4.4,49.5c9.1,15.8,29.3,21.2,45.1,12.1
                                                    C65.3,52.5,70.7,32.3,61.6,16.5L61.6,16.5z M46.2,55.9c-12.6,7.3-28.8,3-36.1-9.7c-7.3-12.6-3-28.8,9.7-36.1
                                                    c12.6-7.3,28.8-3,36.1,9.7C63.1,32.4,58.8,48.6,46.2,55.9L46.2,55.9z M44.9,31.7L27.6,21.6c-1.6-0.9-2.8-0.2-2.8,1.6l0.1,20
                                                    c0,1.8,1.3,2.6,2.9,1.7L44.9,35C46.4,34.1,46.5,32.6,44.9,31.7L44.9,31.7z M44.9,31.7"/>
                                            </g>
                                        </g>
                                        </svg>
                                    </div>
                                    <img class="owl-carousel__image" src="<?php the_sub_field('upload_slider_image'); ?>" alt=""/>
                                    </a>
                                    <div class="owl-carousel__content">
                                        <h1><?php the_sub_field('slide_main_title'); ?></h1>
                                        <?php if( get_sub_field('sub_text') ): ?>
                                            <p><?php the_sub_field('sub_text'); ?> <span><a href="<?php the_sub_field('link_slide_to_page'); ?>">More &rsaquo;</a></span></p>
                                        <?php endif; ?>
                                    </div>
                                    <div id="openvideo<?php echo $i; ?>" class="page-box__video-container">
                                        <div class='embed-container'><iframe src='https://player.vimeo.com/video/<?php the_sub_field('vimeo_video_id'); ?>' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
                                    </div>
                                </div>
                            <?php } ?>
                            
                    	<?php endwhile; ?>
                    <?php endif; ?>
                </div>
                
            </div>
            
            <div class="carousel-boxes">
                <div class="wrapper">
                	<div class="grid">
						<?php 
                        $posts = get_field('select_boxes_to_feature_over_slider');
                            if( $posts ): 
                                foreach( $posts as $post):  setup_postdata($post); 
                        ?>
                        <?php if (get_field('select_box_type') == 'Link box') { ?>
							<?php if (get_field('select_link_type') == 'Link to a file') { ?>
                                <div class="grid__item desktop--one-third">
                                    <?php get_template_part('templates/boxes/box', 'link-to-file'); ?>
                                </div>
                            <?php } else if (get_field('select_link_type') == 'Link to a page') { 
                                $pageorfile = get_field('link_box_to_page_or_file'); ?>
                                <div class="grid__item desktop--one-third">
                                    <?php get_template_part('templates/boxes/box', 'link-to-page'); ?>
                                </div>
                            <?php } ?>
                            <?php } else if (get_field('select_box_type') == 'Quote box') { 
								$postid = get_the_ID();
							?>  
                            <div class="grid__item desktop--one-third">
                                <?php get_template_part('templates/boxes/box', 'quote'); ?>
                            </div>
                            <?php } else if (get_field('select_box_type') == 'Offer box') { ?>
                            <div class="grid__item desktop--one-third">
								<?php get_template_part('templates/boxes/box', 'offer'); ?>
                            </div>
                            <?php } else if (get_field('select_box_type') == 'Awards box') { ?>
                            <div class="grid__item desktop--one-third">
								<?php get_template_part('templates/boxes/box', 'awards'); ?>
                            </div>
                            <?php } else if (get_field('select_box_type') == 'Video') { 
								$postid = get_the_ID();
							?>
                            <?php get_template_part('templates/boxes/box', 'video'); ?>
                            <?php } else if (get_field('select_box_type') == 'External Video Page') { ?>
                            	<?php get_template_part('templates/boxes/box', 'video-external'); ?>
                            <?php } else if (get_field('select_box_type') == 'Quiz') { 
							$postid = get_the_ID();
							?>
                            <div class="grid__item desktop--one-third">
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
            </div>
            
        </div>
    </div>
    <div class="background background--grey">
        <div class="grid__item">
            <div class="wrapper">
                <?php if( have_rows('add_promise_slide') ):  ?>
                <div class="our-promise-no-slider">
                	<?php while( have_rows('add_promise_slide') ): the_row();  ?>
                        <div class="promise-slide">
                            <a class="btn-outline" href="<?php the_sub_field('link_promise_to_page'); ?>"><?php the_sub_field('promise_text'); ?></a>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
                <?php get_template_part('templates/logo-slider'); ?>
            </div>
        </div>
    </div>
    
    <div class="wrapper">
    	<!--<div class="grid__item tablet--one-third">
            <div class="feed-container">
                <h3><a href="<?php the_field('twitter_url', 6); ?>" target="_blank">
                <svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 40 33"
                     enable-background="new 0 0 40 33" width="15" height="12" xml:space="preserve">
                    <switch>
                        <g>
                            <g>
                                <path fill="#00a3c4" d="M39.5,3.9c-1.5,0.7-3,1.1-4.7,1.3c1.7-1,3-2.7,3.6-4.6c-1.6,1-3.3,1.6-5.2,2C31.8,1,29.7,0,27.4,0
                                    c-4.5,0-8.1,3.7-8.1,8.3c0,0.7,0.1,1.3,0.2,1.9C12.7,9.9,6.8,6.6,2.7,1.5C2.1,2.8,1.7,4.2,1.7,5.7c0,2.9,1.4,5.4,3.6,6.9
                                    c-1.3,0-2.6-0.4-3.7-1v0.1c0,4,2.8,7.4,6.5,8.2c-0.7,0.2-1.4,0.3-2.1,0.3c-0.5,0-1-0.1-1.5-0.1c1,3.3,4,5.7,7.6,5.8
                                    C9.2,28,5.7,29.4,1.9,29.4c-0.7,0-1.3,0-1.9-0.1C3.6,31.6,7.9,33,12.4,33c14.9,0,23.1-12.7,23.1-23.7c0-0.4,0-0.7,0-1.1
                                    C37.1,7,38.4,5.6,39.5,3.9"/>
                            </g>
                        </g>
                        <foreignObject>
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/twitter-icon.png" alt="Twitter"/>
                        </foreignObject>
                    </switch>
                </svg>
                Follow Vita</a></h3>
                <?php
					/*require_once('create_twitter.php');
					$twitter = new create_twitter();
					$twitter->screen_name = "vitainsure";
					$twitter->not = 1;
					$twitter->consumerkey = "BXMLB7HWiRdByK7GGE1aAjdoK";
					$twitter->consumersecret = "FqIDMQMD6gaY1FsLQKixCTEYfosDksA1hHYUpMvpmYZIrfoW0X";
					$twitter->accesstoken = "4404377009-ZyTsrBAq9wxsakt0e2QJcCwrCX3v6ZVhx3fOPn4";
					$twitter->accesstokensecret = "wJA6FejuvNw2hDiUa3sY4u2MfbpvG31eafld990cGAQh9";
					//$twitter->cachefile = $_SERVER['DOCUMENT_ROOT']."/twitter/twitter.txt";
					$twitter->tags = true;
					$twitter->tags = true;
					$twitter->nofollow = true; 
					$twitter->newwindow = true;
					$twitter->hashtags = true;
					$twitter->attags = true;
					$tweetsfeed = $twitter->getLatestTweets();
					foreach($tweetsfeed as $tweet){
						echo "<p class='tweet_text'>".$tweet['tweet']."</p>";
						echo "<p class='tweet_time'>".$tweet['time']."</p>";	
					}*/
					?>
            </div>
        </div>-->
        <div class="grid__item tablet--two-thirds">
            <div class="feed-container">
                <h3><a href="<?php the_field('facebook_url', 6); ?>" target="_blank">
                <svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 33"
                     enable-background="new 0 0 16 33" width="9" height="17" xml:space="preserve">
                    <switch>
                        <g>
                            <g>
                                <path fill="#00a3c4" d="M10.2,33H3.4V16.5H0v-5.7h3.4V7.4C3.4,2.8,5.3,0,10.8,0h4.6v5.7h-2.8c-2.1,0-2.3,0.8-2.3,2.3l0,2.8h5.2
                                l-0.6,5.7h-4.6V33z"/>
                            </g>
                        </g>
                        <foreignObject>
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/facebook-icon.png" alt="Facebook"/>
                        </foreignObject>
                    </switch>
                </svg>
                Connect with us</a></h3>
                <div class='facebook-feed'>
               		<?php echo do_shortcode("[custom-facebook-feed]"); ?>
               </div>
            </div>
        </div>
    </div>
    
    
<?php endwhile; ?>