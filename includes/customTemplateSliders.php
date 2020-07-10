<?php 
function my_customize_register( $wp_customize ) {
    
    /** Panel Slider */
      
    $wp_customize->add_panel('sliders',array(
        'title'=>'Sliders',
        'description'=> 'Slider de la pagina de aterrizaje',
    ));
    
    /** Section Slider 1 */

    $wp_customize->add_section('slider1-section',array(
        'title'=>'Slider 1',
        'priority'=>1,
        'panel'=>'sliders',
    ));

    /**Titulo Slider 1*/
    
    $wp_customize->add_setting( 'titulo1-setting', array(
        'default' => 'Titulo 1',
        'priority'=>1,
    ));
    
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 
    'sliderTitulo1-control', array(
        'label' => 'Titulo Slider 1',
        'section' => 'slider1-section',
        'settings' => 'titulo1-setting',
    )));

    /**Subtitulo Slider 1*/
    
    $wp_customize->add_setting( 'subtitulo1-setting', array(
        'default' => 'Subitulo 1',
        'priority'=>2,
    ));
    
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 
    'sliderSubtitulo1-control', array(
        'label' => 'Subtitulo Slider 1',
        'section' => 'slider1-section',
        'settings' => 'subtitulo1-setting'
    )));

    /**parrafo Slider 1*/

    $wp_customize->add_setting( 'parrafo1-setting', array(
        'default' => 'Parrafo 1',
        'priority'=>3,
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 
    'sliderParrafo1-control', array(
        'label' => 'Parrafo Slider 1',
        'section' => 'slider1-section',
        'settings' => 'parrafo1-setting'
    )));
    /** FIN SLIDER 1 */

    /** INICIO SLIDER 2 */

    /** Section Slider 2 */

    $wp_customize->add_section('slider2-section',array(
        'title'=>'Slider 2',
        'priority'=>2,
        'panel'=>'sliders',
    ));

    /**Titulo Slider 2*/
    
    $wp_customize->add_setting( 'titulo2-setting', array(
        'default' => 'Titulo 2',
    ));
    
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 
    'sliderTitulo2-control', array(
        'label' => 'Titulo Slider 2',
        'section' => 'slider2-section',
        'settings' => 'titulo2-setting'
    )));

    /**Subtitulo Slider 2*/

    $wp_customize->add_setting( 'subtitulo2-setting', array(
        'default' => 'Subtitulo 2'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 
    'sliderSubtitulo2-control', array(
        'label' => 'Subtitulo Slider 2',
        'section' => 'slider2-section',
        'settings' => 'subtitulo2-setting'
    )));

    /**parrafo Slider 2*/

    $wp_customize->add_setting( 'parrafo2-setting', array(
        'default' => 'Parrafo 2'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 
    'sliderParrafo2-control', array(
        'label' => 'Parrafo Slider 2',
        'priority'=>1,
        'section' => 'slider2-section',
        'settings' => 'parrafo2-setting'
    )));

    /** FIN SLIDER 2 */

    /** INICIO SLIDER 3 */

    /** Section Slider 3 */

    $wp_customize->add_section('slider3-section',array(
        'title'=>'Slider 3',
        'priority'=>3,
        'panel'=>'sliders',
    ));

    /**Titulo Slider 3*/
    
    $wp_customize->add_setting( 'titulo3-setting', array(
        'default' => 'Titulo 3',
    ));
    
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 
    'sliderTitulo3-control', array(
        'label' => 'Titulo Slider 3',
        'section' => 'slider3-section',
        'settings' => 'titulo3-setting'
    )));

    /**Subtitulo Slider 2*/

    $wp_customize->add_setting( 'subtitulo3-setting', array(
        'default' => 'Subtitulo 3'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 
    'sliderSubtitulo3-control', array(
        'label' => 'Subtitulo Slider 3',
        'section' => 'slider3-section',
        'settings' => 'subtitulo3-setting'
    )));

    /**parrafo Slider 2*/

    $wp_customize->add_setting( 'parrafo3-setting', array(
        'default' => 'Parrafo 3'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 
    'sliderParrafo3-control', array(
        'label' => 'Parrafo Slider 3',
        'priority'=>3,
        'section' => 'slider3-section',
        'settings' => 'parrafo3-setting'
    )));

}
add_action('customize_register','my_customize_register');