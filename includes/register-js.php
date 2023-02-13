<?php

/**
 * Register Javascript scripts and localize variables.
 * @since 1.0.0
 */
function locais_da_nova_js()
{
	wp_register_script(
		'functions-js',
		plugin_dir_url(__FILE__) . 'js/dist/functions-min.js',
		array('jquery', 'wp-i18n'),
		'1.1',
		true
	);
}
