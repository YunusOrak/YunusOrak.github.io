<?php
$screen = get_current_screen();
if ( ! empty( $screen->base ) && 'appearance_page_arc-fse-info' === $screen->base ) {
	return false;
}
$pro_purchase_url = "https://olivethemes.com/wordpress-themes/arc-pro/";
?>
<div class="notice notice-info is-dismissible arc-fse-admin-notice">
	<div class="arc-fse-admin-notice-wrapper">
		<h2><?php esc_html_e( 'Howdy, Welcome to', 'arc-fse' ); ?> <?php esc_html_e( 'Arc Fse Theme!', 'arc-fse' ); ?></h2>
		<p><?php esc_html_e( 'Do you know you can get more features in Arc Pro?', 'arc-fse' ); ?></p>
		<a href="<?php echo esc_url( $pro_purchase_url ); ?>" class="arc-fse-admin-notice-primary-button" target="_blank"><?php esc_html_e( 'Get Arc Pro', 'arc-fse' ); ?></a>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=arc-fse-info' ) ); ?>"><?php esc_html_e( 'Learn more about Arc Pro Theme', 'arc-fse' ); ?></a>
	</div>
</div>
<?php
