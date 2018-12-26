<?php

    //Stylesheet linked
    function enquestyle(){
        wp_enqueue_style('style', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts','enquestyle');

    //JavaScript file linked
    function my_theme_scripts_function() {

        wp_enqueue_script( 'all', get_template_directory_uri() . '/js/all.js');
        wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js');

        }

        add_action('wp_enqueue_scripts','my_theme_scripts_function');


    //Register Menu
    register_nav_menus(
        array(
            'main_nav' => __('Main Navigation'),
            'footer' => __('Footer Navigation'),
        )
    );



?>