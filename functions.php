<?php
function uni_files() {
    wp_enqueue_style('uni_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'uni_files');

?>