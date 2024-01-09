<?php
/**
 * Setup theme
 */
function bz_theme_setup() {

	register_nav_menus(
		array(
			'main-left'   => __( 'Main Menu Left', 'bz' ),
			'main-right'  => __( 'Main Menu Right', 'bz' ),
			'menu-footer' => __( 'Menu Footer', 'bz' ),
			'copyright'   => __( 'Copryright Menu', 'bz' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	//add_image_size( 'main-header-image', 1594, 436, array( 'center', 'center' ) );

	//set_post_thumbnail_size( 500, 350, 'center', 'center' );

	//add_image_size( 'gallery-full', 1024, false );

	//add_image_size( 'mega-link-thumbnail', 1000, 500, array( 'center', 'center' ) );

}

add_action( 'after_setup_theme', 'bz_theme_setup' );

/**
 * Register our sidebars and widgetized areas.
 */
function bz_theme_footer_widgets_init() {

	register_sidebar(
		array(
			'name'          => 'Footer',
			'id'            => 'footer',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		),
	);

	register_sidebar(
		array(
			'name'          => 'Header Language Switcher',
			'id'            => 'header_ls',
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

}

add_action( 'widgets_init', 'bz_theme_footer_widgets_init' );

if ( ! function_exists( 'bz_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions dig_theme_enqueue_styles() and twentytwentytwo_editor_styles() above.
	 */
	function bz_get_font_face_styles() {

		return "
			@font-face {
				font-family: 'Pressura';
				src: url('" . esc_url( get_template_directory_uri() ) . "/assets/fonts/GT-Pressura/GT-Pressura-Bold.woff') format('woff');
				font-weight: 700;
				font-style: normal;
			}

			@font-face {
				font-family: 'Lyon';
				src: url('" . esc_url( get_template_directory_uri() ) . "/assets/fonts/LyonText/LyonText-Semibold-Web.woff2') format('woff2'), url('/assets/fonts/LyonText/LyonText-Semibold-Web.woff') format('woff');
				font-weight: 600;
				font-style: normal;
			}

			@font-face {
				font-family: 'Lyon';
				src: url('" . esc_url( get_template_directory_uri() ) . "/assets/fonts/LyonText/LyonText-SemiboldItalic-Web.woff2') format('woff2'), url('" . esc_url( get_template_directory_uri() ) . "/assets/fonts/LyonText/LyonText-SemiboldItalic-Web.woff') format('woff');
				font-weight: 600;
				font-style: italic;
			}
		";

	}

endif;

if ( ! function_exists( 'bz_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 */
	function bz__preload_webfonts() {
		?>
		<link rel="preload" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fonts/GT-Pressura/GT-Pressura-Bold.woff" as="font" type="font/woff" crossorigin>
		<link rel="preload" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fonts/LyonText/LyonText-Semibold-Web.woff2" as="font" type="font/woff2" crossorigin>
		<link rel="preload" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fonts/LyonText/LyonText-Semibold-Web.woff" as="font" type="font/woff" crossorigin>
		<?php
	}

endif;

add_action( 'wp_head', 'bz__preload_webfonts' );


/**
 * Enqueue styles and scripts
 */
function bz_theme_enqueue_styles() {

	//Get the theme data
	$the_theme     = wp_get_theme(); 
	$theme_version = $the_theme->get( 'Version' );

	// Register Theme main style.
	wp_register_style( 'theme-styles', get_template_directory_uri() . '/dist/css/main.css', array(), $theme_version );

	// Add styles inline.
	wp_add_inline_style( 'theme-styles', bz_get_font_face_styles() );

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'theme-styles' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/dist/js/main.js', array( 'jquery' ), $theme_version, false );

	/*if ( is_home() ) :
		wp_enqueue_script( 'blog-ajax', get_template_directory_uri() . '/dist/js/blog-ajax.js', array( 'jquery' ), $theme_version, true );
		wp_localize_script( 'blog-ajax', 'blog_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
	endif;*/
}

add_action( 'wp_enqueue_scripts', 'bz_theme_enqueue_styles' );


/**
 * Lowers the metabox priority to 'core' for Yoast SEO's metabox.
 *
 * @param string $priority The current priority.
 *
 * @return string $priority The potentially altered priority.
 */
function bz_theme_lower_yoast_metabox_priority( $priority ) {
	return 'core';
}

add_filter( 'wpseo_metabox_prio', 'bz_theme_lower_yoast_metabox_priority' );


// Theme custom template tags.
require get_template_directory() . '/inc/theme-template-tags.php';

// The theme admin settings.
require get_template_directory() . '/inc/theme-admin-settings.php';
