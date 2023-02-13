<?php

/**
 * Init hook. Registers shortcode locais-da-nova-lista.
 * @since 1.0.0
 */
function locais_da_nova_init()
{
	add_shortcode('locais-da-nova-lista', 'locais_da_nova_lista_shortcode');
}
