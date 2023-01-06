<?php

/**
 * Theme Function
 * 
 * @package Baagicha Blog 
 * 
 */


function baagicha_enqueue_scripts()
{
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/style/main.css', ['stylesheet'], [], filemtime(get_template_directory() . '/assets/style/main.css'), 'all'); // this css is dependent on 'stylesheet' css file
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
}

add_action('wp_enqueue_scripts', 'baagicha_enqueue_scripts'); // add above declared styles sheet to header of the file
