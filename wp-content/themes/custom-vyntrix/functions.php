<?php
// Enable featured image support for posts
function enable_featured_image_support() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'enable_featured_image_support');
?>