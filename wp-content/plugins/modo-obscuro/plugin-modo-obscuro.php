<?php 
//Plugin name: Modo obscuro
//Description: Activa el modo obscuro en tu theme
//Version:1.0
//Author: Yair Rodriguez
//Author URI:  https://github.com/YairRdz11
function estilos_plugin(){
    $estilos_url = plugin_dir_url(__FILE__);

    wp_enqueue_style('modo_obscuro', $estilos_url.'/assets/css/estilo.css', '', 1.0, 'all');
}

add_action( 'wp_enqueue_scripts', 'estilos_plugin');

?>