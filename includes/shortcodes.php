<?php

/**
 * Shortcode processing for lista-de-locais-da-nova
 * 
 * @since 1.0.0
 * @param array $atts The attributes in the shortcode
 */



/*
 * SET LOCAIS SHORTCODE [lista-de-locais-da-nova]
 */
function locais_da_nova_lista_shortcode($atts)
{
	// Enqueue JS when this shortcode loaded.
	wp_enqueue_script('my-functions-locais-js');

	// Enqueue CSS when this shortcode loaded. 
	wp_enqueue_style('locaisdanova-syles');

	// Outputs the HTML to replace short code
	ob_start();
	include 'locais-da-nova-lista.php';
	return ob_get_clean();
}
