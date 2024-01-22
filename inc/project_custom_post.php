<?php
	register_post_type( 'project', array(
        'labels' => array(
            'name' => 'Project',
            'singular_name' => 'Project',
            'menu_name' => 'Project',
            'all_items' => 'All Project',
            'edit_item' => 'Edit Project',
            'view_item' => 'View Project',
            'view_items' => 'View Project',
            'add_new_item' => 'Add New Project',
            'add_new' => 'Add New Project',
            'new_item' => 'New Project',
            'parent_item_colon' => 'Parent Project:',
            'search_items' => 'Search Project',
            'not_found' => 'No project found',
            'not_found_in_trash' => 'No project found in Trash',
            'archives' => 'Project Archives',
            'attributes' => 'Project Attributes',
            'insert_into_item' => 'Insert into project',
            'uploaded_to_this_item' => 'Uploaded to this project',
            'filter_items_list' => 'Filter project list',
            'filter_by_date' => 'Filter project by date',
            'items_list_navigation' => 'Project list navigation',
            'items_list' => 'Project list',
            'item_published' => 'Project published.',
            'item_published_privately' => 'Project published privately.',
            'item_reverted_to_draft' => 'Project reverted to draft.',
            'item_scheduled' => 'Project scheduled.',
            'item_updated' => 'Project updated.',
            'item_link' => 'Project Link',
            'item_link_description' => 'A link to a project.',
        ),
        'public' => true,
        'hierarchical' => true,
        'show_in_rest' => true,
        'supports' => array(
            0 => 'title',
            1 => 'editor',
            2 => 'thumbnail',
        ),
        'delete_with_user' => false,
    ) );
   
    add_action( 'init', function() {
        register_taxonomy( 'project_cat', array(
        0 => 'project',
    ), array(
        'labels' => array(
            'name' => 'Category',
            'singular_name' => 'Category',
            'menu_name' => 'Category',
            'all_items' => 'All Category',
            'edit_item' => 'Edit Category',
            'view_item' => 'View Category',
            'update_item' => 'Update Category',
            'add_new_item' => 'Add New Category',
            'new_item_name' => 'New Category Name',
            'parent_item' => 'Parent Category',
            'parent_item_colon' => 'Parent Category:',
            'search_items' => 'Search Category',
            'not_found' => 'No category found',
            'no_terms' => 'No category',
            'filter_by_item' => 'Filter by category',
            'items_list_navigation' => 'Category list navigation',
            'items_list' => 'Category list',
            'back_to_items' => '← Go to category',
            'item_link' => 'Category Link',
            'item_link_description' => 'A link to a category',
        ),
        'public' => true,
        'hierarchical' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
    ) );
    } );
    
    
    
    