<?php
add_theme_support('post-thumbnails');

function enregistre_mon_menu() {
    register_nav_menu('menu_principal', __( 'Menu principal' ));
}
add_action('init', 'enregistre_mon_menu');

// for posts
add_filter('use_block_editor_for_post', '__return_false', 10);
// for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);

function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; //Adding svg extension
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);

add_image_size( 'Lionel', 2600, 1200, true );

add_filter( 'image_size_names_choose', 'wpshout_custom_sizes' );
function wpshout_custom_sizes( $sizes ) {
return array_merge( $sizes, array(
'Lionel' => __( 'Lionel' ),
) );
}