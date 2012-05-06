<?php

// WPTS - ENQUEUE JQUERY 

function wpts_add_jquery() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', JQUERY_DIR);
    wp_enqueue_script( 'jquery' );
}    
 
add_action('init', 'wpts_add_jquery');

?>