<?php

function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_sub_page') ) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'  => __('Theme General Settings','wolf_it'),
            'menu_title'  => __('Theme Options','wolf_it'),
            'menu_slug'     => 'theme-general-settins',
            'redirect'    => false,
        ));

        // Header
        $child = acf_add_options_sub_page(array(
            'page_title'  => __('Header','wolf_it'),
            'menu_title'  => __('Header Section','wolf_it'),
            'parent_slug' => $parent['menu_slug'],
        ));

        // Footer
        $child = acf_add_options_sub_page(array(
            'page_title'  => __('Footer','wolf_it'),
            'menu_title'  => __('Footer Section','wolf_it'),
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}






add_action('acf/init', 'my_acf_op_init');