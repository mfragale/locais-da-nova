<?php
/*
 * Plugin Name:		Locais da Nova
 * Plugin URI:		https://novaigreja.com/locais
 * Description:		Plataforma da Nova Igreja para exibir os locais dos campus.
 * Version:			1.0
 * Author:			Nova Digital Team
 * Author URI:		https://novaigreja.com
 * License:			GPL-2.0+
 * License URI:		http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Not called within Wordpress framework
if (!defined('WPINC')) {
    die;
}


/***************
 * global variables
 ***************/

$locaisdanova_prefix = 'locaisdanova_';
$locaisdanova_plugin_name = 'Locais da Nova';


// retrieve our plugin settings from the options table
$locaisdanova_options = get_option('locaisdanova_settings');


ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '../../logs/error.log');
error_log('Locais da Nova WordPress plugin');

//Localise (Translate into other languages)
load_plugin_textdomain('locaisdanova', false, dirname(plugin_basename(__FILE__)) . '/languages/');


// registration code for LOCAIS post type
function register_locais_posttype()
{
    $labels = array(
        'name'                 => _x('Locais', 'post type general name'),
        'singular_name'        => _x('Local', 'post type singular name'),
        'add_new'             => __('Adicionar'),
        'add_new_item'         => __('Adicionar item'),
        'edit_item'         => __('Editar item'),
        'new_item'             => __('Novo item'),
        'view_item'         => __('Ver item'),
        'search_items'         => __('Buscar itens'),
        'not_found'         => __('Não encontrado'),
        'not_found_in_trash' => __('Não encontrado no lixo'),
        'parent_item_colon' => __(''),
        'menu_name'            => __('Locais')
    );

    $supports = array('title', 'editor', 'excerpt', 'thumbnail');

    $post_type_args = array(
        'labels'             => $labels,
        'singular_label'     => __('Local'),
        'public'             => true,
        'show_ui'             => true,
        'publicly_queryable' => true,
        'query_var'            => true,
        'exclude_from_search' => false,
        'show_in_nav_menus'    => true,
        'capability_type'     => 'post',
        'has_archive'         => false,
        'hierarchical'         => false,
        'rewrite'             => array('slug' => 'local', 'with_front' => true),
        'supports'             => $supports,
        'menu_position'     => 4,
        'menu_icon'         => 'dashicons-admin-site',
        'taxonomies'        => false,
        'show_in_rest'        => true
    );
    register_post_type('locais', $post_type_args);
}


/***************
 * includes
 ***************/

//locaisdanova
include_once dirname(__FILE__) . '/includes/register-shortcodes.php';
include_once dirname(__FILE__) . '/includes/register-js.php';
include_once dirname(__FILE__) . '/includes/register-css.php';
include_once dirname(__FILE__) . '/includes/shortcodes.php';
include_once dirname(__FILE__) . '/includes/functions.php';
include_once dirname(__FILE__) . '/includes/add-actions.php';
