<?php
/**
 * Ekolok functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Ekolok
 */

if ( ! function_exists( 'ekolok_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ekolok_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Ekolok, use a find and replace
		 * to change 'ekolok' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ekolok', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'ekolok' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'ekolok_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'ekolok_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ekolok_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ekolok_content_width', 640 );
}
add_action( 'after_setup_theme', 'ekolok_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ekolok_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ekolok' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ekolok' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ekolok_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ekolok_scripts() {
	wp_enqueue_style( 'ekolok-style', get_stylesheet_uri() );

	wp_enqueue_script( 'ekolok-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'ekolok-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ekolok_scripts' );

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 20 );

add_action( 'init', 'register_cpt_colocation' );

function register_cpt_colocation() {

	$labels = array(
		'name' => __( 'Liste des colocations'),
		'singular_name' => __( 'Liste colocation'),
		'add_new' => __( 'Ajouter une colocation'),
		'add_new_item' => __( 'Ajouter une nouvelle colocation'),
		'edit_item' => __( 'Editer une colocation'),
		'new_item' => __( 'Nouvau une colocation'),
		'view_item' => __( 'Voir la colocation'),
		'search_items' => __( 'Chercher une colocation'),
		'not_found' => __( 'Aucune annonce de colocation'),
		'not_found_in_trash' => __( 'Aucune annonce trouvé dans la corbeille'),
		'parent_item_colon' => __( 'zz', 'commande en lignes' ),
		'menu_name' => __( 'Liste des colocations'),
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'supports' => array( 'editor','thumbnail','title' ),
		'taxonomies' => array( 'category', 'colocation' ),
		'menu_icon' => 'dashicons-admin-multisite',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'has_archive' => false,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'page'
	);

	register_post_type( 'colocation', $args );
}