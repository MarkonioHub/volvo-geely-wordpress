<?php

add_action( 'init', 'register_post_types' );

function register_post_types(){

    register_post_type( 'request', [
        'label'               => 'Заявки',
        'labels'              => array(
            'name'          => 'Заявки',
            'singular_name' => 'Заявка',
            'menu_name'     => 'Заявки клиентов',
            'all_items'     => 'Все заявки',
            'add_new'       => 'Добавить заявку',
            'add_new_item'  => 'Добавить новую заявку',
            'edit'          => 'Редактировать',
            'edit_item'     => 'Редактировать заявку',
            'new_item'      => 'Новая заявка',
        ),
        'description'         => '',
        'public'              => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_rest'        => false,
        'rest_base'           => '',
        'show_in_menu'        => true,
        'exclude_from_search' => false,
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
        'hierarchical'        => false,
        'rewrite'             => true,
        'has_archive'         => 'faq',
        'query_var'           => true,
        'supports'            => array( 'title', 'editor' ),
        'taxonomies'          => [],
    ] );

}