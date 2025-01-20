<?php

function my_custom_theme_scripts() {
    // Подключение стилей
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css' );

    // Подключение скриптов
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/main.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'my_custom_theme_scripts' );

function my_custom_theme_setup() {
    // Поддержка меню
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'my-custom-theme' ),
    ) );

    // Поддержка миниатюр
    add_theme_support( 'post-thumbnails' );

    // Поддержка HTML5
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
}
add_action( 'after_setup_theme', 'my_custom_theme_setup' );

