<?php
/**
 * Plugin Name: Menu in Content
 * Plugin URI: https://victor-fernandes.com/menu-in-content
 * Description: Display a neat menu list in place of the shortcode
 * Version: 1.0.0
 * Requires at least: 5.4
 * Requires PHP: 7.0
 * Author: Victor Fernandes
 * Author URI: https://victor-fernandes.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

add_shortcode( 'menu_in_content', 'vf_menu_func' );

function vf_menu_func( $atts ) {
    // return "Hola";
    return wp_nav_menu($args = array(
        'menu'              => $atts['id'], // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
        'menu_class'        => "advanced-menu-plugin", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
        'container'         => "div",
        'echo'              => false,
        'depth'             => 2,
        'after'             => '<span class="advanced-menu-toggle"><div class="icon"></div></span>'
    ));
}

function menu_in_content_scripts() {
    wp_enqueue_style( 'style-name', plugins_url( 'style.css', __FILE__ ) );
    wp_enqueue_script( 'script-name', plugins_url( 'main.js', __FILE__ ), array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'menu_in_content_scripts' );
