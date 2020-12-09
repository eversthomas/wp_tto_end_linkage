<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function twenty_twenty_one_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'wp_tto_end_linkage-columns-overlap',
				'label' => esc_html__( 'Overlap', 'wp_tto_end_linkage' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'wp_tto_end_linkage-border',
				'label' => esc_html__( 'Borders', 'wp_tto_end_linkage' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'wp_tto_end_linkage-border',
				'label' => esc_html__( 'Borders', 'wp_tto_end_linkage' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'wp_tto_end_linkage-border',
				'label' => esc_html__( 'Borders', 'wp_tto_end_linkage' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'wp_tto_end_linkage-image-frame',
				'label' => esc_html__( 'Frame', 'wp_tto_end_linkage' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'wp_tto_end_linkage-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'wp_tto_end_linkage' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'wp_tto_end_linkage-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'wp_tto_end_linkage' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'wp_tto_end_linkage-border',
				'label' => esc_html__( 'Borders', 'wp_tto_end_linkage' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'wp_tto_end_linkage-separator-thick',
				'label' => esc_html__( 'Thick', 'wp_tto_end_linkage' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'wp_tto_end_linkage-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'wp_tto_end_linkage' ),
			)
		);
	}
	add_action( 'init', 'twenty_twenty_one_register_block_styles' );
}
