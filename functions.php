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

function bs_social_share() {
    if(is_singular('post')) 
    {
        $plantilla		='
		 <a class="dc-link dc-twitter" href="{twitter}" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>'.
		'<a class="dc-link dc-facebook" href="{facebook}" target="_blank"><i class="fa fa-facebook"></i> Facebook </a>'.
		'<a class="dc-link dc-whatsapp" href="{whatsapp}" target="_blank"><i class="fa fa-whatsapp"></i> WhatsApp</a>';

		$cad			='';
		$urlArticulo 	= urlencode(get_permalink());
 		$titleArticulo 	= str_replace( ' ', '%20', get_the_title());

		// Urls
		$twitterURL	= 'https://twitter.com/intent/tweet?text='.$titleArticulo.'&amp;url='.$urlArticulo;
		$facebookURL= 'https://www.facebook.com/sharer/sharer.php?u='.$urlArticulo;
		$whatsappURL= 'https://wa.me/?text='.$titleArticulo . ' ' . $urlArticulo;
 
		$ar_buscar 		= array('{twitter}','{facebook}','{whatsapp}');
		$ar_reemplazar 	= array($twitterURL,$facebookURL,$googleURL,$linkedInURL,$whatsappURL);

		$cad	.= '<div class="dc-social">';
		$cad	.=  str_replace($ar_buscar, $ar_reemplazar, $plantilla);
		$cad	.= '</div>';

		$content = $cad.$content; //botones superiores

        echo $content;
    }
}
add_shortcode('social-share','bs_social_share');
