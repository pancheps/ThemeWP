
<?php

function mitema_scripts() {
    wp_enqueue_style( 'mitema-style', get_stylesheet_uri() );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js' );
    wp_enqueue_script( 'jq-color', get_template_directory_uri() . '/js/jquery.color.js', 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'mitema_scripts' );

function registrar_mi_menu() {
    register_nav_menu('header-menu',__( 'Menú del Encabezado' ));
}
add_action( 'init', 'registrar_mi_menu' );