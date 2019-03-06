<?php 
// load files here
function university_files(){
    wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"');
    wp_enqueue_style('university_main_styles',get_stylesheet_uri());
    
}


add_action('wp_enqueue_scripts', 'university_files');

?>