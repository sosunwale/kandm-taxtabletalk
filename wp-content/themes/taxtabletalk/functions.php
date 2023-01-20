<?php
/**
 * This file adds functions to the TaxtableTalk theme.
 *
 * @package TaxTableTalk
 * @author  Hodessy, LLC
 * @license GNU General Public License v2 or later
 * @link    https://hodessy.com/
 */

 if ( ! function_exists( 'taxtbt_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 0.8.0
	 *
	 * @return void
	 */
	function taxtbt_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'taxtabletalk', get_template_directory() . '/languages' );

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./style.css',
			)
		);

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

	}
}
add_action( 'after_setup_theme', 'taxtbt_setup' );

// Enqueue style sheet.
add_action( 'wp_enqueue_scripts', 'taxtabletalk_enqueue_style_sheet' );
function taxtabletalk_enqueue_style_sheet() {

	wp_enqueue_style( 'taxtabletalk', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

}

/**
 * Register block styles.
 *
 * @since 0.9.2
 */
function taxtbt_register_block_styles() {

	$block_styles = array(
		'core/group'           => array(
			'shadow'       => __( 'Shadow', 'taxtabletalk' ),
			'shadow-solid' => __( 'Shadow Solid', 'taxtabletalk' ),
		),
		'core/list'            => array(
			'no-disc' => __( 'No Disc', 'taxtabletalk' ),
		),
		'core/navigation-link' => array(
			'outline' => __( 'Outline', 'taxtabletalk' ),
		),
		'core/social-links' => array(
			'outline' => __( 'Outline', 'taxtabletalk' ),
		),
		'core/heading' => array(
			'outline-border' => __( 'With Border', 'taxtabletalk' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', 'taxtbt_register_block_styles' );

/**
 * Load custom post type and other included php
 */

 //include_once  __DIR__ . '/vendor/meta-box/meta-box/meta-box.php';  //when used in a plugin
 include_once  __DIR__ . '/inc/taxtbt-podcast-cpt.php';
 include_once  __DIR__ . '/inc/block-patterns.php'; 