<?php

/**
 * Plugin init hook
 */
add_action('init', 'locais_da_nova_init', 10);


/**
 * Add wp_enqueue_scripts hook for Javascript files
 */
add_action('wp_enqueue_scripts', 'locais_da_nova_js');
/**
 * Add wp_enqueue_scripts hook for CSS files
 */
add_action('wp_enqueue_scripts', 'locais_da_nova_form_css');




/**
 * Registers doe-na-nova-nav
 */
//add_action('init', 'register_locaisdanova_menu');


/**
 * FORMS action callback hooks
 */
// add_action('admin_post_stripe_checkout', 'stripe_checkout'); // If the user is logged in
// add_action('admin_post_nopriv_stripe_checkout', 'stripe_checkout'); // If the user in not logged in


/**
 * AJAX action callback hooks
 */
//Load More Charges
// add_action('wp_ajax_locaisdanova_load_more_charges', 'locaisdanova_load_more_charges_ajax');
// add_action('wp_ajax_nopriv_locaisdanova_load_more_charges', 'locaisdanova_load_more_charges_ajax');

//Load More Recurring Donations
// add_action('wp_ajax_locaisdanova_load_more_recurring_donations', 'locaisdanova_load_more_recurring_donations_ajax');
// add_action('wp_ajax_nopriv_locaisdanova_load_more_recurring_donations', 'locaisdanova_load_more_recurring_donations_ajax');
