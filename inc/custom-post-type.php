<?php

function custom_post_type() {
 
			// Set UI Custom Post Type
			$labels = array(
					'name'                =>  'Meus Trabalhos',
					'singular_name'       =>  'Meu Trabalho',
					'menu_name'           =>  'Meus Trabalhos',
					'all_items'           =>  'Todos Trabalhos',
					'view_item'           =>  'Ver Trabalho',
					'add_new_item'        =>  'Novo Trabalho',
					'add_new'             =>  'Novo Trabalho', 
					'edit_item'           =>  'Editar Trabalho', 
					'update_item'         =>  'Atualizar Trabalho', 
					'search_items'        =>  'Buscar Trabalho', 
					'not_found'           =>  'Não foram encontrados trabalhos.', 
					'not_found_in_trash'  =>  'Nenhum trabalho encontrado na lixeira' 
			);
			 
			// Set options Custom Post Type
			$args = array(
					'labels'              => $labels,
					'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields' ),
					'hierarchical'        => false,
					'public'              => true,
					'show_ui'             => true,
					'show_in_menu'        => true,
					'show_in_nav_menus'   => true,
					'show_in_admin_bar'   => true,
					'menu_position'       => 5,
					'can_export'          => true,
					'has_archive'         => true,
					'exclude_from_search' => false,
					'publicly_queryable'  => true,
					'capability_type'     => 'post',
					'show_in_rest' => true,
					'rewrite' => array('slug' => 'meu-trabalho'),
			);
			 
			// Register
			register_post_type( 'work', $args );
	 
}

add_action( 'init', 'custom_post_type', 0 );

?>