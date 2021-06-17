<?php
function testfile(){
    wp_enqueue_style('mainstyle', get_stylesheet_uri());
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', NULL, 1.0, true);

	wp_localize_script('main_js', 'mydata', array(
		'nonce' => wp_create_nonce('wp_rest'),
		'siteURL' => get_site_url()
	));
}

add_action('wp_enqueue_scripts', 'testfile');
add_filter('show_admin_bar', '__return_false');

function title() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme','title');