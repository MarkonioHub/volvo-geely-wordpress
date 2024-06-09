<?php

add_action( 'wp_ajax_callback_form', 'callback_form_handler' );
add_action( 'wp_ajax_nopriv_callback_form', 'callback_form_handler' );

function callback_form_handler () {
    if ($_POST['hidden-input']) wp_die();

    $post_data = array(
        'post_title'    => sanitize_text_field( $_POST['name'] ),
        'post_content'  => $_POST['phone'],
        'post_status'   => 'publish',
        'post_type'     => 'request',
        'post_author'   => 1,
        'meta_input'  => [
            'name' => $_POST['name'],
            'phone' => $_POST['phone'],
        ]
    );

    $post_id = wp_insert_post( $post_data );
}