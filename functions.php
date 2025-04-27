<?php
function mi_tema_estilo() {
    wp_enqueue_style( 'estilo-tema', get_stylesheet_directory_uri() . '/estilos/estilo-tema.css' );
}
add_action( 'wp_enqueue_scripts', 'mi_tema_estilo' );

function mi_tema_header_scripts() {
    // ... (tu código existente) ...
    wp_enqueue_script( 'script-header', get_stylesheet_directory_uri() . '/scripts/script-header.js');
}
add_action( 'wp_enqueue_scripts', 'mi_tema_header_scripts' );
?>

