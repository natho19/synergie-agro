<?php

function sa_custom_post_types() {
    $array = [
        'label' => 'Projet',
        'labels' => [
            'name'                  => 'Projets',
            'singular_name'         => 'Projet',
            'menu_name'             => 'Projets',
            'name_admin_bar'        => 'Projets',
            'archives'              => 'Archives Projets',
            'attributes'            => 'Attributs Projets',
            'parent_item_colon'     => 'Projet parent',
            'all_items'             => 'Tous les projets',
            'add_new_item'          => 'Ajouter un nouveau projet',
            'add_new'               => 'Ajouter un nouveau projet',
            'new_item'              => 'Nouveau projet',
            'edit_item'             => 'Modifier le projet',
            'update_item'           => 'Mettre à jour le projet',
            'view_item'             => 'Voir le projet',
            'view_items'            => 'Voir les projets',
            'search_items'          => 'Rechercher un projet',
            'not_found'             => 'Pas trouvé',
            'not_found_in_trash'    => 'Pas trouvé dans la corbeille',
            'featured_image'        => 'Image principale',
            'set_featured_image'    => 'Ajouter une image principale',
            'remove_featured_image' => 'Supprimer l\'image principale',
            'use_featured_image'    => 'Utiliser comme image principale',
            'insert_into_item'      => 'Ajouter dans projets',
            'items_list'            => 'Liste des projets'
        ],
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => ['slug' => 'projets'],
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_icon' => 'dashicons-edit-page',
        'publicly_queryable' => true,
        'capability_type' => 'post', 
        'query_var' => true
    ];

    register_post_type('projet', $array);
}
add_action('init', 'sa_custom_post_types');