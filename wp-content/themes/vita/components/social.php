<ul class="social">
	<?php if( get_field('twitter_url', 6) ): ?>
    <li class="social__item social__item--twitter">
        <a href="<?php the_field('twitter_url', 6); ?>" target="_blank" class="social__link">
            <svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 40 33"
                 enable-background="new 0 0 40 33" width="15" height="12" xml:space="preserve">
                <switch>
                    <g>
                        <g>
                            <path class='hover' fill="#00a3c4" d="M39.5,3.9c-1.5,0.7-3,1.1-4.7,1.3c1.7-1,3-2.7,3.6-4.6c-1.6,1-3.3,1.6-5.2,2C31.8,1,29.7,0,27.4,0
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
        </a>
    </li>
    <?php endif; ?>
    <?php if( get_field('linkedin_url', 6) ): ?>
    <li class="social__item social__item--linkedin">
        <a href="<?php the_field('linkedin_url', 6); ?>" target="_blank" class="social__link">
            <svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 35 33"
            enable-background="new 0 0 35 33" width="13" height="13" xml:space="preserve">
                <switch>
                    <g>
                        <rect x="0.4" y="10.6" fill="#00a3c4" width="7.5" height="22.4"/>
                        <path fill="#00a3c4" d="M33.9,15.7c-0.8-2-2.3-5.2-7.6-5.5C20.9,10,19.3,14,19.3,14v-3.4H12V33h7.4V20.1c0-1.9,1.5-4.1,4.2-4.1
                        c3.4,0,3.6,3.7,3.6,5c0,1.2,0,2.5,0,2.5V33h7.4v-9.5C34.5,21.3,34.7,17.7,33.9,15.7z"/>
                        <ellipse class='hover' fill="#00a3c4" cx="4.1" cy="3.9" rx="4.1" ry="3.9"/>
                    </g>
                    <foreignObject>
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/linkedin-icon.png" alt="Linkedin"/>
                    </foreignObject>
                </switch>
            </svg> 
        </a>
    </li>
    <?php endif; ?>
    <?php if( get_field('facebook_url', 6) ): ?>
    <li class="social__item social__item--facebook">
        <a href="<?php the_field('facebook_url', 6); ?>" target="_blank" class="social__link">
            <svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 33"
                 enable-background="new 0 0 16 33" width="7" height="13" xml:space="preserve">
                <switch>
                    <g>
                        <g>
                			<path class='hover' fill="#00a3c4" d="M10.2,33H3.4V16.5H0v-5.7h3.4V7.4C3.4,2.8,5.3,0,10.8,0h4.6v5.7h-2.8c-2.1,0-2.3,0.8-2.3,2.3l0,2.8h5.2
                    		l-0.6,5.7h-4.6V33z"/>
            			</g>
                    </g>
                    <foreignObject>
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/facebook-icon.png" alt="Facebook"/>
                    </foreignObject>
                </switch>
            </svg>
        </a>
    </li>
    <?php endif; ?>
</ul>