<?php


//ini untuk css
function tisaurus_style()
{
    wp_enqueue_style('style-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css');
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,500;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    wp_enqueue_style('style-custom', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'tisaurus_style');

function tisaurus_script()
{
    wp_enqueue_script('script-bootstrap', 'https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js', true);
    wp_enqueue_script('script-bootstrap2', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js', true);
}
add_action('wp_enqueue_scripts', 'tisaurus_script');
