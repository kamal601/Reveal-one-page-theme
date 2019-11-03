<?php 
add_action( 'init', 'reveal_portfolio_post' );
/**
 * Register a Portfolio post type.
 *
 *
 */
function reveal_portfolio_post() {
	$labels = array(
		'name'               => _x( 'Portfolio', 'post type general name', 'reveal' ),
		'singular_name'      => _x( 'Portfolio', 'post type singular name', 'reveal' ),
		'menu_name'          => _x( 'portfolio', 'admin menu', 'reveal' ),
		'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'reveal' ),
		'add_new'            => _x( 'Add New', 'Portfolio', 'reveal' ),
		'add_new_item'       => __( 'Add New Portfolio', 'reveal' ),
		'new_item'           => __( 'New Portfolio', 'reveal' ),
		'edit_item'          => __( 'Edit Portfolio', 'reveal' ),
		'view_item'          => __( 'View Portfolio', 'reveal' ),
		'all_items'          => __( 'All portfolio', 'reveal' ),
		'search_items'       => __( 'Search portfolio', 'reveal' ),
		'parent_item_colon'  => __( 'Parent portfolio:', 'reveal' ),
		'not_found'          => __( 'No portfolio found.', 'reveal' ),
		'not_found_in_trash' => __( 'No portfolio found in Trash.', 'reveal' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'reveal' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'portfolio', $args );
}

add_action( 'init', 'reveal_portfolio_category', 0 );

function reveal_portfolio_category(){
	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Category', 'taxonomy general name', 'reveal' ),
		'singular_name'              => _x( 'Writer', 'taxonomy singular name', 'reveal' ),
		'search_items'               => __( 'Search Category', 'reveal' ),
		'popular_items'              => __( 'Popular Category', 'reveal' ),
		'all_items'                  => __( 'All Category', 'reveal' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit category', 'reveal' ),
		'update_item'                => __( 'Update Category', 'reveal' ),
		'add_new_item'               => __( 'Add New Category', 'reveal' ),
		'new_item_name'              => __( 'New Category Name', 'reveal' ),
		'separate_items_with_commas' => __( 'Separate Category with commas', 'reveal' ),
		'add_or_remove_items'        => __( 'Add or remove Category', 'reveal' ),
		'choose_from_most_used'      => __( 'Choose from the most used Category', 'reveal' ),
		'not_found'                  => __( 'No Category found.', 'reveal' ),
		'menu_name'                  => __( 'Category', 'reveal' ),
	);

	$args = array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'category' ),
	);

	register_taxonomy( 'portfolio_category', 'portfolio', $args );
};
 ?>