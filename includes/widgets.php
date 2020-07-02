<?php
function myWidgets() {
    
    /* Register the 'Sidebar Busqueda. */
    register_sidebar(
        array(
            'id'            => 'search',
            'name'          => __( 'Sidebar busqueda' ),
            'description'   => __( 'Sidebar para la busqueda.' ),
            'before_widget' => '<aside class="single_sidebar_widget search_widget">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h4 class="widget_title">',
            'after_title'   => '</h4>',
        )
    );

    /* Register the 'Sidebar Category. */
    register_sidebar(
        array(
            'id'            => 'categoria',
            'name'          => __( 'Sidebar categoria' ),
            'description'   => __( 'Sidebar para la categoria.' ),
            'before_widget' => '<aside class="single_sidebar_widget post_category_widget">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h4 class="widget_title">',
            'after_title'   => '</h4>',
        )
    );

    /* Register the 'Sidebar Entradas. */
    register_sidebar(
        array(
            'id'            => 'entradas',
            'name'          => __( 'Sidebar entradas' ),
            'description'   => __( 'Sidebar de entradas.' ),
            'before_widget' => '<aside class="single_sidebar_widget post_category_widget">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h4 class="widget_title">',
            'after_title'   => '</h4>',
        )
    );

    /* Register the 'Sidebar Sidebar Widget. */
    register_sidebar(
        array(
            'id'            => 'sidebarwidget',
            'name'          => __( 'Sidebar Widget' ),
            'description'   => __( 'Sidebar de Widget.' ),
            'before_widget' => '<aside class="single_sidebar_widget">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h4 class="widget_title">',
            'after_title'   => '</h4>',
        )
    );

    //FOOTER///////////////////////////////////////////////////
    /* Register the 'Sidebar Sidebar Footer. */
    register_sidebar(
        array(
            'id'            => 'footer_1',
            'name'          => __( 'Widget Pie de pagina' ),
            'description'   => __( 'Sidebar de footer_1.' ),
            'before_widget' => '<ul class="list-unstyled">',
            'after_widget'  => '</ul>',
            'before_title'  => '<h2 class="ftco-heading-2">',
            'after_title'   => '</h2>',
        )
    );
    
}

add_action( 'widgets_init', 'myWidgets' );