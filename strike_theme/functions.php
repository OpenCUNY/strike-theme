<?php

function opencuny_register_styles(){
		// Insert most up-to-date CSS file into page headers
		$version = wp_get_theme()->get( 'Version' );
		wp_enqueue_style('opencuny-styles', get_template_directory_uri() . "/style.css", array(), $version, 'all');
	}

	add_action( 'wp_enqueue_scripts', 'opencuny_register_styles');

?>