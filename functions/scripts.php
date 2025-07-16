<?php

function theme_enqueue_google_fonts() {
    wp_enqueue_style(
        'google-fonts-montserrat',
        'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap',
        false
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_google_fonts');


function theme_resource_hints( $hints, $relation_type ) {
    if ( 'preconnect' === $relation_type ) {
        $hints[] = 'https://fonts.googleapis.com';
        $hints[] = 'https://fonts.gstatic.com';
    }
    return $hints;
}
add_filter( 'wp_resource_hints', 'theme_resource_hints', 10, 2 );



function theme_enqueue_aos_assets() {
    // AOS CSS
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.4/dist/aos.css', array(), '2.3.4');

    // AOS JS
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.4/dist/aos.js', array(), null, true);

    // Optional: enqueue your own script that initializes AOS
    wp_add_inline_script('aos-js', 'AOS.init({ duration: 1500, once: true });');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_aos_assets');


function theme_enqueue_slick_assets() {
    // SLICK CSS
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', array(), '1.8.1');
    wp_enqueue_style('slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', array(), '1.8.1');

    // SLICK JS
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_slick_assets');

function theme_enqueue_match_heights_slick_assets() {
    // Match Heights JS
    wp_enqueue_script('match-heights-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_match_heights_assets');

?>