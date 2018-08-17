<?php
/*
Plugin Name:  Which Fonts?
Plugin URI:   https://developer.wordpress.org/plugins/the-basics/
Description:  Outputs a list of fonts used on any front end page in the javascript console.
Version:      1.0
Author:       andrija
Author URI:   https://developer.wordpress.org/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wp-which-fonts
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );



function wp_which__elite_enqueue_scripts(){
    
    if( current_user_can("update_core") ){
        wp_enqueue_script( 'wp-which-fonts', plugin_dir_url( __FILE__ ) . 'js/find_styles.js', array( 'jquery' ), '1.0', true );
    }
    
}
add_action( 'wp_enqueue_scripts', 'wp_which__elite_enqueue_scripts' );
