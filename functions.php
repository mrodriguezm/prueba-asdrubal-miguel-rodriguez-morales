<?php
function mi_tema_estilo() {
    wp_enqueue_style( 'estilo-tema', get_stylesheet_directory_uri() . '/estilos/estilo-tema.css' );
}
add_action( 'wp_enqueue_scripts', 'mi_tema_estilo' );
?>