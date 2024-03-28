<?php

function sa_custom_taxonomy() {
    $labels = [
        'name' => 'Statuts',
        'singular_name' => 'Statut',
        'menu_name' => 'Statuts',
        'all_items' => 'Tous les statuts',
        'edit_item' => 'Modifier le statut',
        'view_item' => 'Voir le statut',
        'update_item' => 'Mettre à jour le statut',
        'add_new_item' => 'Ajouter un statut',
        'new_item_name' => 'Nouveau statut',
        'search_items' => 'Rechercher parmi les statuts',
        'popular_items' => 'Statuts les plus utilisés',
        'not_found' => 'Aucun statut trouvé',
        'not_found_in_trash' => 'Aucun statut dans la corbeille',
        'parent_item' => 'Statut parent',
        'parent_item_colon' => 'Statut parent',
    ];

    $args = [
        'label' => 'Statuts',
        'labels' => $labels,
        'public' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
        'rewrite' => ['slug' => 'statuts', 'with_front' => true]
    ];

    register_taxonomy('statut', 'projet', $args);
}

add_action('init', 'sa_custom_taxonomy');