<?php

/**
 * Shortcode processing for doe-na-nova-form-doar
 * 
 * @since 1.0.0
 * @param array $atts The attributes in the shortcode
 */



/*
 * SET LOCAIS SHORTCODE [locais-da-nova-lista]
 */
function locais_da_nova_lista_shortcode()
{
	// Enqueue JS when this shortcode loaded.
	wp_enqueue_script('functions-js');

	// Enqueue CSS when this shortcode loaded. 
	wp_enqueue_style('locaisdanova-syles');

	// Outputs the HTML to replace short code
	ob_start();
	include 'locais-da-nova-lista.php';
	return ob_get_clean();

	// $output = ob_get_contents();
	// ob_end_clean();
	// return  $output;
}
