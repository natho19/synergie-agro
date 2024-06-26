<?php

/**
 * For full documentation, please visit: http://docs.reduxframework.com/
 * For a more extensive sample-config file, you may look at:
 * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
 */

if (!class_exists('Redux')) {
    return;
}

// This is your option name where all the Redux data is stored.
$opt_name = "sa_options";

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 * */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    'opt_name' => 'sa_options',
    'dev_mode' => TRUE,
    'use_cdn' => TRUE,
    'display_name' => 'Options du site',
    'display_version' => 'v 1.0',
    'page_slug' => 'sa_options',
    'page_title' => 'Options du site',
    'update_notice' => TRUE,
    'admin_bar' => TRUE,
    'menu_type' => 'menu',
    'menu_title' => 'Options du site',
    'allow_sub_menu' => TRUE,
    'page_parent_post_type' => 'your_post_type',
    'default_mark' => '*',
    'hints' => array(
        'icon_position' => 'right',
        'icon_size' => 'normal',
        'tip_style' => array(
            'color' => 'light',
        ),
        'tip_position' => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect' => array(
            'show' => array(
                'duration' => '500',
                'event' => 'mouseover',
            ),
            'hide' => array(
                'duration' => '500',
                'event' => 'mouseleave unfocus',
            ),
        ),
    ),
    'output' => TRUE,
    'output_tag' => TRUE,
    'settings_api' => TRUE,
    'cdn_check_time' => '1440',
    'compiler' => TRUE,
    'page_permissions' => 'manage_categories',
    'save_defaults' => TRUE,
    'show_import_export' => FALSE,
    'database' => 'options',
    'transient_time' => '3600',
    'network_sites' => TRUE,
    'dev_mode' => FALSE,
);

// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.


Redux::setArgs($opt_name, $args);

/*
* ---> END ARGUMENTS
*/

/*
* ---> START HELP TABS
*/

$tabs = array(
    array(
        'id'      => 'redux-help-tab-1',
        'title'   => __('Theme Information 1', 'admin_folder'),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'admin_folder')
    ),
    array(
        'id'      => 'redux-help-tab-2',
        'title'   => __('Theme Information 2', 'admin_folder'),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'admin_folder')
    )
);
Redux::setHelpTab($opt_name, $tabs);

// Set the help sidebar
$content = __('<p>This is the sidebar content, HTML is allowed.</p>', 'admin_folder');
Redux::setHelpSidebar($opt_name, $content);


/*
* <--- END HELP TABS
*/


/*
*
* ---> START SECTIONS
*
*/

Redux::setSection($opt_name, array(
    'title' => 'Synergie Agro',
    'id'    => 'sa',
    'icon'       => 'el el-info-circle',
    'fields' => [
        [
            'id' => 'roaming',
            'type' => 'text',
            'title' => 'Roaming'
        ],
        [
            'id' => 'telephone',
            'type' => 'text',
            'title' => 'Téléphone'
        ],
        [
            'id' => 'email',
            'type' => 'text',
            'title' => 'Email'
        ]
    ]
));

Redux::setSection($opt_name, array(
    'title'      => 'Images du site',
    'id'         => 'images',
    'icon'       => 'el el-picture',
    'fields'     => [
        [
            'id'      => 'logo',
            'type'    => 'media',
            'url'     => true,
            'title'   => 'Logo',
            'preview' => true
        ],
        [
            'id'      => 'banner',
            'type'    => 'media',
            'url'     => true,
            'title'   => 'Bannière',
            'preview' => true
        ]
    ]
));

Redux::setSection($opt_name, array(
    'title' => 'Réseaux sociaux',
    'id'    => 'social-medias',
    'icon'       => 'el el-share',
    'fields' => [
        [
            'id' => 'facebook',
            'type' => 'text',
            'title' => 'Lien Facebook'
        ],
        [
            'id' => 'twitter',
            'type' => 'text',
            'title' => 'Lien Twitter'
        ],
        [
            'id' => 'youtube',
            'type' => 'text',
            'title' => 'Lien Youtube'
        ],
        [
            'id' => 'linkedin',
            'type' => 'text',
            'title' => 'Lien LinkedIn'
        ],
        [
            'id' => 'instagram',
            'type' => 'text',
            'title' => 'Lien Instagram'
        ],
        [
            'id' => 'tiktok',
            'type' => 'text',
            'title' => 'Lien TikTok'
        ]
    ]
));
