<?php

function sa_custom_post_types() {
    $array = [
        'label' => 'Réalisation',
        'labels' => [
            'name'                  => 'Réalisations',
            'singular_name'         => 'Réalisation',
            'menu_name'             => 'Réalisations',
            'name_admin_bar'        => 'Réalisations',
            'archives'              => 'Archives Réalisations',
            'attributes'            => 'Attributs Réalisations',
            'parent_item_colon'     => 'Réalisation parente',
            'all_items'             => 'Toutes les réalisations',
            'add_new_item'          => 'Ajouter une nouvelle réalisation',
            'add_new'               => 'Ajouter une nouvelle réalisation',
            'new_item'              => 'Nouvelle réalisation',
            'edit_item'             => 'Modifier la réalisation',
            'update_item'           => 'Mettre à jour la réalisation',
            'view_item'             => 'Voir la réalisation',
            'view_items'            => 'Voir les réalisations',
            'search_items'          => 'Rechercher une réalisation',
            'not_found'             => 'Pas trouvée',
            'not_found_in_trash'    => 'Pas trouvée dans la corbeille',
            'featured_image'        => 'Image principale',
            'set_featured_image'    => 'Ajouter une image principale',
            'remove_featured_image' => 'Supprimer l\'image principale',
            'use_featured_image'    => 'Utiliser comme image principale',
            'insert_into_item'      => 'Ajouter dans Réalisations',
            'items_list'            => 'Liste des réalisations'
        ],
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => ['slug' => 'realisations'],
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_icon' => 'dashicons-edit-page',
        'publicly_queryable' => true,
        'capability_type' => 'post', 
        'query_var' => true
    ];

    register_post_type('realisation', $array);
}
add_action('init', 'sa_custom_post_types');