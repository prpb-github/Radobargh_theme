<?php
function placeholdersearch_controls_register_function($wp_customize){
    $wp_customize->add_setting(
        'placeholderSearchText',
        array(
            'default' => '  جستجو کنید...',
            'transport' => 'refresh',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
        )
    );
    $wp_customize->add_control(
        'placeholderSearchText',
        array(
            'label' => __('جایگزین باکس جستجو'),
            'description' => esc_html__('در این بخش میتوانید placeholder باکس جستجو را مشخص کنید'),
            'section' => 'searchBoxSection',
            'priority' => 2,
            'type' => 'text',
            'capability' => 'edit_theme_options',
            'input_attrs' => array(
                'class' => '',
                'style' => 'border: 1px solid rebeccapurple',
                'placeholder' => __(''),
            ),
        )
    );
}
add_action('customize_register','placeholdersearch_controls_register_function');
?>