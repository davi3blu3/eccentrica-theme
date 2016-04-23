<?php

function eccentrica_script_enqueue() {

	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/eccentrica.css', array(), '1.0.0', 'all');

}

add_action('wp_enqueue_scripts', 'eccentrica_script_enqueue');

?>