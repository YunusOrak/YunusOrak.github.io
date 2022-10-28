<?php
/**
 * Add theme page
 */
function arc_fse_menu() {
	add_theme_page( esc_html__( 'Arc Fse Theme', 'arc-fse' ), esc_html__( 'Arc Fse Theme', 'arc-fse' ), 'edit_theme_options', 'arc-fse-info', 'arc_fse_theme_page_display' );
}
add_action( 'admin_menu', 'arc_fse_menu' );

/**
 * Display About page
 */
function arc_fse_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}

	include_once 'templates/theme-info.php';
}

function arc_fse_admin_plugin_notice() {
	include 'templates/admin-plugin-notice.php';
}
add_action( 'admin_notices', 'arc_fse_admin_plugin_notice' );
