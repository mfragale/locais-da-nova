<?php

/**
 * Init hook. Registers shortcode doe-na-nova-form-doar.
 * @since 1.0.0
 */
function locais_da_nova_init()
{
	add_shortcode('locais-da-nova-lista', 'locais_da_nova_lista_shortcode');
}
