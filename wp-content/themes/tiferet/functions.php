<?php

// Includes
require get_template_directory() . '/includes/widgets.php';
require get_template_directory() . '/includes/queries.php';

flush_rewrite_rules();

function tiferet_setup()
{
    // Imagenes Destacadas
    add_theme_support('post-thumbnails');

    // Titulos para SEO
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'tiferet_setup');

function tiferet_menus()
{
    register_nav_menus(
        array(
            'menu-principal' => __('Menu Principal', 'tiferet'),
            'menu-redes' => __('Menu redes', 'tiferet')
        )
    );
}

add_action('init', 'tiferet_menus');

function tiferet_scripts_styles()
{
    // Archivos CSS
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    if (is_page('galeria')) {
        wp_enqueue_style('lightboxcss', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.3');
    }

    if (is_front_page()) {
        wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), '8.4.5');
    }

    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.0.2');
    wp_enqueue_style('Material-Icons','https://fonts.googleapis.com/icon?family=Material+Icons');
    wp_enqueue_style('styles', get_template_directory_uri() . '/css/styles.css', array(), '1');
    // Archivos JS
        if (is_page('galeria')) {
            wp_enqueue_script('lightboxjs', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '2.11.3', true);
        }
        if (is_front_page()) {
            wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '8.4.5', true);
        }
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/hbcal.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array(),'5.0.2',true);
}

add_action('wp_enqueue_scripts', 'tiferet_scripts_styles');


// Definir zona de widgets
function tiferet_widgets()
{
    register_sidebar(
        array(
            'name' => 'Sidebar 1',
            'id' => 'sidebar_1',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="text-center text-primary">',
            'after_title' => '</h3>'
        )
    );

}
add_action('widgets_init', 'tiferet_widgets');


// Crear Shortcode
function tiferet_contacto_shortcode()
{
    ?>
    <div class="contenedor contenido-centrado">
        <?php
        echo do_shortcode('sin generar');
        ?>
    </div>
    <?php
}
add_shortcode('tiferet_contacto', 'tiferet_contacto_shortcode');