<?php
function register_mok_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/mok-widget-1.php' );
    require_once( __DIR__ . '/widgets/mok-widget-2.php' );
	$widgets_manager->register( new \elementor_mok_widget_1() );
    $widgets_manager->register( new \elementor_mok_widget_2() );
}
add_action( 'elementor/widgets/register', 'register_mok_widget' );
