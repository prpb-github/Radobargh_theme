<?php
function logo_controls_register_function($wp_customize){
    $wp_customize->add_setting(
        'logoSelector',
        array(
            'default' => '',
            'transport' => 'refresh',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
        )
    );
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'logoSelector',
        array(
            'label' => __('انتخاب لوگو'),
            'section' => 'logoSection',
            'priority' => 1,
            'button_labels' => array( // گزینه های شخصی سازی دکمه .
                'select' => __('انتخاب تصویر'),
                'change' => __('تغییر تصویر'),
                'remove' => __('حذف'),
                'default' => __('پیش فرض'),
                'placeholder' => __('تصویری انتخاب نشده است'),
                'frame_title' => __('انتخاب تصویر'),
                'frame_button' => __('انتخاب تصویر'),
            )
        )
    ));
}
add_action('customize_register','logo_controls_register_function');
?>
