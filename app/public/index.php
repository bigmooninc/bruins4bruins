<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );

if ( ! class_exists( 'Timber' ) ) {
    echo 'Timber not activated. Make sure you activate the plugin in <a href="/wp-admin/plugins.php#timber">/wp-admin/plugins.php</a>';
    return;
}

$context = Timber::get_context();
$post = new TimberPost();
//$context['options'] = get_fields('options');
$context['post'] = $post;

$templates = array( 'index.twig' );
if ( is_home() ) {
    array_unshift( $templates, 'front-page.twig', 'home.twig' );
}
Timber::render( $templates, $context );