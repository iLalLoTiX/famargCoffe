<?php
/** consultas */

/**Menus */
if(function_exists('register_nav_menus')){
    register_nav_menus (array('superior' => 'Menu'));
}

/**Excerpt*/
function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
    } else {
    $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
 }  

/** Imagen Destacada */
function imagenDestacada(){

    add_theme_support('post-thumbnails');
/* Tamaños personalizados, nombre, dimenciones, recortar: true/false, se puede añadir las que quieras*/
    add_image_size('tamano1', 100, 100, true);
}
add_action('after_setup_theme', 'imagenDestacada');

function custom_single_template($the_template) {
    foreach ( (array) get_the_category() as $cat ) {
        if ( locate_template("single-ficha-tecnica.php") ) {
            return locate_template("single-ficha-tecnica.php");
        }
    }
    return $the_template;
}
add_filter( 'single_template', 'custom_single_template');