<?php

/**
 * Undocumented function
 * 
 * @todo This appears on home
 * 
 * @source https://developer.wordpress.org/reference/hooks/excerpt_more/#comment-2054
 * @param [type] $more
 * @return void
 */
function tonik_new_excerpt_more($more) {
    global $post;
    return '... <a href="'. get_permalink($post->ID) . '">' . 'Read More &raquo;' . '</a>';
}
add_filter('excerpt_more', 'tonik_new_excerpt_more');