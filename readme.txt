=== YT Portrait Video Embed ===
Contributors: teamtp
Tags: youtube, portrait, video, embed
Requires at least: 5.0
Tested up to: 6.6
Requires PHP: 8.0
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Easily embed portrait YouTube videos in WordPress with a shortcode.


== Description ==
Easily embed portrait YouTube videos using a simple shortcode. Perfect for embedding vertical videos on your WordPress posts and pages.

Use the following shortcode to embed your video: `[cpve_portrait_youtube id="YOUR_VIDEO_ID"]` (replace `YOUR_VIDEO_ID` with the actual video ID).

== Third-Party Service ==
This plugin relies on the YouTube Data API, a third-party service provided by Google. The plugin registers the YouTube iframe API script to enable video embedding and playback.

**Circumstances Under Which Data is Sent:**
- When you use the shortcode to embed a video, the plugin makes a request to the YouTube API to fetch video data.
- The embedded iframe requests video content directly from YouTube.

**Links:**
- YouTube API Service: https://developers.google.com/youtube/v3
- YouTube API Terms of Service: https://developers.google.com/youtube/terms/api-services-terms-of-service
- YouTube Privacy Policy: https://www.youtube.com/t/privacy

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/yt-portrait-video-embed` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Use the following shortcode to embed your video of choice: `[cpve_portrait_youtube id="YOUR_VIDEO_ID"]` (replace `YOUR_VIDEO_ID` with the actual video ID).

== Frequently Asked Questions ==

= How do I install the plugin? =
You can install it through the WordPress plugins screen directly or by uploading the plugin files to the `/wp-content/plugins/yt-portrait-video-embed` directory.

= How do I use the shortcode? =
Simply use `[cpve_portrait_youtube id="YOUR_VIDEO_ID"]` where you want to embed a portrait YouTube video.

== Screenshots ==
1. Steps to Use the Plugin
2. Before Using the Plugin
3. After Using the Plugin


== Changelog ==

= 1.0.0 =
* Initial release.

== Upgrade Notice ==

= 1.0.0 =
* Initial release. No upgrade needed.

== License ==
This plugin is licensed under the GPLv2 or later. For more information, visit [GPL License](https://www.gnu.org/licenses/gpl-2.0.html).
