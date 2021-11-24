<?php


//ini untuk css
function tisaurus_style()
{
    wp_enqueue_style('style-reset', get_template_directory_uri() . '/assets/css/reset.css');
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

// menghilangkan admin bar
function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

//set jumlah view post
function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}

// pembatasan tulisan
function get_excerpt($limit, $source = null)
{
    $excerpt = $source == "content" ? get_the_content() : get_the_excerpt();
    $excerpt = preg_replace(" (\[.*?\])", '', $excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $limit);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace('/\s+/', ' ', $excerpt));
    $excerpt = $excerpt . '...';
    return $excerpt;
}

// summon content spesifik
function get_konten($my_postid)
{

    $content_post = get_post($my_postid);
    $content = $content_post->post_content;
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    echo $content;
}

add_image_size( 'sml_size', 300 ); 
add_image_size( 'mid_size', 600 ); 
add_image_size( 'lrg_size', 1200 ); 
add_image_size( 'sup_size', 2400 );