<?php

if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

function mytheme_register_nav_menu(){
register_nav_menus( array(
'primary' => __( 'Primary Menu', 'text_domain' ),
'secondary_menu' => __('Secondary Menu', 'text_domain'),
'footer_menu' => __( 'Footer Menu', 'text_domain' ),
) );
}
add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}

function add_additional_class_on_li($classes, $item, $args) {
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}

add_filter( 'nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

if (!function_exists('register_navwalker')) :
    function register_navwalker() {
        require('inc/jsc-navwalker.php');
    }
endif;
add_action('after_setup_theme', 'register_navwalker');

?>