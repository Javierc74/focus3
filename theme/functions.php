<?php
/**
 * focus3 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package focus3
 */

if ( ! function_exists( 'focus3_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function focus3_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on focus3, use a find and replace
	 * to change 'focus3' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'focus3', get_template_directory() . '/languages' );

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
	add_image_size( 'lineas-ico', 500, 500, true );
	add_image_size( 'lineas-detalle', 1140, 500, true );



	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'focus3' ),
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
	add_theme_support( 'custom-background', apply_filters( 'focus3_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'focus3_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function focus3_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'focus3_content_width', 640 );
}
add_action( 'after_setup_theme', 'focus3_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function focus3_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'focus3' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'focus3' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'focus3_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function focus3_scripts() {
	wp_enqueue_style( 'normalize-style', get_template_directory_uri() . '/css/normalize.css' );
	
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'fuentes', get_template_directory_uri() . '/css/font.css' );
	wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/css/slick-theme.css' );
	wp_enqueue_style( 'slick-theme-style', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	
	wp_enqueue_style( 'focus3-style', get_stylesheet_uri() );

	
	wp_enqueue_script( 'jqueryd', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array(), '20151216', false );
	wp_enqueue_script( 'tatutrad-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'tatutrad-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', array(), '20151215', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '20151215', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array(), '20151215', true );


	
}
add_action( 'wp_enqueue_scripts', 'focus3_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


add_action('init', 'gestor_trabajos_register');

function gestor_trabajos_register() {

	//Arguments to create post type.
	$args = array(

	'label' => __('Proyectos'),
	'singular_label' => __('Proyecto'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => true,
	'has_archive' => true,
	'supports' => array('title', excerpt , 'editor', 'page-attributes', 'thumbnail'),
	
	'rewrite' => array('slug' => 'proyectos', 'with_front'=> false), );

	//Register type and custom taxonomy for type.
	register_post_type( 'proyectos' , $args );



	register_taxonomy("tipo_proyecto", array("proyectos"),
	array("hierarchical" => true, "label" => "Categorias de proyecto", "singular_label" => "Categoria de proyecto", "rewrite"=> true, "slug" => 'tipo-proyecto'));
		
}


add_action('init', 'gestor_lineas_register');

function gestor_lineas_register() {

	//Arguments to create post type.
	$args = array(

	'label' => __('Lineas'),
	'singular_label' => __('Linea'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => true,
	'has_archive' => true,
	'supports' => array('title', excerpt , 'editor', 'page-attributes', 'thumbnail'),
	
	'rewrite' => array('slug' => 'lineas', 'with_front'=> false), );

	//Register type and custom taxonomy for type.
	register_post_type( 'lineas' , $args );



	register_taxonomy("tipo_linea", array("lineas"),
	array("hierarchical" => true, "label" => "Categorias de linea", "singular_label" => "Categoria de linea", "rewrite"=> true, "slug" => 'tipo-linea'));
		
}
