<?php

// *** Remove the parent themes stylesheet and scripts *** \\
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

// Get the theme data
function theme_enqueue_styles() {
    $the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

//Text Domain
function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

// Shortcodes in text widgets
add_filter('widget_text', 'do_shortcode');

// *** PSC Theme Files *** \\
function psc_enqueue_files () {
    wp_enqueue_style( 'Slick CSS', get_stylesheet_directory_uri() . '/slick/slick.css' );
    wp_enqueue_style( 'Slick Theme CSS', get_stylesheet_directory_uri() . '/slick/slick-theme.css' );
    wp_enqueue_style( 'Google Fonts', 'https://fonts.googleapis.com/css?family=PT+Sans&display=swap' );
    wp_enqueue_script( 'Slick JS', get_stylesheet_directory_uri() . '/slick/slick.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'PSC Theme JS', get_stylesheet_directory_uri() . '/js/psc.js', array('jquery'), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'psc_enqueue_files');

// *** ACF Options Page *** \\
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Company Profile',
		'menu_title'	=> 'Company Profile',
		'menu_slug' 	=> 'company-profile'
	));
    
}

// *** Google Maps Script for ACF *** \\
function google_maps_scripts () {
	if (is_page('contact')) {
	   		wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=API+KEY', array(), '3', true );
			wp_enqueue_script( 'google-map-init', get_stylesheet_directory_uri() . '/js/google-maps.js', array('google-map', 'jquery'), '0.1', true );
		}
	}
add_action( 'wp_enqueue_scripts', 'google_maps_scripts' );

// *** Register Google Maps API for ACF *** \\
function my_acf_google_map_api( $api ){
	$api['key'] = 'API+KEY';
	return $api;	
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


//PSC Custom Dash Footer
function psc_filter_admin_footer () {
    echo '<span id="dashFooter">Website developed by <a style = "color: #f05a28; text-decoration: none;" href="https://www.pixelstrikecreative.com" target="_blank">PixelStrike Creative</a></span>';
}
add_filter('admin_footer_text', 'psc_filter_admin_footer');

//Add custom logo to wp-login
function psc_custom_logo_css () {
    wp_enqueue_style('login-styles', get_stylesheet_directory_uri() . '/login/login_styles.css');
}
add_action('login_enqueue_scripts', 'psc_custom_logo_css');

//Change the wp-login logo url
function psc_login_url(){
    return get_bloginfo( 'wpurl' );
}
add_filter('login_headerurl', 'psc_login_url');

//Replace the WordPress dashboard logo
function psc_admin_css() {
	wp_enqueue_style('dashboard-styles', get_stylesheet_directory_uri() . '/dashboard/dashboard.css');
}
add_action('admin_head', 'psc_admin_css');

// *** Widgets *** \\

// Deregister Sidebars
function psc_remove_sidebars () {
	unregister_sidebar( 'hero' );
	unregister_sidebar( 'herocanvas' );
	unregister_sidebar( 'statichero' );
	unregister_sidebar( 'footerfull' );
	unregister_sidebar( 'left-sidebar' );
	unregister_sidebar( 'right-sidebar' );
}
add_action( 'widgets_init', 'psc_remove_sidebars', 11 );

// Register Theme Sidebars
function psc_sidebars() {
	$args = array(
        'id'            => 'primary_sidebar',
        'class'         => 'primary-sidebar',
        'name'          => 'Sidebar',
        'description'   => 'This widget area will appear on the side of a page.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widgettitle">',
        'after_title'   => '</h5>',
    );
    register_sidebar( $args );

    $args = array(
        'id'            => 'footer_1',
        'class'         => 'footer_1',
        'name'          => 'Footer 1',
        'description'   => 'This widget area will appear in the first position of the footer.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widgettitle">',
        'after_title'   => '</h5>',
    );
    register_sidebar( $args );

    $args = array(
        'id'            => 'footer_2',
        'class'         => 'footer_2',
        'name'          => 'Footer 2',
        'description'   => 'This widget area will appear in the second position of the footer.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widgettitle">',
        'after_title'   => '</h5>',
    );
    register_sidebar( $args );

    $args = array(
        'id'            => 'footer_3',
        'class'         => 'footer_3',
        'name'          => 'Footer 3',
        'description'   => 'This widget area will appear in the third position of the footer.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widgettitle">',
        'after_title'   => '</h5>',
    );
    register_sidebar( $args );

    $args = array(
        'id'            => 'footer_4',
        'class'         => 'footer_4',
        'name'          => 'Footer 4',
        'description'   => 'This widget area will appear in the fourth position of the footer.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widgettitle">',
        'after_title'   => '</h5>',
    );
    register_sidebar( $args );

}
add_action( 'widgets_init', 'psc_sidebars' );

//Add the theme thumbnail sizes
add_image_size( 'blog-small', 575, 400, array( 'center', 'center' ) );
add_image_size( 'blog-large', 1140, 415, array( 'center', 'center' ) );

//Change read more hellip to just dots
function psc_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'psc_excerpt_more' );

function understrap_all_excerpts_get_more_link( $post_excerpt ) {
    return $post_excerpt . '<p><a class="read-more-link text-uppercase" href="' . get_permalink( get_the_ID() ) . '">' . 'Read More' . '</a></p>';
}
add_filter( 'wp_trim_excerpt', 'understrap_all_excerpts_get_more_link' );