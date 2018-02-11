<?php
function rzs_load_shortcode(){
    require_once RZS_PLUGIN_DIR . '/inc/markup.php';
}

function rzs_register_shortcodes(){
    add_shortcode("donate","rzs_load_shortcode");
}

add_action( 'init', 'rzs_register_shortcodes');