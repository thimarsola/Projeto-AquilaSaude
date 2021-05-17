<?php

//REGISTER MENU
function register_my_menus()
{
    register_nav_menus([
        'header-menu' => __('Header Menu'),
        'header-home' => __('Home Menu'),
        'footer-home' => __('Footer Home Menu'),
        'footer-menu' => __('Footer Menu'),
    ]);
}

add_action('init', 'register_my_menus');
