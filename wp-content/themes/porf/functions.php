<?php

    //Stylesheet linked
    function enquestyle(){
        wp_enqueue_style('style', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts','enquestyle');

    //Register Menu

    register_nav_menus(
        array(
            'main_nav' => __('Main Navigation'),
            'footer' => __('Footer Navigation'),
        )
    );


?>