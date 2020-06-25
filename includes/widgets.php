<?php
function myWidgets() {

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