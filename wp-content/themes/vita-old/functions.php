<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */


include 'sync_feedback.php';


$sage_includes = [
  'lib/assets.php',    		// Scripts and stylesheets
  'lib/extras.php',    		// Custom functions
  'lib/setup.php',     		// Theme setup
  'lib/titles.php',    		// Page titles
  'lib/customposts.php',		// Custom post types
  'lib/wrapper.php',   		// Theme wrapper class
  'lib/customizer.php' 		// Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

/**
 * Proper way to enqueue scripts and styles
 */
function theme_name_scripts() {
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/scripts/owl.carousel.min.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );


/**
 * Remove inline width and height from images 
 */
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

/**
 * Truncate function
 */
function truncate($string, $limit, $break=" ", $pad="...")
{
	// Remove any formatting first
	$string = strip_tags($string);
	if(strlen($string) <= $limit) return $string;
	if(false !== ($breakpoint = strpos($string, $break, $limit)))
	{
		if($breakpoint < strlen($string) - 1)
		{
			$string = substr($string, 0, $breakpoint) . $pad;
		}
	}
	return $string;
}

/**
 * Add custom image sizes
 */
function custom_image_sizes() {
    add_theme_support('post-thumbnails');
	add_image_size('expert', 400, 240, TRUE);
	add_image_size('clientlogo', 100, 9999, FALSE);
}
add_action('after_setup_theme', 'custom_image_sizes');

/**
 * Add custom brand colours to colour picker in editor
 */
function my_mce4_options( $init ) {
	$default_colours = '
		"000000", "Black",
		"FFFFFF", "White"';
	$custom_colours = '
		"00a3c4", "Brand one",
		"f8b572", "Brand two",
		"5d5d5d", "Brand three",
		"b2b2b2", "Brand four"';
	$init['textcolor_map'] = '['.$default_colours.','.$custom_colours.']'; // build colour grid default+custom colors
	$init['textcolor_rows'] = 6; // enable 6th row for custom colours in grid
	return $init;
}
add_filter('tiny_mce_before_init', 'my_mce4_options');

/**
 * Add placeholder text to comment forms
 */
add_filter( 'comment_form_default_fields', 'help4cms_comment_placeholders' );
function help4cms_comment_placeholders( $fields )
{
    $fields['author'] = str_replace(
        '<input',
        '<input placeholder="Name..."',
        $fields['author']
    );
    $fields['email'] = str_replace(
        '<input',
        '<input placeholder="your@email.com..."',
        $fields['email']
    );
    $fields['url'] = str_replace(
        '<input',
        '<input placeholder="Website..."',
        $fields['url']
    );
    return $fields;
}
 
/* Add Placehoder in comment Form Field (Comment) */
add_filter( 'comment_form_defaults', 'help4cms_textarea_placeholder' );
 
function help4cms_textarea_placeholder( $fields )
{
  
        $fields['comment_field'] = str_replace(
            '<textarea',
            '<textarea placeholder="Your thoughts.."',
            $fields['comment_field']
        );
   
 
    return $fields;
}


//Register sidebar for blog and case studies

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'=> 'Category Sidebar',
		'id' => 'cat_sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="offscreen">',
		'after_title' => '</h2>',
	));	
	
}