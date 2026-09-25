<?php

// Exit if accessed directly
if (!defined('ABSPATH'))
	exit;


/*
 * VITE & Tailwind JIT development
 * Inspired by https://github.com/andrefelipe/vite-php-setup
 *
 */

// dist subfolder - defined in vite.config.json
define('DIST_DEF', 'dist');

// defining some base urls and paths
define('DIST_URI', get_template_directory_uri() . '/' . DIST_DEF);
define('DIST_PATH', get_template_directory() . '/' . DIST_DEF);

// js enqueue settings
define('JS_DEPENDENCY', []); // array('jquery') as example
define('JS_LOAD_IN_FOOTER', true); // load scripts in footer?

// enqueue hook
add_action('wp_enqueue_scripts', function () {

    $is_hot_path = __DIR__ . "/../vite/hot";
    if (file_exists($is_hot_path)) {
        $hot_url = trim(file_get_contents($is_hot_path));
        theme_vite_load_dev($hot_url);
    } else {
        theme_vite_load_prod();
    }



});

function theme_vite_load_dev(string $hot_url) {
    $files_to_load = get_vite_files();

    wp_enqueue_script_module(
        'vite-client',
        $hot_url . '/@vite/client',
        [],
        null,
    );


    foreach ($files_to_load as $file) {
        $file_path = $hot_url . '/' . $file;
        $path_parts = pathinfo($file);

        if ($path_parts['extension'] === 'js' || $path_parts['extension'] === 'ts') {
            wp_enqueue_script_module('main', $file_path, JS_DEPENDENCY, null, [JS_LOAD_IN_FOOTER]);
        } elseif ($path_parts['extension'] === 'scss' || $path_parts['extension'] === 'css') {
            wp_enqueue_style('main', $file_path, [], null);
        }
    }
}

function theme_vite_load_prod() {

    $manifest_path = __DIR__ . "/../dist/.vite/manifest.json";
    if (!file_exists($manifest_path)) {
        return;
    }

    $manifest_content = file_get_contents($manifest_path);
    $manifest_content = json_decode($manifest_content, false);

    if (is_object($manifest_content)) {
        foreach ($manifest_content as $value) {
            if (!isset($value->isEntry)) {
                continue;
            }


            $base_path = DIST_URI;


            $js_file = $value->file;
            if (!empty($js_file)) {
                wp_enqueue_script('main', $base_path . '/' . $js_file, JS_DEPENDENCY, '', JS_LOAD_IN_FOOTER);
            }

            foreach ($value->css as $css_file) {
                wp_enqueue_style('main', $base_path . '/' . $css_file);
            }
        }
    }
}
