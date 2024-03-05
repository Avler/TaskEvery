<?php
function theme_enqueue_scripts() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    // Główny plik stylów motywu
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/style.css');
    // Bootstrap JS 
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js');

    wp_enqueue_script('custom-script', get_template_directory_uri() . '/script.js');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

