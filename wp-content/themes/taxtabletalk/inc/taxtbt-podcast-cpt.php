<?php
/**
 * This file creates and manages Podcast Custom Post Type
 */
add_action( 'init', 'taxtbt_register_podcast_pt' );
function taxtbt_register_podcast_pt() {
	$args = [
		'label'  => esc_html__( 'Podcasts', 'taxtabletalk' ),
		'labels' => [
			'menu_name'          => esc_html__( 'Podcasts', 'taxtabletalk' ),
			'name_admin_bar'     => esc_html__( 'Podcast', 'taxtabletalk' ),
			'add_new'            => esc_html__( 'Add Podcast', 'taxtabletalk' ),
			'add_new_item'       => esc_html__( 'Add new Podcast', 'taxtabletalk' ),
			'new_item'           => esc_html__( 'New Podcast', 'taxtabletalk' ),
			'edit_item'          => esc_html__( 'Edit Podcast', 'taxtabletalk' ),
			'view_item'          => esc_html__( 'View Podcast', 'taxtabletalk' ),
			'update_item'        => esc_html__( 'View Podcast', 'taxtabletalk' ),
			'all_items'          => esc_html__( 'All Podcasts', 'taxtabletalk' ),
			'search_items'       => esc_html__( 'Search Podcasts', 'taxtabletalk' ),
			'parent_item_colon'  => esc_html__( 'Parent Podcast', 'taxtabletalk' ),
			'not_found'          => esc_html__( 'No Podcasts found', 'taxtabletalk' ),
			'not_found_in_trash' => esc_html__( 'No Podcasts found in Trash', 'taxtabletalk' ),
			'name'               => esc_html__( 'Podcasts', 'taxtabletalk' ),
			'singular_name'      => esc_html__( 'Podcast', 'taxtabletalk' ),
		],
		'public'              => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite_no_front'    => false,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-admin-collapse',
		'supports' => [
			'title',
			'editor',
			'author',
			'thumbnail',
			'custom-fields',
			'comments',
			'revisions',
		],
		'taxonomies' => [
			'category',
			'tag',
		],
		'rewrite' => true
	];

	register_post_type( 'podcast', $args );
}

/**
 * Add custom metabox and url fields for podcast link buttons
 */

 function taxtbt_register_podcastlink_metabox() {
    add_meta_box( 'taxtbt-1', __( 'Podcast Links', 'taxtabletalk' ), 'taxtbt_display_podcastlink_metabox_callback', 'podcast' );
}
add_action( 'add_meta_boxes', 'taxtbt_register_podcastlink_metabox' );

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function taxtbt_display_podcastlink_metabox_callback( $post ) {
    echo "<h3>Podcast form Links</h3>";
	include  __DIR__ . '/podcast-link-form.php'; //Loads the form php file from the same folder as this one
}

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function taxtbt_save_podcast_links( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( $parent_id = wp_is_post_revision( $post_id ) ) {
        $post_id = $parent_id;
    }
    $fields = [
        'taxtbt_podcast_applepod',
        'taxtbt_podcast_iheart',
        'taxtbt_podcast_youtube',
		'taxtbt_podcast_facebook',
		'taxtbt_podcast_google_pod',
    ];
    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
     }
}
add_action( 'save_post', 'taxtbt_save_podcast_links' );