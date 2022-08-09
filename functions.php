<?php
/**
 * Ambitious functions and definitions
 *
 * @package Ambitious
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function ambitious_setup() {

	// Set default Post Thumbnail size.
	set_post_thumbnail_size( 1530, 765 );

	// Enqueue editor styles.
	add_editor_style( 'style.css' );

	// Remove Core block patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'ambitious_setup' );


/**
 * Enqueue scripts and styles.
 */
function ambitious_scripts() {

	// Register and Enqueue Stylesheet.
	wp_enqueue_style( 'ambitious-stylesheet', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'ambitious_scripts' );


/**
 * Enqueue block styles and scripts for Gutenberg Editor.
 */
function ambitious_block_scripts() {

	// Enqueue Editor Styling.
	wp_enqueue_style( 'ambitious-editor-styles', get_theme_file_uri( '/assets/css/editor-styles.css' ), array(), wp_get_theme()->get( 'Version' ), 'all' );

	// Get current screen.
	$current_screen = get_current_screen();

	// Enqueue Page Template Switcher Editor plugin.
	if ( method_exists( $current_screen, 'is_block_editor' ) && $current_screen->is_block_editor() && 'post' === $current_screen->base ) {
		wp_enqueue_script( 'ambitious-page-template-switcher', get_theme_file_uri( '/assets/js/page-template-switcher.js' ), array( 'wp-blocks', 'wp-element', 'wp-edit-post' ), '2022-06-01' );
	}
}
add_action( 'enqueue_block_editor_assets', 'ambitious_block_scripts' );


/**
* Enqueue theme fonts.
*/
function ambitious_theme_fonts() {
	$fonts_url = ambitious_get_fonts_url();

	// Load Fonts if necessary.
	if ( $fonts_url ) {
		require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );
		wp_enqueue_style( 'ambitious-theme-fonts', wptt_get_webfont_url( $fonts_url ), array(), '20201110' );
	}
}
add_action( 'wp_enqueue_scripts', 'ambitious_theme_fonts', 1 );
add_action( 'enqueue_block_editor_assets', 'ambitious_theme_fonts', 1 );


/**
 * Retrieve webfont URL to load fonts locally.
 */
function ambitious_get_fonts_url() {
	$font_families = array(
		'Manrope:400,400italic,700,700italic',
		'Libre Franklin:400,400italic,700,700italic',
	);

	$query_args = array(
		'family'  => urlencode( implode( '|', $font_families ) ),
		'subset'  => urlencode( 'latin,latin-ext' ),
		'display' => urlencode( 'swap' ),
	);

	return apply_filters( 'ambitious_get_fonts_url', add_query_arg( $query_args, 'https://fonts.googleapis.com/css' ) );
}


/**
 * Change excerpt length for default posts
 *
 * @param int $length Length of excerpt in number of words.
 * @return int
 */
function ambitious_excerpt_length( $length ) {
	if ( is_admin() ) {
		return $length;
	}

	return apply_filters( 'ambitious_excerpt_length', 42 );
}
add_filter( 'excerpt_length', 'ambitious_excerpt_length' );


/**
 * Add body classes in Gutenberg Editor.
 */
function ambitious_block_editor_body_classes( $classes ) {
	global $post;
	$current_screen = get_current_screen();

	// Return early if we are not in the Gutenberg Editor.
	if ( ! ( method_exists( $current_screen, 'is_block_editor' ) && $current_screen->is_block_editor() && 'post' === $current_screen->base ) ) {
		return $classes;
	}

	// Fullwidth Page Template?
	if ( 'page-fullwidth' === get_page_template_slug( $post->ID ) or 'page-no-title-fullwidth' === get_page_template_slug( $post->ID ) ) {
		$classes .= ' ambitious-fullwidth-page';
	}

	// No Title Page Template?
	if ( 'page-no-title' === get_page_template_slug( $post->ID ) or 'page-no-title-fullwidth' === get_page_template_slug( $post->ID ) ) {
		$classes .= ' ambitious-no-title-page';
	}

	return $classes;
}
add_filter( 'admin_body_class', 'ambitious_block_editor_body_classes' );


/**
 * Registers block pattern categories.
 *
 * @return void
 */
function ambitious_register_block_pattern_categories() {
	$block_pattern_categories = array(
		'ambitious_hero'         => array( 'label' => __( 'Ambitious: Hero', 'ambitious' ) ),
		'ambitious_cta'          => array( 'label' => __( 'Ambitious: Call to Action', 'ambitious' ) ),
		'ambitious_features'     => array( 'label' => __( 'Ambitious: Features', 'ambitious' ) ),
		'ambitious_portfolio'    => array( 'label' => __( 'Ambitious: Portfolio', 'ambitious' ) ),
		'ambitious_services'     => array( 'label' => __( 'Ambitious: Services', 'ambitious' ) ),
		'ambitious_testimonials' => array( 'label' => __( 'Ambitious: Testimonials', 'ambitious' ) ),
		'ambitious_team'         => array( 'label' => __( 'Ambitious: Team', 'ambitious' ) ),
		'ambitious_page_layouts' => array( 'label' => __( 'Ambitious: Full Page Layouts', 'ambitious' ) ),
		'ambitious_blog'         => array( 'label' => __( 'Ambitious: Blog Posts', 'ambitious' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 */
	$block_pattern_categories = apply_filters( 'ambitious_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'ambitious_register_block_pattern_categories', 9 );


/**
 * Registers block styles.
 *
 * @return void
 */
function ambitious_register_block_styles() {

	// Register Main Navigation block style.
	register_block_style( 'core/navigation', array(
		'name'         => 'main-navigation',
		'label'        => esc_html__( 'Main Navigation', 'ambitious' ),
		'style_handle' => 'ambitious-stylesheet',
	) );
}
add_action( 'init', 'ambitious_register_block_styles', 9 );
