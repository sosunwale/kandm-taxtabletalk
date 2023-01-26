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

    //Google Podcast

    add_block(
        'single-podcast-googlepod-link', 
        array( 
            'title'    => 'Google Podcast', 
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

/**
 * Add Modal Popup
 */
function add_modal_popup_block() {
    add_block(
        'modal-popup', 
        array( 
            'title'    => 'Modal Popup', 
            'category' => 'widget', 
            'icon'     => 'wallpaper', 
            'keywords' => array( 'popup', 'modal', 'form' ), 
            'fields'   => array( 
                'modal-button-color' => array( 
                    'label'   => 'Button Color', 
                    'control' => 'color',
                    'location' => 'inspector', 
                    'width'   => '100', 
                    'default'   => 'inherit', 
                    'type'  => 'string',
                    'order' => 1,
                ), 
                'modal-button-background-color' => array( 
                    'label'   => 'Button Background', 
                    'control' => 'color',
                    'location' => 'inspector', 
                    'width'   => '100', 
                    'type'  => 'string',
                    'order' => 2,
                ), 
                'modal-button-text' => array( 
                    'label'   => 'Button Text', 
                    'control' => 'text', 
                    'location' => 'inspector',
                    'width'   => '100',
                    'default' => 'Open Modal',
                    'placeholder'   => 'Open Modal',
                    'maxlength' => 35,
                    'order' => 0, 
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
                    'default' => 'has-medium-font-size',
                    'type'     => 'string', 
                ),
                'button-align' => array( 
                    'label'   => 'Button Align', 
                    'control' => 'select', 
                    'location' => 'inspector',
                    'options' => [
                        ['value' => 'is-modal-button-justification-center','label' =>'Center'],
                        ['value' => 'is-modal-button-justification-left','label' =>'Float Left'],
                        ['value' => 'is-modal-button-justification-right','label' =>'Float Right'],
                    ],
                    'width'   => '100',
                    'default' => 'is-modal-button-justification-center',
                    'type'     => 'string', 
                ), 
                'button-position' => array( 
                    'label'   => 'Button Float?', 
                    'control' => 'select', 
                    'location' => 'inspector',
                    'options' => [
                        ['value' => 'button-inplace','label' =>'No'],
                        ['value' => 'center-center','label' =>'Center Center'],
                        ['value' => 'center-left','label' =>'Center Left'],
                        ['value' => 'center-right','label' =>'Center Right'],
                        ['value' => 'top-center','label' =>'Top Center'],
                        ['value' => 'bottom-center','label' =>'Bottom Center'],
                        ['value' => 'top-left','label' =>'Top Left'],
                        ['value' => 'top-right','label' =>'Top Right'],
                        ['value' => 'bottom-left','label' =>'Bottom Left'],
                        ['value' => 'bottom-right','label' =>'Bottom Right'],
                    ],
                    'width'   => '100',
                    'default' => 'button-inplace',
                    'type'     => 'string', 
                ),
                'limit-float' => array( 
                    'label'   => 'Restrict float to container', 
                    'control' => 'toggle', 
                    'location' => 'inspector',
                    'width'   => '100',
                ),
                'modal-content' => array( 
                    'label'   => 'Modal Content', 
                    'control' => 'inner_blocks', 
                    'location' => 'editor',
                    'width'   => '100', 
                    'type'  => 'string',
                ),
                'modal-position' => array( 
                    'label'   => 'Modal Position', 
                    'control' => 'select', 
                    'location' => 'inspector',
                    'options' => [
                        ['value' => 'center-center','label' =>'Center Center'],
                        ['value' => 'center-left','label' =>'Center Left'],
                        ['value' => 'center-right','label' =>'Center Right'],
                        ['value' => 'top-center','label' =>'Top Center'],
                        ['value' => 'bottom-center','label' =>'Bottom Center'],
                        ['value' => 'top-left','label' =>'Top Left'],
                        ['value' => 'top-right','label' =>'Top Right'],
                        ['value' => 'bottom-left','label' =>'Bottom Left'],
                        ['value' => 'bottom-right','label' =>'Bottom Right'],
                    ],
                    'width'   => '100',
                    'default' => 'center-center',
                    'type'     => 'string', 
                ),
            ), 
        ) 
    ); 
}
add_action( 'genesis_custom_blocks_add_blocks', 'add_modal_popup_block' );
