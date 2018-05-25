<?php
/**
* Includes
*/
include( get_stylesheet_directory() . '/inc/enqueue.php');

include( get_stylesheet_directory() . '/inc/customizer/jess_settings.php');

include( get_stylesheet_directory() . '/inc/customizer/jess_style.php');


/*
* Theme Support
*/


function jess_change_default_query( $query ) {
if ( $query->is_archive() && $query->is_main_query() && !is_admin() ) {
        $query->set( 'posts_per_page', 12 );
    }
}
add_action( 'pre_get_posts', 'jess_change_default_query' );

?>
