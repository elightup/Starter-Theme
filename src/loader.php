<?php

require __DIR__ .'/fields.php';
require __DIR__ .'/template_function.php';

class Loader
{

    public function __construct()
    {
        add_action('after_setup_theme', [ $this, 'setup' ]);
        add_action('widgets_init', [$this , 'tmt_widgets_init']);
        add_action('wp_enqueue_scripts', [ $this, 'enqueue_assets' ]);

        $this->init();

    }
    public function setup()
    {
        load_theme_textdomain('rv', get_template_directory() . '/languages');

        register_nav_menu('primary', __('Primary Menu', 'rv'));

        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('html5', [ 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ]);

        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo');

        /**
         * Add support for the block editor.
         *
         * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/
         */
        add_theme_support('wp-block-styles');
        add_theme_support('align-wide');
        add_theme_support('editor-styles');
        add_theme_support('responsive-embeds');

    }

    function tmt_widgets_init()
    {
        register_sidebar(
            [
            'name'          => esc_html__('tên sidebar', 'text domain'),
            'id'            => 'sidebar-1',
            'before_widget' => '<aside class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
            ]
        );
    }

    public function enqueue_assets()
    {
        wp_enqueue_style('rv-theme', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'));
        wp_enqueue_style('rv-css-slick', get_template_directory_uri() . '/css/slick.css');

        // wp_enqueue_script('rv-script', get_template_directory_uri() . '/js/script.js', ['jquery'], '1.0', true);

    }


    function init()
    {
        new Template_function();
        new Fields();
    }
}