<?php
/*
 * Enqueues
 */

if (!function_exists('k2b4_enqueues')) {
	function k2b4_enqueues()
	{

		// Styles

		wp_register_style('bootstrap', get_template_directory_uri() . '/theme/css/bootstrap.min.css', false, '4.3.1', null);
		wp_enqueue_style('bootstrap');

		wp_register_style('lineawesome', 'https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css', false, '1.1.0', null);
		wp_enqueue_style('lineawesome');

		wp_enqueue_style('gutenberg-blocks', get_template_directory_uri() . '/theme/css/blocks.css');

		wp_register_style('k2b4', get_template_directory_uri() . '/theme/css/k2b4.css', false, null);
		wp_enqueue_style('k2b4');

		// Scripts

		wp_register_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
		wp_enqueue_script('modernizr');

		wp_enqueue_script('jquery');

		wp_register_script('bootstrap-bundle', get_template_directory_uri() . '/theme/js/bootstrap.bundle.min.js', false, '4.3.1', true);
		wp_enqueue_script('bootstrap-bundle');
		// (The Bootstrap JS bundle contains Popper JS.)

		wp_register_script('k2b4', get_template_directory_uri() . '/theme/js/k2b4.js', false, null, true);
		wp_enqueue_script('k2b4');

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
}
add_action('wp_enqueue_scripts', 'k2b4_enqueues', 100);
