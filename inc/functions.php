<?php
function wpml_cms_nav_js_escape($str){
    $str = esc_js($str);
    $str = htmlspecialchars_decode($str);
    return $str;
}
function my_tracking_code() {
  echo 'Paste tracking code from Google Analytics here';
}
add_action( 'wp_footer', 'my_tracking_code' );
