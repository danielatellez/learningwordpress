<?php 

function learningWordPress_Resources(){
    
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');