<?php
function search_type_controls_register_function($wp_customize){
    $wp_customize->add_setting(
        'searchTypeSelector',
        array(
            'default' => 'simple',
            'transport' => 'refresh',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
        )
    );
    $wp_customize->add_control(
        'searchTypeSelector',
        array(
            'label' => __('انتخاب نوع جستجو'),
            'description' => esc_html__('لطفا یک گزینه از لیست انتخاب کنید'),
            'section' => 'searchBoxSection',
            'priority' => 1,
            'type' => 'select',
            'capability' => 'edit_theme_options',
            'choices' => array( // آیتم های لیست.
                'simple' => __('ساده'),
                'modern' => __('مدرن')
            )
        )
    );
}
add_action('customize_register','search_type_controls_register_function');
?>