<?php
require_once('includes/customizer.php');

add_theme_support('title-tag');

function console_menu()
{
    register_nav_menus(
        array(
            'main-menu' => _('Main Menu'),
        )
    );
}
add_action('init', 'console_menu');


function console_all_posts() {

$args = array(
    'post_type'      => 'post', 
    'posts_per_page' => -1,
    'order'          => 'DESC', 
);

$all_posts = new WP_Query($args);

if ($all_posts->have_posts()) {
    _e('<ul>');
    while ($all_posts->have_posts()) {
        $all_posts->the_post();
        echo '<li> [ '.get_the_date('Y-j-m').' ] <a href="'.get_the_permalink().'">'.get_the_title().'</a></li>';
    }
    _e('</ul>');
    wp_reset_postdata();
} else {
    _e( 'Sorry, no posts matched your criteria.', 'console-wp' );
}

}

