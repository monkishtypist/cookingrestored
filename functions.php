<?php
/*
 Soledad child theme functions and definitions
*/
function penci_soledad_child_scripts() {
    wp_enqueue_style( 'penci-soledad-parent-style', get_template_directory_uri(). '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'penci_soledad_child_scripts' );

/*
 * All custom functions go here
 */

function adsense_scripts() {
    // $ad_client = 'ca-pub-1346987114864425'; // OLD
    // echo sprintf( '<script async src="%1$s"></script>', $ad_src ); // OLD
    // echo sprintf( '<script>(adsbygoogle = window.adsbygoogle || []).push({ google_ad_client: "%1$s", enable_page_level_ads: true });</script>', $ad_client ); // OLD

    $ad_client = 'ca-pub-4769896344362494';
    $ad_src = 'https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js';
    echo sprintf( '<script data-ad-client="%1$s" async src="%2$s"></script>', $ad_client, $ad_src );
}
add_action( 'wp_head', 'adsense_scripts' );
