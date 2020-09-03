<?php

// style
function load_stylesheets()
{
  wp_register_style('stylesheet', get_template_directory_uri() . '/css/style.min.css', array(), false, 'all');

  wp_enqueue_style('stylesheet');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


// jQuery
function include_jquery() {
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', array( 'jquery' ), '3.5.1', true );
}
add_action( 'wp_enqueue_scripts', 'include_jquery' );


// JS

// I have used a javascript library her called waypoints to acheive some animation that would take some time to do from scratch and wouldn't be as clean.
// I believe JS libraries should only be used if necessary, usually you can get the job done with much less code and have a faster load time.
function loadjs()
{
  wp_register_script('waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', '', 1, true );
  wp_enqueue_script('waypoints');

  wp_register_script('customjs', get_template_directory_uri() . '/js/script.js', '', 1, true );
  wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'loadjs');

?>
