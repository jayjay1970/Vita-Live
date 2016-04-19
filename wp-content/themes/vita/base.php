<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<?php 
	get_template_part('templates/head'); 
	?>
    <body <?php body_class(); ?>>
        <!--[if IE]>
        <div class="alert alert-warning">
        	<?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
        </div>
        <![endif]-->
    	<div class="grid">
			<?php
                do_action('get_header');
                get_template_part('templates/header');
            ?>
            <main class="main">
                <?php include Wrapper\template_path(); ?>
            </main>
			<?php
                do_action('get_footer');
                get_template_part('templates/footer');
               
            ?>
    	</div>
        <!--Start of Tawk.to Script-->
		<script type="text/javascript">
        var $_Tawk_API={},$_Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/56bdc785e2c3f6402614a8a8/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
        <?php  wp_footer(); ?>
    </body>
</html>
