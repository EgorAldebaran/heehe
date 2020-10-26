<?php

$query = new WP_Query( [
    'post_per_page' => 1,
    'orderby' => 'comment_count'
]);
// loop
global $post;

if ( $query -> have_posts()) {
    while ( $query -> have_posts()) {
        $query -> the_post();
        the_title();
        the_content();
    }
} else {
    echo "no no no";
}
wp_reset_postdata();
