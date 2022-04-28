<?php
class Handle
{
	static function set_script_template($template, $name, $deps = [], $load = [])
	{
		if (is_array($template)) {
			foreach ($template as $item) {
				if (is_page_template($item)) {
					if (empty($load)) {
						wp_enqueue_script("$name", get_template_directory_uri() . "/js/$name.js", $deps, filemtime(get_stylesheet_directory() . "/js/$name.js"), true);
					} else {
						wp_enqueue_script("$name", get_template_directory_uri() . "/js/$name.js", $deps, filemtime(get_stylesheet_directory() . "/js/$name.js"), true);
						wp_localize_script("$name", "$name", $load);
					}
				}
			}
		}
		if (is_page_template($template)) {
			wp_enqueue_script("$name", get_template_directory_uri() . "/js/$name.js", $deps, filemtime(get_stylesheet_directory() . "/js/$name.js"), true);
		}
	}
	static function set_style_tempalte($template, $name)
	{
		if (is_array($template)) {
			foreach ($template as $item) {
				if (is_page_template($item)) {
					wp_enqueue_style("$name", get_template_directory_uri() . "/css/$name.css", [], get_stylesheet_directory() . "/css/$name.css");
				}
			}
		}
		if (is_page_template($template)) {
			wp_enqueue_style("$name", get_template_directory_uri() . "/css/$name.css", [], get_stylesheet_directory() . "/css/$name.css");
		}
	}
	static function set_style($name)
	{

		wp_enqueue_style("$name", get_template_directory_uri() . "/css/$name.css", [], get_stylesheet_directory() . "/css/$name.css");
	}
	static function set_script($name, $deps = [], $load = [])
	{
		if (empty($load)) {

			wp_enqueue_script("$name", get_template_directory_uri() . "/js/$name.js", $deps, filemtime(get_stylesheet_directory() . "/js/$name.js"), true);
		} else {
			wp_enqueue_script("$name", get_template_directory_uri() . "/js/$name.js", $deps, filemtime(get_stylesheet_directory() . "/js/$name.js"), true);
			wp_localize_script("$name", "$name", $load);
		}
	}
}
