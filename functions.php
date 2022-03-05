<?php

function theme_files(){
  wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Kosugi+Maru&family=Noto+Sans+JP:wght@700&display=swap', array(), null);
  wp_enqueue_style('main-style', get_theme_file_uri('/dist/css/main.css'),[],1,'all');
  wp_enqueue_script('main-js', get_theme_file_uri('/dist/js/main.js'), NULL, '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_files');