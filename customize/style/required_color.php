<?php
function required_color_controls_register_function($wp_customize){
    $wp_customize->add_setting(
        'requiredColorSelector',
        array(
            'default' => 'rgb(220, 250, 230)',
            'transport' => 'refresh',
            'sanitize_callback' => ''
        )
    );
    $wp_customize->add_control(
        'requiredColorSelector',
        array(
            'label' => __('کنترل رنگ'),
            'description' => esc_html__('رنگ مورد نظر را انتخاب کنید'),
            'section' => 'requiredColor',
            'priority' => 1,
            'type' => 'color',
            'capability' => 'edit_theme_options',
        )
    );
}
add_action('customize_register','required_color_controls_register_function');
?>
