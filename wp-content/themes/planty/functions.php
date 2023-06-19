<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() .'/style.css');
}

// Fonction pour désactiver les titres pages
function ala_hidetitle_class($classes) {
    if ( is_page() ) :
    $classes[] = 'hidetitle';
    return $classes;
    endif;
    return $classes;
    }
    add_filter('post_class', 'ala_hidetitle_class');

    
