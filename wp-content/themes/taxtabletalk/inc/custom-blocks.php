<?php
/**
 * Create custom block powered by Genesis Custom Blocks Plugin
 */

 use function Genesis\CustomBlocks\add_block;

 function add_social_share_block() {
    add_block(
        'social-share', 
        array( 
            'title'    => 'Social Share', 
            'category' => 'widget', 
            'icon'     => 'scatter_plot', 
            'keywords' => array( 'share', 'social', 'twitter' ), 
            'fields'   => array( 
                'enable-facebook' => array( 
                    'label'   => 'Facebook', 
                    'control' => 'toggle',
                    'location' => 'inspector', 
                    'width'   => '50', 
                ), 
                'enable-twitter' => array( 
                    'label'   => 'Twitter', 
                    'control' => 'toggle', 
                    'location' => 'inspector',
                    'width'   => '50', 
                ), 
                'enable-email' => array( 
                    'label'   => 'Mail', 
                    'control' => 'toggle', 
                    'location' => 'inspector',
                    'width'   => '50', 
                ),
            ), 
        ) 
    ); 
}
add_action( 'genesis_custom_blocks_add_blocks', 'add_social_share_block' );
/**
 * Add Podcast Link Button
 */
function add_podcast_link_buttons_block() {
    add_block(
        'single-podcast-apple-link', 
        array( 
            'title'    => 'Apple Podcast', 
            'category' => 'widget', 
            'icon'     => 'scatter_plot', 
            'keywords' => array( 'share', 'social', 'twitter' ), 
            'fields'   => array( 
                'button-open-in-newtab' => array( 
                    'label'   => 'Open in new tab', 
                    'control' => 'toggle', 
                    'location' => 'inspector',
                    'width'   => '100', 
                ),
                'button-color' => array( 
                    'label'   => 'Color', 
                    'control' => 'color', 
                    'location' => 'inspector',
                    'width'   => '100', 
                    'default' => 'inherit',
                ),
                'button-font' => array( 
                    'label'   => 'Font Size', 
                    'control' => 'select', 
                    'location' => 'inspector',
                    'options' => [
                        ['value' => 'has-small-font-size','label' =>'Small'],
                        ['value' => 'has-medium-font-size','label' =>'Medium'],
                        ['value' => 'has-large-font-size','label' =>'Large'],
                    ],
                    'width'   => '100',
                    'type'     => 'string', 
                ),
            ), 
        ) 
    ); 
//iHeart Radio
    add_block(
        'single-podcast-iheart-link', 
        array( 
            'title'    => 'iHeart Radio', 
            'category' => 'widget', 
            'icon'     => 'scatter_plot', 
            'keywords' => array( 'share', 'social', 'twitter' ), 
            'fields'   => array( 
                'button-open-in-newtab' => array( 
                    'label'   => 'Open in new tab', 
                    'control' => 'toggle', 
                    'location' => 'inspector',
                    'width'   => '100', 
                ),
                'button-color' => array( 
                    'label'   => 'Color', 
                    'control' => 'color', 
                    'location' => 'inspector',
                    'width'   => '100', 
                    'default' => 'inherit',
                ),
                'button-font' => array( 
                    'label'   => 'Font Size', 
                    'control' => 'select', 
                    'location' => 'inspector',
                    'options' => [
                        ['value' => 'has-small-font-size','label' =>'Small'],
                        ['value' => 'has-medium-font-size','label' =>'Medium'],
                        ['value' => 'has-large-font-size','label' =>'Large'],
                    ],
                    'width'   => '100',
                    'type'     => 'string', 
                ),
            ), 
        ) 
    ); 
    //Youtube

    add_block(
        'single-podcast-youtube-link', 
        array( 
            'title'    => 'Youtube', 
            'category' => 'widget', 
            'icon'     => 'scatter_plot', 
            'keywords' => array( 'share', 'social', 'twitter' ), 
            'fields'   => array( 
                'button-open-in-newtab' => array( 
                    'label'   => 'Open in new tab', 
                    'control' => 'toggle', 
                    'location' => 'inspector',
                    'width'   => '100', 
                ),
                'button-color' => array( 
                    'label'   => 'Color', 
                    'control' => 'color', 
                    'location' => 'inspector',
                    'width'   => '100', 
                    'default' => 'inherit',
                ),
                'button-font' => array( 
                    'label'   => 'Font Size', 
                    'control' => 'select', 
                    'location' => 'inspector',
                    'options' => [
                        ['value' => 'has-small-font-size','label' =>'Small'],
                        ['value' => 'has-medium-font-size','label' =>'Medium'],
                        ['value' => 'has-large-font-size','label' =>'Large'],
                    ],
                    'width'   => '100',
                    'type'     => 'string', 
                ),
            ), 
        ) 
    );

    //Facebook

    add_block(
        'single-podcast-facebook-link', 
        array( 
            'title'    => 'Facebook', 
            'category' => 'widget', 
            'icon'     => 'scatter_plot', 
            'keywords' => array( 'share', 'social', 'twitter' ), 
            'fields'   => array( 
                'button-open-in-newtab' => array( 
                    'label'   => 'Open in new tab', 
                    'control' => 'toggle', 
                    'location' => 'inspector',
                    'width'   => '100', 
                ),
                'button-color' => array( 
                    'label'   => 'Color', 
                    'control' => 'color', 
                    'location' => 'inspector',
                    'width'   => '100', 
                    'default' => 'inherit',
                ),
                'button-font' => array( 
                    'label'   => 'Font Size', 
                    'control' => 'select', 
                    'location' => 'inspector',
                    'options' => [
                        ['value' => 'has-small-font-size','label' =>'Small'],
                        ['value' => 'has-medium-font-size','label' =>'Medium'],
                        ['value' => 'has-large-font-size','label' =>'Large'],
                    ],
                    'width'   => '100',
                    'type'     => 'string', 
                ),
            ), 
        ) 
    );
}
add_action( 'genesis_custom_blocks_add_blocks', 'add_podcast_link_buttons_block' );