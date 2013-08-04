<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	
	function create_my_taxonomies() {
	register_taxonomy('new taxonomy', 'post', array(
	'hierarchical' => false, 'label' => 'New Taxonomy',
	'query_var' => true, 'rewrite' => true));
	}
	add_action('init', 'create_my_taxonomies', 0);
	
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

?>