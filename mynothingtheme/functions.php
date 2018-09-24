<?php

/*
WordPress 4.8.9
Suppress output from function "wp_head()".
*/
//Display the links to the general feeds.
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);

//<link rel="EditURI">
remove_action('wp_head', 'rsd_link');

//<link rel="wlwmanifest">
remove_action('wp_head', 'wlwmanifest_link');

//<link rel="next">,<link rel="prev">
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');

//<link rel="canonical">
remove_action('wp_head', 'rel_canonical');

//<meta name="generator">
remove_action('wp_head', 'wp_generator');

//<link rel="shortlink">
remove_action('wp_head', 'wp_shortlink_wp_head');

//emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('admin_print_styles', 'print_emoji_styles');

//embed
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');

//dns-prefetch
remove_action('wp_head', 'wp_resource_hints', 2);

//
remove_action('wp_head', 'wp_print_head_scripts', 9);

//
remove_action('wp_head', 'wp_print_styles', 8);
