<?php

function my_custom_wc_theme_support() {
	add_theme_support('woocommerce');
}
add_action( 'after_setup_theme', 'my_custom_wc_theme_support' );


function initTheme() {
	// đăng ký menu
	register_nav_menu('header_main',__( 'Menu chính' ));
}

add_action('init', 'initTheme');
// add_theme_support('menus');

