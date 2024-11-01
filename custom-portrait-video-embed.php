<?php
/**
 * Plugin Name: YT Portrait Video Embed
 * Description: Easily embed stunning portrait YouTube videos on your site with our unique tool by the TP Team using the shortcode      [cpve_portrait_youtube id="YOUR_VIDEO_ID"].
 * Version: 1.0.0
 * Author: teamtp
 * Author URI: https://techpumpkin.ca
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: YT Portrait Video embed
  */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

define( 'CPVE_PLUGIN_VERSION', '1.0.0' ); // Define the plugin version at the top of your plugin file

// Register custom CSS and JavaScript for the plugin
function cpve_register_assets() {
    wp_register_style('cpve-style', plugin_dir_url(__FILE__) . 'css/cpve-style.css', array(),CPVE_PLUGIN_VERSION);
    wp_register_script('cpve-youtube-api', 'https://www.youtube.com/iframe_api', array(), CPVE_PLUGIN_VERSION, true); // Add placeholder version
    wp_register_script('cpve-script', plugin_dir_url(__FILE__) . 'js/cpve-script.js', array('jquery'), CPVE_PLUGIN_VERSION, true);
}
add_action('wp_enqueue_scripts', 'cpve_register_assets');

// Enqueue assets conditionally if shortcode is used on the page
function cpve_enqueue_assets_conditionally() {
    global $post;

    // Check if we are on the frontend and the post content has the shortcode [cpve_portrait_youtube]
    if (!is_admin() && isset($post->post_content) && has_shortcode($post->post_content, 'cpve_portrait_youtube')) {
        wp_enqueue_style('cpve-style');
        wp_enqueue_script('cpve-youtube-api');
        wp_enqueue_script('cpve-script');
    }
}
add_action('wp_enqueue_scripts', 'cpve_enqueue_assets_conditionally');

// Shortcode function to embed portrait YouTube videos
function cpve_portrait_youtube_shortcode($atts) {
    $atts = shortcode_atts(array(
        'id' => '', // YouTube video ID
    ), $atts, 'cpve_portrait_youtube');

    if (empty($atts['id'])) {
        return '';
    }

    // Generate a unique ID for the iframe container
    $iframe_id = 'cpve-video-' . uniqid();

    // Add the custom div and pass the iframe ID
    return '<div class="cpve-portrait-video-wrapper">
                <div id="' . esc_attr($iframe_id) . '" class="cpve-video-iframe">
                                      <iframe src="' . esc_url('https://www.youtube.com/embed/' . esc_attr($atts['id']) . '?enablejsapi=1&modestbranding=1&rel=0&controls=1') . '" 
                            frameborder="0" 
                            allowfullscreen>
                    </iframe>

                </div>
            </div>';
}
add_shortcode('cpve_portrait_youtube', 'cpve_portrait_youtube_shortcode');