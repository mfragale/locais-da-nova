<?php

/**
 * Register Javascript scripts and localize variables.
 * @since 1.0.0
 */
function locais_da_nova_js()
{
	wp_register_script(
		'my-functions-locais-js',
		plugin_dir_url(__FILE__) . 'js/dist/myfunctions-min.js',
		array('jquery'),
		'1.1',
		true
	);
}
