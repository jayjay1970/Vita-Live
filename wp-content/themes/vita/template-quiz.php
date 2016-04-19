<?php
/**
 * Template Name: Quiz
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<div class="full-screen-height quiz-background">
        <div class="wrapper">
            <div class="grid__item tablet--eight-twelfths push--tablet--two-twelfths">
                <section>
                    <?php the_content(); ?>
                </section>
            </div>
           
            <div class="down-arrow">
                <div class="grid__item">
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
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>
