<?php
/**
 * @package shortcode
 * @version 1.7.2
 */
/*
Plugin Name: loop-wp Plugin
Plugin URI: http://aspiranthawks.com/
Description: loop  wordPress pluign
Author: Muhammad Zohaib
Version: 1.0.0
Plugin URI: https://xcyzx.com/
Author URI: https://xcyzx.com/
*/


add_shortcode('listposts','sp_handle_list_posts_wp_query_class');
// via query
function sp_handle_list_posts_wp_query_class($attributes){
    $attributes = shortcode_atts(array(
        'number' => 5
    )   ,$attributes,'listposts') ;

    $query = new WP_Query(  array(
        'posts_per_page'    => $attributes['number'],
        'post_status'       => 'publish'
    ));


    if($query->have_posts()){
        $outputhtml  = '<ul>';
        while($query->have_posts() ) {
            $query->the_post();

            $outputhtml .= '<li>'.get_the_title() .'fg fg fgf  hf</li>';
        }
        wp_reset_postdata();
        $outputhtml  .= '</ul>';

        return $outputhtml;
    }
    return 'No Output';

}






















