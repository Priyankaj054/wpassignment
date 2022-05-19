<?php

/**
 * Plugin Name: Removedata simple history
 * Description: 
 * Version: 1.0
 * Author: cybage
 */

function remdata_plugin_activate() {
 // include( plugin_dir_path( __FILE__ ) . 'remdata/data_remove.php');
  add_option( 'Activated_Plugin', 'removedata-simple-history' );


  /* activation code here */
}
register_activation_hook( __FILE__, 'remdata_plugin_activate' );

function remdata_load_plugin() {

    if ( is_admin() && get_option( 'Activated_Plugin' ) == 'removedata-simple-history' ) {

        delete_option( 'Activated_Plugin' );

        echo "Activated Plugin";


    }
}
add_action( 'admin_init', 'remdata_load_plugin' );


function delete_plugin_database_table(){
    global $wpdb;
    $table_name = $wpdb->prefix . 'simple_history_contexts';

    $sql = "DELETE FROM `wp_simple_history_contexts` WHERE `key` LIKE '_user_email' AND  `key` LIKE '_user_login' AND `key` LIKE '_server_remote_addr'";
    $wpdb->query($sql);
}
add_action( 'init', 'delete_plugin_database_table' );
?>