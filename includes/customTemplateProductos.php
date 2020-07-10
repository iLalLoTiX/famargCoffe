<?php 



function productos( $wp_customize ) {
    class Cstmzr_Category_Checkboxes_Control extends \WP_Customize_Control {
        public $type = 'category-checkboxes';
     
        public function render_content() {
     
            // Loads theme-customizer.js javascript file.
            echo '<script src="' . get_template_directory_uri() . '/js/theme-customizer.js"></script>';
     
            // Displays checkbox heading
            echo '<span class="customize-control-title">' . esc_html( $this->label ) . '</span>';
     
            // Displays category checkboxes.
            foreach ( get_categories() as $category ) {
                echo '<label><input type="checkbox" name="category-' . $category->term_id . '" id="category-' . $category->term_id . '" class="cstmzr-category-checkbox"> ' . $category->cat_name . '</label><br>';    
            }
     
            // Loads the hidden input field that stores the saved category list.
            ?><input type="hidden" id="<?php echo $this->id; ?>" class="cstmzr-hidden-categories" <?php $this->link(); ?> value="<?php echo sanitize_text_field( $this->value() ); ?>"><?php
        }
    }
    
    $wp_customize->add_section(
        'cstmzr_category_section',
        array(
            'title' => 'Category Selection',
            'priority' => 35,
        )
    );
     
    $wp_customize->add_setting( 'cstmzr_categories' );
     
    $wp_customize->add_control(
        new Cstmzr_Category_Checkboxes_Control(
            $wp_customize,
            'cstmzr_categories',
            array(
                'label' => 'Categories',
                'section' => 'cstmzr_category_section',
                'settings' => 'cstmzr_categories'
            )
        )
    );
}
add_action('customize_register','productos');