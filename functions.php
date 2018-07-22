<?php


add_action('admin_menu', 'minimal_plugin_menu');

function minimal_plugin_menu()
{
	add_menu_page('Minimal WP', 'Minimal WP', 'edit_posts', 'minimal-wp-plugin-slug', 'minimal_plugin_main_page_ui');
	
}

function minimal_plugin_main_page_ui()
{
    include_once 'gui/page-01.php';
}


//enqueue scripts, styles for backend
add_action('admin_enqueue_scripts', 'minimal_wp_load_admin_scripts');

function  minimal_wp_load_admin_scripts()
{
    wp_enqueue_style('minimal_wp_admin_style', plugins_url('src/css/admin-style.css', __FILE__));
    wp_enqueue_script('minimal_wp_admin_script', plugins_url('src/js/admin-script.js', __FILE__));
}


//enqueue scripts, styles for frontend
add_action('wp_enqueue_scripts', 'minimal_wp_load_frontend_scripts');

function  minimal_wp_load_frontend_scripts()
{
    wp_enqueue_style('minimal_wp_frontend_style', plugins_url('src/css/front-style.css', __FILE__));
    wp_enqueue_script('minimal_wp_frontend_script', plugins_url('src/js/front-script.js', __FILE__));
}