<?php 
require_once get_template_directory(). '/inc/class-tgm-plugin-activation.php';

function wolf_it_activation(){
    $plugins = array(
        array(
            'name' => __('One Click Demo Import', 'wolf_it'),
            'slug' => 'one-click-demo-import',
            'required' => true,
        ),

        array(
            'name' => __('Advanced Custom Fields Pro', 'wolf_it'),
            'slug' => 'advanced-custom-fields-pro',
            'source'  => get_stylesheet_directory() . '/plugins/advanced-custom-fields-pro.zip', // The plugin source.
            'required' => true,
        ),

        array(
            'name' => __('Wolf_ It Elementor Addon', 'wolf_it'),
            'slug' => 'wolf-it-elemenotr-addon',
            'source'  => get_stylesheet_directory() . '/plugins/wolf_it-elementor-addon.zip', // The plugin source.
            'required' => true,
        ),

        array(
            'name' => __('Elementor', 'wolf_it'),
            'slug' => 'elementor',
            'required' => true,
        ),

        array(
            'name' => __('Advanced Custom Fields: Font Awesome Field', 'wolf_it'),
            'slug' => 'advanced-custom-fields-font-awesome',
            'required' => true,
        )
    );
    $config = array(
        'id'            => 'wolf_it_plugin_active',
        'menu'          => 'tgmpa-install-plugins',
        'parent_slug'   => 'themes.php',
        'has_notices'   => true,
    );

    tgmpa ($plugins, $config);

}
add_action('tgmpa_register', 'wolf_it_activation');