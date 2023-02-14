<?php

/**
 * Register CSS files
 * @since 1.0.0
 */

function locais_da_nova_css()
{
	wp_register_style(
		'locaisdanova-syles',
		plugin_dir_url(__FILE__) . 'scss/dist/locais-da-nova-syles-min.css',
		null,
		'1.1'
	);
}
