<?php

/**
 * Plugin init hook
 */
add_action('init', 'locais_da_nova_init', 10);


/**
 * Add wp_enqueue_scripts hook for Javascript files
 */
add_action('wp_enqueue_scripts', 'locais_da_nova_js', true);
/**
 * Add wp_enqueue_scripts hook for CSS files
 */
add_action('wp_enqueue_scripts', 'locais_da_nova_css');
