<?php

require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function cricket_league_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Ibtana - WordPress Website Builder', 'cricket-league' ),
			'slug'             => 'ibtana-visual-editor',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Woocommerce', 'cricket-league' ),
			'slug'             => 'woocommerce',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'YITH WooCommerce Wishlist', 'cricket-league' ),
			'slug'             => 'yith-woocommerce-wishlist',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'cricket_league_register_recommended_plugins' );