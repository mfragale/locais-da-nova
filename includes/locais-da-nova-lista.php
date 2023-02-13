<?php


$args = array(
    'post_type' => 'locais',
    'order' => 'ASC',
    'posts_per_page' => -1
);

$loop = new WP_Query($args);

?>
hi