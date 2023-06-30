<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() .'/style.css');
}

/**Hook pour désactiver les titres pages**/
add_filter('post_class', 'ala_hidetitle_class');
function ala_hidetitle_class($classes) {
    if ( is_page() ) :
    $classes[] = 'hidetitle';
    return $classes;
    endif;
    return $classes;
    }
    


/************Hook pour ajouter le lien Admin*************/
add_filter( 'wp_nav_menu_items', 'planty_add_admin_link_to_menu', 10, 2 );
function planty_add_admin_link_to_menu( $items, $args ) {
    // Vérifier si l'utilisateur est connecté
    if ( is_user_logged_in() ) {
        // Créer le lien "Admin"
        $admin_link = '<li><a href="' . admin_url() . '">Admin</a></li>';

        // Trouver la position du lien "Nous rencontrer" dans les éléments du menu
        $rencontrer_position = strpos( $items, 'Nous rencontrer' );

        // Insérer le lien "Admin" après le lien "Nous rencontrer"
        $items = substr_replace( $items, $admin_link, $rencontrer_position + strlen('Nous rencontrer'), 0 );
    }
    return $items;
}



?>

    
