<?php
function scripts_do_template() {
    //Jquery
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

    //Bootstrap
    wp_deregister_script('bootstrap');
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', array(), null, true);

    //Jquery Mask
    wp_deregister_script('jsmask');
    wp_enqueue_script('jsmask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js', array(), null, true);

    //Custom Js
    wp_deregister_script('custom_js');
    wp_enqueue_script('custom_js', get_template_directory_uri().'/js/scripts.js', array(), null, true);
   
}

add_action('wp_enqueue_scripts', 'scripts_do_template');
?>

