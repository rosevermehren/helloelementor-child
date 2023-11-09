<?php
function hello_elementor_child_scripts_styles() {

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style', 
		],
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );