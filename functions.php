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