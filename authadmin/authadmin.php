<?php

/**
 * Plugin Name: authadmin
 * Description: 
 * Version: 1.0
 * Author: cybage
 */

function authadmin_plugin_activate() {
 // include( plugin_dir_path( __FILE__ ) . 'remdata/data_remove.php');
  add_option( 'Activated_Plugin', 'authadmin-simple-history' );


  /* activation code here */
}
register_activation_hook( __FILE__, 'authadmin_plugin_activate' );

function authadmindata_load_plugin() {

    if ( is_admin() && get_option( 'Activated_Plugin' ) == 'authadmin_plugin_activate' ) {

        delete_option( 'Activated_Plugin' );

        echo "Activated Plugin";


    }
}
add_action( 'admin_init', 'authadmindata_load_plugin' );


function authadminapi(){
 if ( is_user_logged_in() ) {
  ?>
    <a href="https://manvfat.com/?rest_route=/wp/v2/users/">Users lists</a>
<?php } else { 
    ?>
    <a href="/wp-login.php" title="Members Area Login" rel="home">Please login to admin panel to view the Data</a>
<?php } 
}
add_shortcode( 'view_data', 'authadminapi' );
?>