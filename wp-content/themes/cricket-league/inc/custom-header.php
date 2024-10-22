<?php
/**
 * @package Cricket League 
 * Setup the WordPress core custom header feature.
 *
 * @uses cricket_league_header_style()
*/
function cricket_league_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'cricket_league_custom_header_args', array(
		'header-text' 			 =>	false,
		'width'                  => 1200,
		'height'                 => 70,
		'flex-width'    		 => true,
		'flex-height'    		 => true,
		'wp-head-callback'       => 'cricket_league_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'cricket_league_custom_header_setup' );

if ( ! function_exists( 'cricket_league_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see cricket_league_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'cricket_league_header_style' );

function cricket_league_header_style() {
	if ( get_header_image() ) :
	$custom_css = "
        .home-page-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		    background-size: cover;
		}";
	   	wp_add_inline_style( 'cricket-league-basic-style', $custom_css );
	endif;
}
endif;