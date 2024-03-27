<?php
/*

		Plugin Name: Eventos - Post Types
		Description: Añade Eventos
		Author: Asher Charlson
		Text Domain: tifefet
		
	*/

	if(!defined('ABSPATH')) die();

// Register Custom Post Type
function eventos_post_type() {

	$labels = array(
		'name'                  => _x( 'eventos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'evento', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Eventos', 'text_domain' ),
		'name_admin_bar'        => __( 'Eventos', 'text_domain' ),
		'archives'              => __( 'Listado de Eventos', 'text_domain' ),
		'attributes'            => __( 'Atributos del evento', 'text_domain' ),
		'parent_item_colon'     => __( 'Evento Reciente', 'text_domain' ),
		'all_items'             => __( 'Todos los Eventos', 'text_domain' ),
		'add_new_item'          => __( 'Agregar Nuevo Evento', 'text_domain' ),
		'add_new'               => __( 'Agregar Evento', 'text_domain' ),
		'new_item'              => __( 'Nuevo Evento', 'text_domain' ),
		'edit_item'             => __( 'Editar Evento', 'text_domain' ),
		'update_item'           => __( 'Actualizar Evento', 'text_domain' ),
		'view_item'             => __( 'Ver Evento', 'text_domain' ),
		'view_items'            => __( 'Ver Eventos', 'text_domain' ),
		'search_items'          => __( 'Buscar Evento', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Imagen', 'text_domain' ),
		'set_featured_image'    => __( 'Seleccionar Imagen', 'text_domain' ),
		'remove_featured_image' => __( 'Remover imagen', 'text_domain' ),
		'use_featured_image'    => __( 'Imagen', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Lista de eventos', 'text_domain' ),
		'items_list_navigation' => __( 'Navegacion Lista de Eventos', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar Lista de Eventos', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'evento', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-calendar-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'post_type_eventos', $args );

}
add_action( 'init', 'eventos_post_type', 0 );