<?php

add_action("wp_enqueue_scripts","mu_scripts");
add_action("after_setup_theme","mu_register");


function mu_scripts() {
    wp_enqueue_style (
        'style',
        get_template_directory_uri() . '/css/style.css',
        [],
        '1.0',
        'all'

    );
    wp_enqueue_script (
        'js',
        get_template_directory_uri() . '/js/main.js',
        [],
        '1.0',
        false

    );
}

function mu_register() {
    add_theme_support( 'post-thumbnails' );
    
    register_nav_menu( 'hhhmenu', 'Меню навигации' );

}





