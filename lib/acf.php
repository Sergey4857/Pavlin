<?php
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{
    if (function_exists('acf_register_block_type')) {

        acf_register_block_type(
            array(
                'name' => 'hero_section',
                'title' => __('Hero-section'),
                'render_template' => 'lib/blocks/home/hero.php',
                'category' => 'formatting',
                'icon' => 'admin-comments',
            )
        );

        acf_register_block_type(
            array(
                'name' => 'collection',
                'title' => __('Collection'),
                'render_template' => 'lib/blocks/home/collection.php',
                'category' => 'formatting',
                'icon' => 'admin-comments',
            )
        );

        acf_register_block_type(
            array(
                'name' => 'explore',
                'title' => __('explore'),
                'render_template' => 'lib/blocks/home/explore.php',
                'category' => 'formatting',
                'icon' => 'admin-comments',
            )
        );

        acf_register_block_type(
            array(
                'name' => 'about',
                'title' => __('About'),
                'render_template' => 'lib/blocks/about-us/about.php',
                'category' => 'formatting',
                'icon' => 'admin-comments',
            )
        );

        acf_register_block_type(
            array(
                'name' => 'contact',
                'title' => __('Contact'),
                'render_template' => 'lib/blocks/contact/contact.php',
                'category' => 'formatting',
                'icon' => 'admin-comments',
            )
        );

    }

}