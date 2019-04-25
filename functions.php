<?php 

  function university_files(){
    wp_enqueue_script('university_main_script', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    // first param must be any made up name you want for your file
    // if you want to add another file just duplicate this
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
    // for JavaScript files
    // wp_enqueue_script('fictional_whatever_js', get_stylesheet_uri());

  }

// Want to load css or js files / second param is func we want to run
add_action('wp_enqueue_scripts','university_files');