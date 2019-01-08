<?php

//Registro de archivos

function register_enqueue_style(){
    $theme_data = wp_get_theme();

    //Registrando estilos
    wp_register_style('bootstrap', 
    get_parent_theme_file_uri('/assets/vendor/bootstrap/css/bootstrap.min.css'), 
    null, '1.0.0', 'screen');
    wp_register_style('css', 
    get_parent_theme_file_uri('/assets/css/portfolio-item.css'), 
    null, '1.0.0', 'screen');

    //Enqueue estilos
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('css');
}

add_action('wp_enqueue_scripts', 'register_enqueue_style');

//registro de scripts

function register_enqueue_scripts(){
    $theme_data = wp_get_theme();
    
    //deregister scripts
    wp_deregister_script('jquery');
    wp_deregister_script('bootstrap-min');

    //registrando scripts
    wp_register_script('jQuery', 
    get_parent_theme_file_uri('/assets/vendor/jquery/jquery.min.js'), 
    null, '3.2.1', true);
    wp_register_script('Bootstrap-min', 
    get_parent_theme_file_uri('/assets/vendor/jquery/jquery.min.js'), 
    null, '3.2.1', true);

    //Enqueue scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-min');

}

add_action('wp_enqueue_scripts', 'register_enqueue_scripts');

?>