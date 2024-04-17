<?php
/**
 * wpcharming functions and definitions
 *
 * @package WPCharming
 */

/**
 * Define theme constants
 */
$theme_data   = wp_get_theme();
if ( $theme_data->exists() ) {
	define( 'WPC_THEME_NAME', $theme_data->get( 'Name' ) );
	define( 'WPC_THEME_VERSION', $theme_data->get( 'Version' ) );
}

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 700; /* pixels */
}

if ( ! function_exists( 'wpcharming_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wpcharming_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on WPCharming, use a find and replace
	 * to change 'wpcharming' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'wpcharming', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Use shortcodes in text widgets.
	add_filter( 'widget_text', 'do_shortcode' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
	add_image_size( 'medium-thumb', 500, 300, true );
	add_image_size( 'blog-large', 700, 400, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary', 'wpcharming' ),
		'topbar' => __( 'Top Bar', 'wpcharming' ),
		'footer' => __( 'Footer', 'wpcharming' ),
	) );

	// This theme styles the visual editor to resemble the theme style.
	add_editor_style( 'assets/css/editor-style.css' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	// add_theme_support( 'post-formats', array(
	// 	'aside', 'image', 'video', 'quote', 'link',
	// ) );

	/*
	 * Enable excerpt for page by default.
	 * See https://codex.wordpress.org/Function_Reference/add_post_type_support
	 */
	add_post_type_support('page', 'excerpt');

}
endif; // wpcharming_setup
add_action( 'after_setup_theme', 'wpcharming_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function wpcharming_widgets_init() {
	global $wpc_option;
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'wpcharming' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'wpcharming' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	if ($wpc_option['enable_header_widget']){
	register_sidebar( array(
		'name'          => __( 'Header Right', 'base' ),
		'id'            => 'header-right',
		'before_widget' => '<aside class="header-right-widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));
	register_sidebar( array(
		'name'          => __( 'Header Right', 'base' ),
		'id'            => 'right-header',
		'before_widget' => '<div class="title-area pull-right %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));
	}
	register_sidebar( array(
		'name'          => __( 'Footer 1', 'base' ),
		'id'            => 'footer-1',
		'description'   => wpcharming_sidebar_desc( 'footer-1' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2', 'base' ),
		'id'            => 'footer-2',
		'description'   => wpcharming_sidebar_desc( 'footer-2' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 3', 'base' ),
		'id'            => 'footer-3',
		'description'   => wpcharming_sidebar_desc( 'footer-3' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 4', 'base' ),
		'id'            => 'footer-4',
		'description'   => wpcharming_sidebar_desc( 'footer-4' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer CTA', 'base' ),
		'id'            => 'footer-cta',
		'before_widget' => '<div id="%1$s" class="cta-section widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 1', 'base' ),
		'id'            => 'footer1',
		'description'   => wpcharming_sidebar_desc( 'footer1' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2', 'base' ),
		'id'            => 'footer2',
		'description'   => wpcharming_sidebar_desc( 'footer2' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 3', 'base' ),
		'id'            => 'footer3',
		'description'   => wpcharming_sidebar_desc( 'footer3' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Copyright', 'base' ),
		'id'            => 'footer-copyright',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'wpcharming_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wpcharming_scripts() {
	global $wpc_option;
	
	// Stylesheet
	wp_enqueue_style( 'wpcharming-style', get_stylesheet_uri() );
	wp_enqueue_style( 'wpcharming-fontawesome', get_template_directory_uri() .'/assets/css/font-awesome.min.css', array(), '4.2.0' );

	// jQuery Core
	wp_enqueue_script( 'jquery' );

	// Js vars from settings
	$is_fixed_header = array('fixed_header' => $wpc_option['header_fixed']);
	wp_localize_script('jquery','header_fixed_setting', $is_fixed_header);


	wp_enqueue_script( 'wpcharming-modernizr', get_template_directory_uri() . '/assets/js/modernizr.min.js', array(), '2.6.2', false );
	wp_enqueue_script( 'wpcharming-libs', get_template_directory_uri() . '/assets/js/libs.js', array(), '', true );
	wp_enqueue_script( 'wpcharming-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), '', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wpcharming_scripts' );

/**
 * Theme Options
 */
if ( !class_exists( 'ReduxFramework' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/options/framework.php' );
}
if ( !isset( $redux_demo ) ) {
	require_once( dirname( __FILE__ ) . '/inc/options-config.php' );
}

/**
 * Load VC custom style if Visual Compressor is installed.
 */
function wpcharming_vc_style() {
	wp_enqueue_style( 'wpcharming-vccustom', get_template_directory_uri() . '/assets/css/vc_custom.css', array(), null );
}
/**
 * Load VC addons if Visual Compressor is installed.
 */
if ( class_exists('WPBakeryVisualComposerAbstract') ) {
	vc_set_as_theme( $disable_updater = true );
	require get_template_directory() . '/inc/vc_mods/vc_mods.php';
	require get_template_directory() . '/inc/vc_mods/vc_general_elements.php';
	require get_template_directory() . '/inc/vc_mods/vc_special_elements.php';
	$vc_template_dir =  get_template_directory() . '/inc/vc_mods/vc_templates';
	vc_set_shortcodes_templates_dir( $vc_template_dir );
	add_action('wp_head', 'wpcharming_vc_style', 5);
}

/**
 * Remove VC Teaser on page/post editor screen.
 */
function remove_vc_teaser() {
	remove_meta_box( 'vc_teaser' , 'page' , 'normal' ); 
	remove_meta_box( 'vc_teaser' , 'post' , 'normal' ); 
}
add_action( 'admin_menu' , 'remove_vc_teaser' );

/**
 * Recomend plugins via TGM activation class
 */
require get_template_directory() . '/inc/tgm/plugin-activation.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Load custom metaboxes and fields.
 */
require get_template_directory() . '/inc/meta/usage.php';

/**
 * Load custom theme widget.
 */
require get_template_directory() . '/inc/widgets/wpc_posts.php';

/**
 * One click demo importer, it's awesome too.
 */
require get_template_directory() .'/inc/importer/init.php';

function is_tree($pid)
{
	global $post;

	$ancestors = get_post_ancestors($post->$pid);
	$root = count($ancestors) - 1;
	$parent = $ancestors[$root];

	if(is_page() && (is_page($pid) || $post->post_parent == $pid || in_array($pid, $ancestors)))
	{
		return true;
	}
	else
	{
		return false;
	}
};

// customize embed settings
function custom_youtube_settings($code){
	if(strpos($code, 'youtu.be') !== false || strpos($code, 'youtube.com') !== false){
		$return = preg_replace("@src=(['\"])?([^'\">\s]*)@", "src=$1$2&rel=0", $code);
		return $return;
	}
	return $code;
}
 
add_filter('embed_handler_html', 'custom_youtube_settings');
add_filter('embed_oembed_html', 'custom_youtube_settings');

/**
 * Load custom theme options.
 */
if( function_exists('acf_set_options_page_title') )
{
    acf_set_options_page_title( __('Home Options') );
}
if( function_exists('acf_add_options_sub_page') )
{
	acf_add_options_sub_page( 'Header' );
	acf_add_options_sub_page( 'Home page' );
	acf_add_options_sub_page( 'Footer' );
}

add_shortcode( 'gfrm_getsubfaq', 'gfrm_getsubfaq_fun' );
function gfrm_getsubfaq_fun( $atts ) {
    $pagelist = wp_list_pages( array(
        'title_li'    => '',
        'child_of'    => 75,
        'echo' => false,
		'sort_column' => 'ID',
		'post_status'  => 'publish'
        
    ) );
	
	return $pagelist;
}

// spam filter

add_filter( 'gform_pre_send_email', 'check_before_email' );
function check_before_email(  $email ) {
	 $msg ='';
		$msg = $email['message'];
		if ($msg)
			{
				$field_value = $msg;
				$pattern = '(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})';
				
				if (preg_match_all($pattern, $field_value))
				{
	                 $email['abort_email'] = true;
	                 return $email;
				}			
	        }    		
 }
 add_filter( 'gform_confirmation', 'custom_confirmation', 10, 4 );
function custom_confirmation( $confirmation, $form, $entry, $ajax ) {
	$get_gdata='';
    $get_gdata = rgar( $entry, '5' );
	$field_value = $get_gdata;
	$pattern = '(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})';
	
	if (preg_match_all($pattern, $field_value))
	{
		$redirectURL="/thank-you-two/";
		$confirmation = array( 'redirect' => $redirectURL );
		        
	}
    return $confirmation;
}
add_filter( 'wpseo_exclude_from_sitemap_by_post_ids', function () {
  return array( 3390,3517,3735,3408,3266,1382,1413,1409,1271,1405,1288,1380,1290,1340,1348,1345,1350,1411,1302,1376,
1306,1407,1300,1281,1352,1378,1292,1294 );
} );

// This will add a filter on `schema_wp_breadcrumb_enabled` that returns false 
add_filter( 'schema_wp_breadcrumb_enabled', '__return_false' ); 
add_filter( 'schema_wp_breadcrumb_enabled', 'schema_wp_breadcrumb_disable_238746' );
function schema_wp_breadcrumb_disable_238746( $breadcrumb_enabled ){
	return false;
}
add_filter( 'schema_wp_breadcrumb_enabled', 'schema_wp_breadcrumb_woo_product_disable' );

function schema_wp_breadcrumb_woo_product_disable( $breadcrumb_enabled ){
	
	if ( class_exists( 'woocommerce' ) ) { 
		if ( is_woocommerce() ) return false;
	}
}

function disable_yoast_schema_data($data){
	$data = array();
	return $data;
}
add_filter('wpseo_json_ld_output', 'disable_yoast_schema_data', 10, 1);

add_filter( 'gform_confirmation_anchor' , '__return_false' );
add_filter( 'acf/admin/prevent_escaped_html_notice', '__return_true' );