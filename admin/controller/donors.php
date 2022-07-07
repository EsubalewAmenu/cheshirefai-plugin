<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/EsubalewAmenu
 * @since      1.0.0
 *
 * @package    Mp_gl
 * @subpackage Mp_gl/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Mp_gl
 * @subpackage Mp_gl/admin
 * @author     Esubalew A. <esubalew.amenu@singularitynet.io>
 */
class DS_Admin_donors
{

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */

    public function __construct()
    {
    }

    function ds_donor_post_type_registration_init()
    {
        $labels = array(
            'name'                  => _x('Donor', 'Post type general name', 'general_plugin'),
            'singular_name'         => _x('Donor', 'Post type singular name', 'general_plugin'),
            'menu_name'             => _x('Donor', 'Admin Menu text', 'general_plugin'),
            'name_admin_bar'        => _x('Donor', 'Add New on Toolbar', 'general_plugin'),
            'add_new'               => __('Add New', 'general_plugin'),
            'add_new_item'          => __('Add New general_plugin', 'general_plugin'),
            'new_item'              => __('New general_plugin', 'general_plugin'),
            'edit_item'             => __('Edit general_plugin', 'general_plugin'),
            'view_item'             => __('View general_plugin', 'general_plugin'),
            'all_items'             => __('All general_plugins', 'general_plugin'),
            'search_items'          => __('Search general_plugins', 'general_plugin'),
            'parent_item_colon'     => __('Parent general_plugins:', 'general_plugin'),
            'not_found'             => __('No general_plugins found.', 'general_plugin'),
            'not_found_in_trash'    => __('No general_plugins found in Trash.', 'general_plugin'),
            'featured_image'        => _x('Donor Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'general_plugin'),
            'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'general_plugin'),
            'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'general_plugin'),
            'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'general_plugin'),
            'archives'              => _x('Donor archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'general_plugin'),
            'insert_into_item'      => _x('Insert into general_plugin', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'general_plugin'),
            'uploaded_to_this_item' => _x('Uploaded to this general_plugin', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'general_plugin'),
            'filter_items_list'     => _x('Filter general_plugins list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'general_plugin'),
            'items_list_navigation' => _x('Donor list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'general_plugin'),
            'items_list'            => _x('Donor list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'general_plugin'),
        );
        $args = array(
            'labels'             => $labels,
            'description'        => 'Donors custom post type.',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array('slug' => 'Donors'),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 20,
            'supports'           => array('title', 'editor', 'author', 'thumbnail'),
            'taxonomies'         => array('category', 'post_tag'),
            'show_in_rest'       => true
        );

        register_post_type('donors', $args);
    }
}
