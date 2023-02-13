<?php

/**
 * Init hook. Registers shortcode lista-de-locais-da-nova.
 * @since 1.0.0
 */
function locais_da_nova_init()
{
	add_shortcode('lista-de-locais-da-nova', 'locais_da_nova_lista_shortcode');
}
