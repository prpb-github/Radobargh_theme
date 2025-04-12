<?php
require_once 'header/logo.php';
require_once 'header/search_type.php';
require_once 'header/placeholder_search.php';
//require_once 'style/required_color.php';
function header_customize_register_function($wp_customize){
    //تم و رنگ
    /*$wp_customize->add_panel(
        'theme_style',
        array(
            'title' => __('استایل'),
            'description' => esc_html__('در این بخش میتوانید تم و استایل سایت خود را ویرایش کنید'),
            'priority' => 1,
            'capability' => 'edit_theme_options',
        )
    );
    $wp_customize->add_section( 
        'requiredColor',
        array(
            'title' => __('رنگ های مورد نیاز'),
            'description' => esc_html__('در این بخش میتوانید رنگ اصلی سایت خود را ویرایش کنید'),
            'panel' => 'theme_style', 
            'priority' => 1,
            'capability' => 'edit_theme_options', 
        )
    );
    $wp_customize->add_setting(
        'requiredColorSelector',
        array(
            'default' => 'rgb(220, 250, 230)',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_hex_color'
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
    );*/
    //سربرگ
    $wp_customize->add_panel(
        'header_panel',
        array(
            'title' => __('سربرگ'),
            'description' => esc_html__('در این بخش میتوانید سربرگ سایت خود را ویرایش کنید'),
            'priority' => 2,
            'capability' => 'edit_theme_options',
        )
    );
    $wp_customize->add_section( 
        'logoSection',
        array(
            'title' => __('لوگو'),
            'description' => esc_html__('در این بخش میتوانید لوگو سایت خود را ویرایش کنید'),
            'panel' => 'header_panel', 
            'priority' => 1,
            'capability' => 'edit_theme_options', 
        )
    );
    $wp_customize->add_section( 
        'searchBoxSection',
        array(
            'title' => __('باکس جستجو'),
            'description' => esc_html__('در این بخش میتوانید مدل جستجو خود را ویرایش کنید'),
            'panel' => 'header_panel', 
            'priority' => 2,
            'capability' => 'edit_theme_options', 
        )
    );
}
add_action('customize_register','header_customize_register_function');
?>
