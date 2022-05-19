<?php

/**
 * Plugin Name: animationtask
 * Description: 
 * Version: 1.0
 * Author: cybage
 */

/* Main Plugin File */
include( plugin_dir_path( __FILE__ ) . 'ani/doc_ani.php');
//add_action( 'init', 'anitask' );

function ani_plugin_activate() {

  add_option( 'Activated_Plugin', 'Plugin-Slug' );
       echo "hello";
  /* activation code here */
}
register_activation_hook( __FILE__, 'ani_plugin_activate' );

function ani_load_plugin() {

    if ( is_admin() && get_option( 'Activated_Plugin' ) == 'Plugin-Slug' ) {

        delete_option( 'Activated_Plugin' );

        echo "Activated Plugin";

        /* do stuff once right after activation */
        // example: add_action( 'init', 'my_init_function' );
        /**
 * Register a custom menu page.
 */

    }
}
add_action( 'admin_init', 'ani_load_plugin' );

?>