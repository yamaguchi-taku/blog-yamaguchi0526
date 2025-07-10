<?php

function my_theme_enqueue_style() {
    wp_enqueue_style('my-style', get_template_directory_uri() . '/top.css', array(), time());
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_style');

?>
