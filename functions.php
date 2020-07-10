<?php
/** Requerido */
require get_template_directory() . '/includes/widgets.php';
require get_template_directory() . '/includes/customTemplateSliders.php';
require get_template_directory() . '/includes/customTemplateProductos.php';

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
