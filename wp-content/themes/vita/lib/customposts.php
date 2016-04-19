<?php
add_action('init', 'feature_init');
function feature_init() 
{
	//Default arguments
	$args = array
	(
		'public' 				=> true,
		'publicly_queryable'	=> true,
		'show_ui' 				=> true, 
		'query_var' 				=> true,
		'rewrite' 				=> true,
		'capability_type' 		=> 'post',
		'has_archive' 			=> true, 
		'hierarchical' 			=> false,
		'menu_position' 			=> 20,
	);
	
	// Home page slideshow
	$labels = array
	(
		'name' 					=> 'Slide',
		'singular_name' 		    => 'Slide',
		'add_new' 				=> _x('Add New', 'Slide'),
		'add_new_item' 			=> 'Add New Slide',
		'edit_item'				=> 'Edit Slide',
		'new_item' 				=> 'New Slide',
		'view_item' 			    => 'View Slides',
		'search_items' 			=> 'Search Slides',
		'not_found' 			    => 'No Slides found',
		'not_found_in_trash'	=> 'No Slides found in Trash',
		'parent_item_colon' 	    => '',
		'menu_icon' 			    => '',
		'menu_name' 			    => 'Slideshow'
	);
	
	$args['labels'] 			    = $labels;
	$args['supports'] 			= array('title','thumbnail');
	$args['rewrite']			    = array('slug' => 'slide');
	//$args['menu_icon']		= get_bloginfo('template_directory').'/custom/img/members.png';
	$args['show_in_menu']		= true;
	
	register_post_type('slideshow', $args);
	
	// Feature boxes
	$labels = array
	(
		'name' 					=> 'Boxes',
		'singular_name' 		    => 'Box',
		'add_new' 				=> _x('Add New', 'Box'),
		'add_new_item' 			=> 'Add New Box',
		'edit_item'				=> 'Edit Box',
		'new_item' 				=> 'New Box',
		'view_item' 			    => 'View Boxes',
		'search_items' 			=> 'Search Boxes',
		'not_found' 			    => 'No Boxes found',
		'not_found_in_trash'	=> 'No Boxes found in Trash',
		'parent_item_colon' 	    => '',
		'menu_icon' 			    => '',
		'menu_name' 			    => 'Boxes'
	);
	
	$args['labels'] 			    = $labels;
	$args['supports'] 			= array('title','editor','thumbnail');
	$args['rewrite']			    = array('slug' => 'boxes');
	//$args['menu_icon']		= get_bloginfo('template_directory').'/custom/img/members.png';
	$args['show_in_menu']		= true;
	
	register_post_type('boxes', $args);
	
	// Our Experts
	$labels = array
	(
		'name' 					=> 'Our Experts',
		'singular_name' 		    => 'Expert',
		'add_new' 				=> _x('Add New', 'Expert'),
		'add_new_item' 			=> 'Add New Expert',
		'edit_item'				=> 'Edit Expert',
		'new_item' 				=> 'New Expert',
		'view_item' 			    => 'View Experts',
		'search_items' 			=> 'Search Experts',
		'not_found' 			    => 'No Experts found',
		'not_found_in_trash'	=> 'No Experts found in Trash',
		'parent_item_colon' 	    => '',
		'menu_icon' 			    => '',
		'menu_name' 			    => 'Our Experts'
	);
	
	$args['labels'] 			    = $labels;
	$args['supports'] 			= array('title','editor','thumbnail');
	$args['rewrite']			    = array('slug' => 'expert');
	//$args['menu_icon']		= get_bloginfo('template_directory').'/custom/img/members.png';
	$args['show_in_menu']		= true;
	
	register_post_type('experts', $args);
	
	// Case Studies
	$labels = array
	(
		'name' 					=> 'Case Studies',
		'singular_name' 		    => 'Case Study',
		'add_new' 				=> _x('Add New', 'Case Study'),
		'add_new_item' 			=> 'Add Case Study',
		'edit_item'				=> 'Edit Case Study',
		'new_item' 				=> 'New Case Study',
		'view_item' 			    => 'View Case Studies',
		'search_items' 			=> 'Search Case Studies',
		'not_found' 			    => 'No Case Studies found',
		'not_found_in_trash'	=> 'No Case Studies found in Trash',
		'parent_item_colon' 	    => '',
		'menu_icon' 			    => '',
		'menu_name' 			    => 'Case Studies'
	);
	
	$args['labels'] 			    = $labels;
	$args['supports'] 			= array('title','editor','thumbnail','comments');
	$args['rewrite']			    = array('slug' => 'case-study');
	//$args['menu_icon']		= get_bloginfo('template_directory').'/custom/img/members.png';
	$args['show_in_menu']		= true;
	
	register_post_type('casestudies', $args);
	
	// Client logos
	$labels = array
	(
		'name' 					=> 'Client logo',
		'singular_name' 		    => 'Client logo',
		'add_new' 				=> _x('Add New', 'Client logo'),
		'add_new_item' 			=> 'Add New Client logo',
		'edit_item'				=> 'Edit Client logo',
		'new_item' 				=> 'New Client logo',
		'view_item' 			    => 'View Client logos',
		'search_items' 			=> 'Search Client logos',
		'not_found' 			    => 'No Client logos found',
		'not_found_in_trash'	=> 'No Client logos found in Trash',
		'parent_item_colon' 	    => '',
		'menu_icon' 			    => '',
		'menu_name' 			    => 'Client logo'
	);
	
	$args['labels'] 			    = $labels;
	$args['supports'] 			= array('title','thumbnail');
	$args['rewrite']			    = array('slug' => 'logo');
	//$args['menu_icon']		= get_bloginfo('template_directory').'/custom/img/members.png';
	$args['show_in_menu']		= true;
	
	register_post_type('clientlogos', $args);
	
	// Awards
	$labels = array
	(
		'name' 					=> 'Awards',
		'singular_name' 		    => 'Award',
		'add_new' 				=> _x('Add New', 'Award'),
		'add_new_item' 			=> 'Add New Award',
		'edit_item'				=> 'Edit Award',
		'new_item' 				=> 'New Award',
		'view_item' 			    => 'View Awards',
		'search_items' 			=> 'Search Awards',
		'not_found' 			    => 'No Awards found',
		'not_found_in_trash'	=> 'No Awards found in Trash',
		'parent_item_colon' 	    => '',
		'menu_icon' 			    => '',
		'menu_name' 			    => 'Awards'
	);
	
	$args['labels'] 			    = $labels;
	$args['supports'] 			= array('title','thumbnail');
	$args['rewrite']			    = array('slug' => 'award');
	//$args['menu_icon']		= get_bloginfo('template_directory').'/custom/img/members.png';
	$args['show_in_menu']		= true;
	
	register_post_type('awards', $args);
	
	/*
	$labels = array
	(
		'name' 					=> 'Testimonial',
		'singular_name' 		    => 'Slide',
		'add_new' 				=> _x('Add New', 'Testimonial'),
		'add_new_item' 			=> 'Add New Testimonial',
		'edit_item'				=> 'Edit Testimonial',
		'new_item' 				=> 'New Testimonial',
		'view_item' 			    => 'View Testimonials',
		'search_items' 			=> 'Search Testimonials',
		'not_found' 			    => 'No Testimonials found',
		'not_found_in_trash'	=> 'No Testimonials found in Trash',
		'parent_item_colon' 	    => '',
		'menu_icon' 			    => '',
		'menu_name' 			    => 'Testimonial'
	);
	
	$args['labels'] 			    = $labels;
	$args['supports'] 			= array('title','editor','thumbnail');
	$args['rewrite']			    = array('slug' => 'testimonial');
	$args['show_in_menu']		= true;
	
	register_post_type('testimonials', $args);*/
}