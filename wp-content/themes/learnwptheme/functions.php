<?php


function load_scripts(){
    
    
    wp_enqueue_style('template', get_template_directory_uri(). '/css/template.css', array(), '1.0', 'all' );
    
    wp_enqueue_style('bootstrap-min', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all');
    
    //wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.min.css' );
    
    wp_enqueue_style('fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), '4.4.0', 'all' );
    
    wp_enqueue_script('jquery-ajax', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', true);
    
    wp_enqueue_script('bootstrap-min-jquery', get_template_directory_uri() . '/js/bootstrap.min.js', array(), 'null', true);
}

add_action('wp_enqueue_scripts','load_scripts');

register_nav_menus(
    array(
        'primary_menu' => 'Primary Menu',
    )

);

