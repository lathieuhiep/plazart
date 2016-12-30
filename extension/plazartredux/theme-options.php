<?php
/**
 * ReduxFramework Config File
 * TemPlaza Plazart Default Theme
 */
if ( ! class_exists( 'Redux' ) ) {
    return;
}


// This is your option name where all the Redux data is stored.
$opt_name = "plazart_options";

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    // TYPICAL -> Change these values as you need/desire
    'opt_name'             => $opt_name,
    // This is where your data is stored in the database and also becomes your global variable name.
    'display_name'         => $theme->get( 'Name' ),
    // Name that appears at the top of your panel
    'display_version'      => $theme->get( 'Version' ),
    // Version that appears at the top of your panel
    'menu_type'            => 'menu',
    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
    'allow_sub_menu'       => false,
    // Show the sections below the admin menu item or not
    'menu_title'           => esc_html__('TzPlazart Options', 'plazart-theme'),
    'page_title'           => esc_html__('TzPlazart Options', 'plazart-theme'),
    // You will need to generate a Google API key to use this feature.
    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
    'google_api_key'       => '',
    // Set it you want google fonts to update weekly. A google_api_key value is required.
    'google_update_weekly' => false,
    // Must be defined to add google fonts to the typography module
    'async_typography'     => true,
    // Use a asynchronous font on the front end or font string
    //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
    'admin_bar'            => true,
    // Show the panel pages on the admin bar
    'admin_bar_icon'       => 'dashicons-portfolio',
    // Choose an icon for the admin bar menu
    'admin_bar_priority'   => 50,
    // Choose an priority for the admin bar menu
    'global_variable'      => '',
    // Set a different name for your global variable other than the opt_name
    'dev_mode'             => false,
    // Show the time the page took to load, etc
    'update_notice'        => false,
    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
    'customizer'           => true,
    // Enable basic customizer support
    //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
    //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

    // OPTIONAL -> Give you extra features
    'page_priority'        => null,
    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
    'page_parent'          => 'themes.php',
    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    'page_permissions'     => 'manage_options',
    // Permissions needed to access the options panel.
    'menu_icon'            => '',
    // Specify a custom URL to an icon
    'last_tab'             => '',
    // Force your panel to always open to a specific tab (by id)
    'page_icon'            => 'icon-themes',
    // Icon displayed in the admin panel next to your menu_title
    'page_slug'            => '',
    // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
    'save_defaults'        => true,
    // On load save the defaults to DB before user clicks save or not
    'default_show'         => false,
    // If true, shows the default value next to each field that is not the default value.
    'default_mark'         => '',
    // What to print by the field's title if the value shown is default. Suggested: *
    'show_import_export'   => true,
    // Shows the Import/Export panel when not used as a field.

    // CAREFUL -> These options are for advanced use only
    'transient_time'       => 60 * MINUTE_IN_SECONDS,
    'output'               => true,
    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
    'output_tag'           => true,
    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
    'database'             => '',
    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
    'use_cdn'              => true,
    // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

    // HINTS
    'hints'                => array(
        'icon'          => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color'    => 'lightgray',
        'icon_size'     => 'normal',
        'tip_style'     => array(
            'color'   => 'red',
            'shadow'  => true,
            'rounded' => false,
            'style'   => '',
        ),
        'tip_position'  => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect'    => array(
            'show' => array(
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'mouseover',
            ),
            'hide' => array(
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'click mouseleave',
            ),
        ),
    )
);
Redux::setArgs( $opt_name, $args );
/*
 * ---> END ARGUMENTS
 */

//<-----------------Doc for Dev------------------>
// 1. List field (type)

/*
- palette:          https://docs.reduxframework.com/core/fields/palette-color/
- ace_editor:       https://docs.reduxframework.com/core/fields/ace-editor/
- background:       https://docs.reduxframework.com/core/fields/background/
- border:           https://docs.reduxframework.com/core/fields/border/
- button_set:       https://docs.reduxframework.com/core/fields/button_set/
- checkbox:         https://docs.reduxframework.com/core/fields/checkbox/
- color:            https://docs.reduxframework.com/core/fields/color/
- color_gradient:   https://docs.reduxframework.com/core/fields/color-gradient/
- color_rgba:       https://docs.reduxframework.com/core/fields/color-rgba/
- date:             https://docs.reduxframework.com/core/fields/date/
- dimensions        https://docs.reduxframework.com/core/fields/dimensions/
- editor            https://docs.reduxframework.com/core/fields/editor/
- gallery           https://docs.reduxframework.com/core/fields/gallery/
- image_select      https://docs.reduxframework.com/core/fields/image-select/
- info              https://docs.reduxframework.com/core/fields/info/
- link_color        https://docs.reduxframework.com/core/fields/link-color/
- media             https://docs.reduxframework.com/core/fields/media/
- multi_text        https://docs.reduxframework.com/core/fields/multi_text/
- password          https://docs.reduxframework.com/core/fields/password/
- radio             https://docs.reduxframework.com/core/fields/radio/
- raw               https://docs.reduxframework.com/core/fields/raw/
- section           https://docs.reduxframework.com/core/fields/section/
- select            https://docs.reduxframework.com/core/fields/select/
- select_image      https://docs.reduxframework.com/core/fields/select-image/
- slider            https://docs.reduxframework.com/core/fields/slider/
- sortable          https://docs.reduxframework.com/core/fields/sortable/
- sorter            https://docs.reduxframework.com/core/fields/sorter/
- spacing           https://docs.reduxframework.com/core/fields/spacing/
- spinner           https://docs.reduxframework.com/core/fields/spinner/
- switch            https://docs.reduxframework.com/core/fields/switch/
- text              https://docs.reduxframework.com/core/fields/text/
- textarea          https://docs.reduxframework.com/core/fields/textarea/
- typography        https://docs.reduxframework.com/core/fields/typography/
*/
//

/*
 * ---> START HELP TABS
 */

$tabs = array(
    array(
        'id'      => 'redux-help-tab-1',
        'title'   => esc_html__( 'Theme Information 1', 'plazart-theme' ),
        'content' => esc_html__( '<p>This is the tab content, HTML is allowed.</p>', 'plazart-theme' )
    ),
    array(
        'id'      => 'redux-help-tab-2',
        'title'   => esc_html__( 'Theme Information 2', 'plazart-theme' ),
        'content' => esc_html__( '<p>This is the tab content, HTML is allowed.</p>', 'plazart-theme' )
    )
);
Redux::setHelpTab( $opt_name, $tabs );

// Set the help sidebar
$content = esc_html__( '<p>This is the sidebar content, HTML is allowed.</p>', 'plazart-theme' );
Redux::setHelpSidebar( $opt_name, $content );


/*
 * <--- END HELP TABS
 */


/*
 *
 * ---> START SECTIONS
 *
 */

/*

    As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


 */

// -> START option background

Redux::setSection( $opt_name, array(
    'id'               => 'tz_TemPlaza',
    'title'            => esc_html__( 'Plazart Theme 1.0', 'tz-plazart' ),
    'desc'             => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum elit lectus, eget dignissim velit tristique commodo. Nullam ut faucibus est, eget fermentum turpis. Morbi sodales venenatis dolor. Nam lobortis mauris nunc, non fermentum nunc lobortis eget. Donec eget est nec justo convallis viverra quis imperdiet nisi. Duis eget placerat diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tristique augue eget est convallis, eu faucibus sem vehicula. Ut eget ante id lorem varius efficitur. ',
    'customizer_width' => '400px',
    'icon'             => '',
));

// -> END option background

// -> START General Options

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'General Options', 'plazart-theme' ),
        'id'               => 'tz_general',
        'desc'             => esc_html__( 'General all config', 'plazart-theme' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-th-large',
    ));

//Favicon Config

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Favicon', 'plazart-theme' ),
        'id'         => 'tz_favicon_config',
        'desc'       => esc_html__( '', 'plazart-theme' ),
        'subsection' => true,
        'fields'     => array(

            array(
                'id'       => 'tz_favicon_upload',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'Upload Favicon Image', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Favicon image for your website', 'plazart-theme' ),
                'desc'     => esc_html__( '', 'plazart-theme' ),
                'default'  => false,
            ),
        )
    ));

//Loading config
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Loading config', 'plazart-theme' ),
        'id'         => 'tz_general_loading',
        'desc'       => esc_html__( '', 'plazart-theme' ),
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'tz_general_show_loading',
                'type'     => 'switch',
                'title'    => esc_html__( 'Loading On/Off', 'plazart-theme' ),
                'default'  => false,
            ),
            array(
                'id'       => 'tz_general_image_loading',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'Upload image loading', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Upload image .gif', 'plazart-theme' ),
                'default'  => '',
                'required' => array( 'tz_general_show_loading', '=', true ),
            ),
        )
    ));

// -> START Layout Options
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Layout', 'plazart-theme' ),
        'id'               => 'tz_layout',
        'desc'             => esc_html__( 'Layout all config', 'plazart-theme' ),
        'customizer_width' => '400px',
        'subsection' => true,
        'fields'     => array(

            array(
                'id'       => 'tz_layout_type',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Layout', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Controls the site layout.', 'plazart-theme' ),
                'options'  => array(
                    '1' => 'Boxed',
                    '2' => 'Wide',
                ),
                'default'  => '1'
            ),
            array(
                'id'       => 'tz_layout_sitewidth',
                'type'     => 'text',
                'title'    => esc_html__( 'Site Width', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Controls the overall site width. Enter value including any valid CSS unit, ex: 1100px.', 'plazart-theme' ),
                'default'  => '1100px',
                'required' => array( 'tz_layout_type', '=', true ),
            ),
            array(
                'id'       => 'tz_layout_margin',
                'type'     => 'spacing',
                'output'   => array( '#main' ),
                'mode'     => 'padding',
                'right'         => false,     // Disable the right
                'left'          => false,     // Disable the left
                'units'    => array( 'em', 'px', '%' ),
                'title'    => esc_html__( 'Page Content Padding', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Controls the top/bottom padding for page content.', 'plazart-theme' ),
                'desc'     => esc_html__( 'Enter values including any valid CSS unit, ex: 55px, 40px.', 'plazart-theme' ),
                'default'  => array(
                    'margin-top'    => '0',
                    'margin-bottom' => '0',
                )
            )

        )
    ));

// -> START Background Options

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Background', 'plazart-theme' ),
        'id'               => 'tz_background',
        'desc'             => esc_html__( 'Background all config', 'plazart-theme' ),
        'customizer_width' => '400px',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'tz_background_body',
                'output'   => '#bd',
                'type'     => 'background',
                'clone'            => 'true',
                'title'    => esc_html__( 'Body background', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Body background with image, color, etc.', 'plazart-theme' ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
            ),
        ),
    ));

// -> END Background Options

    // -> END General Options

// -> START Header Options
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Header Options', 'plazart-theme' ),
        'id'               => 'tz_header',
        'desc'             => esc_html__( 'Header all config', 'plazart-theme' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-arrow-up',
    ));

//Logo Config

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Logo', 'plazart-theme' ),
        'id'         => 'tz_logo_config',
        'desc'       => esc_html__( '', 'plazart-theme' ),
        'subsection' => true,
        'fields'     => array(

            array(
                'id'       => 'tz_type_logo',
                'type'     => 'select',
                'title'    => esc_html__( 'Logo Type', 'plazart-theme' ),
                'subtitle' => esc_html__( 'select type for logo', 'plazart-theme' ),
                'default'  => 'logo_text',
                'options'  => array(
                    'logo_text'    => 'Logo Text',
                    'logo_image'  => 'Logo Image'
                )
            ),
            array(
                'id'       => 'tz_logo_images',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'Upload logo', 'plazart-theme' ),
                'subtitle' => esc_html__( 'logo image for your website', 'plazart-theme' ),
                'desc'     => esc_html__( '', 'plazart-theme' ),
                'default'  => false,
                'required' => array( 'tz_type_logo', '=', array( 'logo_image' ) )
            ),
            array(
                'id'             => 'tz_logo_images_size',
                'type'           => 'dimensions',
                'units'          => array( 'em', 'px', '%' ),    // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',  // Allow users to select any type of unit
                'title'          => __( 'Set width/height for logo', 'plazart-theme' ),
                'subtitle'       => esc_html__( '', 'plazart-theme' ),
                'default'        => array(
                    'width'  => '',
                    'height' => '',
                ),
                'output'         => array('.tz_logo img'),
                'required' => array( 'tz_type_logo', '=', array( 'logo_image' ) )
            ),
            array(
                'id'       => 'tz_logo_name',
                'type'     => 'text',
                'title'    => esc_html__( 'Logo Text', 'plazart-theme' ),
                'subtitle' => esc_html__( 'logo name for your website', 'plazart-theme' ),
                'desc'     => esc_html__( '', 'plazart-theme' ),
                'output'   => '',
                'default'  => 'Plazart',
                'placeholder' => 'Plazart',
                'required' => array( 'tz_type_logo', '=', array( 'logo_text' ) )
            ),
            array(
                'id'       => 'tz_logo_name_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Color text', 'plazart-theme' ),
                'desc'     => esc_html__( '', 'plazart-theme' ),
                'output'   => '.tz_logo .tz-logo-text',
                'default'  => '#000',
                'placeholder' => 'Plazart',
                'required' => array( 'tz_type_logo', '=', array( 'logo_text' ) )
            ),
        )
    ));

//Menu Config

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Menu', 'plazart-theme' ),
        'id'         => 'tz_menu_config',
        'desc'       => esc_html__( '', 'plazart-theme' ),
        'subsection' => true,
        'fields'     => array(

        )
    ));

// -> END Header Options

// -> START Footer Options
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Footer Options', 'plazart-theme' ),
        'id'               => 'tz_footer',
        'desc'             => esc_html__( 'Footer all config', 'plazart-theme' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-arrow-down'
    ));

//Footer Content

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Footer content', 'plazart-theme' ),
        'id'         => 'tz_footer_content',
        'desc'       => esc_html__( '', 'plazart-theme' ),
        'subsection' => true,
        'fields'     => array(

            array(
                'id'       => 'tz_footer_column_col',
                'type'    => 'image_select',
//                'presets' => true,
                'title'    => esc_html__( 'Number of Footer Columns', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Controls the number of columns in the footer', 'plazart-theme' ),
                'options'  => array(
                    '0' => array(
                        'alt' => 'No Footer',
                        'img' => get_template_directory_uri()  . '/extension/assets/images/no-footer.jpg'
                    ),
                    '1' => array(
                        'alt' => '1 Columnn',
                        'img' => get_template_directory_uri()  . '/extension/assets/images/footer_1col.jpg'
                    ),
                    '2' => array(
                        'alt' => '2 Columnn',
                        'img' => get_template_directory_uri()  . '/extension/assets/images/footer_2col.jpg'
                    ),
                    '3' => array(
                        'alt' => '3 Columnn',
                        'img' => get_template_directory_uri()  . '/extension/assets/images/footer_3col.jpg'
                    ),
                    '4' => array(
                        'alt' => '4 Columnn',
                        'img' => get_template_directory_uri()  . '/extension/assets/images/footer_4col.jpg'
                    ),
                ),
                'default'  => 0,
            ),

            array(
                'id'       => 'tz_footer_column_w1',
                'type'          => 'slider',
                'title'         => esc_html__( 'Footer width 1', 'plazart-theme' ),
                'subtitle'      => esc_html__( 'Select the number of columns to display in the footer', 'plazart-theme' ),
                'desc'          => esc_html__( 'Min: 1, max: 12, default value: 1', 'plazart-theme' ),
                'default'       => 1,
                'min'           => 1,
                'step'          => 1,
                'max'           => 12,
                'display_value' => 'label',
                'required' => array(
                    array('tz_footer_column_col','equals','1','2','3','4'),
                    array('tz_footer_column_col','!=','0'),
                )
            ),

            array(
                'id'       => 'tz_footer_column_w2',
                'type'          => 'slider',
                'title'         => esc_html__( 'Footer width 2', 'plazart-theme' ),
                'subtitle'      => esc_html__( 'Select the number of columns to display in the footer', 'plazart-theme' ),
                'desc'          => esc_html__( 'Min: 1, max: 12, default value: 1', 'plazart-theme' ),
                'default'       => 1,
                'min'           => 1,
                'step'          => 1,
                'max'           => 12,
                'display_value' => 'label',
                'required' => array(
                    array('tz_footer_column_col','equals','2','3','4'),
                    array('tz_footer_column_col','!=','1'),
                    array('tz_footer_column_col','!=','0'),
                )
            ),

            array(
                'id'       => 'tz_footer_column_w3',
                'type'          => 'slider',
                'title'         => esc_html__( 'Footer width 3', 'plazart-theme' ),
                'subtitle'      => esc_html__( 'Select the number of columns to display in the footer', 'plazart-theme' ),
                'desc'          => esc_html__( 'Min: 1, max: 12, default value: 1', 'plazart-theme' ),
                'default'       => 1,
                'min'           => 1,
                'step'          => 1,
                'max'           => 12,
                'display_value' => 'label',
                'required' => array(
                    array('tz_footer_column_col','equals','3','4'),
                    array('tz_footer_column_col','!=','1'),
                    array('tz_footer_column_col','!=','2'),
                    array('tz_footer_column_col','!=','0'),
                )
            ),
            array(
                'id'       => 'tz_footer_column_w4',
                'type'          => 'slider',
                'title'         => esc_html__( 'Footer width 4', 'plazart-theme' ),
                'subtitle'      => esc_html__( 'Select the number of columns to display in the footer', 'plazart-theme' ),
                'desc'          => esc_html__( 'Min: 1, max: 12, default value: 1', 'plazart-theme' ),
                'default'       => 1,
                'min'           => 1,
                'step'          => 1,
                'max'           => 12,
                'display_value' => 'label',
                'required' => array(
                    array('tz_footer_column_col','equals','4'),
                    array('tz_footer_column_col','!=','1'),
                    array('tz_footer_column_col','!=','2'),
                    array('tz_footer_column_col','!=','3'),
                    array('tz_footer_column_col','!=','0'),
                )
            ),
        )

    ));

// Copyright

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Copyright', 'plazart-theme' ),
        'id'         => 'tz_footer_copyright',
        'desc'       => esc_html__( '', 'plazart-theme' ),
        'subsection' => true,
        'fields'     => array(
            array(
                'id'         => 'tz_footer_copyright_editor',
                'type'       => 'editor',
                'title'      => esc_html__( 'Enter content copyright', 'plazart-theme' ),
                'full_width' => true,
                'default' => 'Copyright &amp; Templaza',
            ),
        )
    ));

// -> END Footer Options

// -> START Typography Options

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Typography', 'plazart-theme' ),
        'id'               => 'tz_typography',
        'desc'             => esc_html__( 'Typography all config', 'plazart-theme' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-fontsize'
    ));

// Body font

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Body Typography', 'plazart-theme' ),
        'id'         => 'tz_body_typography',
        'desc'       => esc_html__( '', 'plazart-theme' ),
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'tz_body_typography_font',
                'type'     => 'typography',
                'output'   => array( '#bd' ),
                'title'    => esc_html__( 'Body Font', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Specify the body font properties.', 'plazart-theme' ),
                'google'   => true,
                'default'  => array(
                    'color'       => '#333',
                    'font-size'   => '30px',
                    'font-family' => 'Arial,Helvetica,sans-serif',
                    'font-weight' => 'Normal',
                ),
            ),
            array(
                'id'       => 'tz_link_color',
                'type'     => 'link_color',
                'output'   => array( 'a' ),
                'title'    => esc_html__( 'Link Color', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Controls the color of all text links.', 'plazart-theme' ),
                'default'  => '#000000'
            ),
        )
    ));

// Header font

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Custom Typography', 'plazart-theme' ),
        'id'         => 'tz_custom_typography',
        'desc'       => esc_html__( '', 'plazart-theme' ),
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'tz_custom_typography_1',
                'type'     => 'typography',
                'title'    => esc_html__( 'Custom 1 Typography', 'plazart-theme' ),
                'subtitle' => esc_html__( 'These settings control the typography for all Custom 1.', 'plazart-theme' ),
                'google'   => true,
                'default'  => array(
                    'font-size'   => '30px',
                    'font-family' => 'Arial,Helvetica,sans-serif',
                    'font-weight' => 'Normal',
                    'color'       => '#000',
                ),
                'output'   => '',
            ),

            array(
                'id'       => 'tz_custom_typography_2',
                'type'     => 'typography',
                'title'    => esc_html__( 'Custom 2 Typography', 'plazart-theme' ),
                'subtitle' => esc_html__( 'These settings control the typography for all Custom 2.', 'plazart-theme' ),
                'google'   => true,
                'default'  => array(
                    'font-size'   => '30px',
                    'font-family' => 'Arial,Helvetica,sans-serif',
                    'font-weight' => 'Normal',
                    'color'       => '#000',
                ),
                'output'   => '',
            ),

            array(
                'id'       => 'tz_custom_typography_3',
                'type'     => 'typography',
                'title'    => esc_html__( 'Custom 3 Typography', 'plazart-theme' ),
                'subtitle' => esc_html__( 'These settings control the typography for all Custom 3.', 'plazart-theme' ),
                'google'   => true,
                'default'  => array(
                    'font-size'   => '30px',
                    'font-family' => 'Arial,Helvetica,sans-serif',
                    'font-weight' => 'Normal',
                    'color'       => '#000',
                ),
                'output'   => '',
            ),

            array(
                'id'       => 'tz_custom_typography_4',
                'type'     => 'typography',
                'title'    => esc_html__( 'Custom 4 Typography', 'plazart-theme' ),
                'subtitle' => esc_html__( 'These settings control the typography for all Custom 4.', 'plazart-theme' ),
                'google'   => true,
                'default'  => array(
                    'font-size'   => '30px',
                    'font-family' => 'Arial,Helvetica,sans-serif',
                    'font-weight' => 'Normal',
                    'color'       => '#000',
                ),
                'output'   => '',
            ),

            array(
                'id'       => 'tz_custom_typography_5',
                'type'     => 'typography',
                'title'    => esc_html__( 'Custom 5 Typography', 'plazart-theme' ),
                'subtitle' => esc_html__( 'These settings control the typography for all Custom 5.', 'plazart-theme' ),
                'google'   => true,
                'default'  => array(
                    'font-size'   => '30px',
                    'font-family' => 'Arial,Helvetica,sans-serif',
                    'font-weight' => 'Normal',
                    'color'       => '#000',
                ),
                'output'   => '',
            ),

            array(
                'id'       => 'tz_custom_typography_6',
                'type'     => 'typography',
                'title'    => esc_html__( 'Custom 6 Typography', 'plazart-theme' ),
                'subtitle' => esc_html__( 'These settings control the typography for all Custom 6.', 'plazart-theme' ),
                'google'   => true,
                'default'  => array(
                    'font-size'   => '30px',
                    'font-family' => 'Arial,Helvetica,sans-serif',
                    'font-weight' => 'Normal',
                    'color'       => '#000',
                ),
            ),
        )
    ));

// Custom font

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Custom Fonts', 'plazart-theme' ),
        'id'         => 'tz_custom_font',
        'desc'       => esc_html__( '', 'plazart-theme' ),
        'type'      => 'repeater',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'tz_custom_font_name',
                'type'     => 'text',
                'title'    => esc_html__( 'Font Name', 'plazart-theme' ),
                'subtitle' => esc_html__( 'This will be used in the font-family dropdown', 'plazart-theme' ),
            ),
            array(
                'id'       => 'tz_custom_upload_woff',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'WOFF', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Upload font file (.woff)', 'plazart-theme' ),
                'compiler' => 'true',
                'mode'     => false,
            ),
            array(
                'id'       => 'tz_custom_upload_otf',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'OTF', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Upload font file (.otf)', 'plazart-theme' ),
                'compiler' => 'true',
                'mode'     => false,
            ),
            array(
                'id'       => 'tz_custom_upload_ttf',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'TTF', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Upload font file (.ttf)', 'plazart-theme' ),
                'compiler' => 'true',
                'mode'     => false,
            ),
            array(
                'id'       => 'tz_custom_upload_svg',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'SVG', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Upload font file (.svg)', 'plazart-theme' ),
                'compiler' => 'true',
                'mode'     => false,
            ),
            array(
                'id'       => 'tz_custom_upload_eot',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'EOT', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Upload font file (.eot)', 'plazart-theme' ),
                'compiler' => 'true',
                'mode'     => false,
            ),
        )
    ));

// -> END Typography Options

// -> START Blog Options

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Blog', 'plazart-theme' ),
        'id'               => 'tz_blog',
        'desc'             => esc_html__( 'Blog all config', 'plazart-theme' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-bold',
    ));

//Blog General

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Blog General', 'plazart-theme' ),
        'id'         => 'tz_blog_general',
        'desc'       => esc_html__( '', 'plazart-theme' ),
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'tz_blog_general_layout',
                'type'     => 'select',
                'title'    => esc_html__( 'Blog Layout', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Controls the layout for the blog archive pages.', 'plazart-theme' ),
                'options'  => array(
                    '0'    => 'List',
                    '1'    => 'Grid',
                ),
                'default'  => 0,
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
            ),
            array(
                'id'            => 'tz_blog_general_layout_grid',
                'type'          => 'slider',
                'title'         => esc_html__( 'Grid Layout Columns', 'redux-framework-demo' ),
                'subtitle'      => esc_html__( 'Controls the amount of columns for the grid layout when using it for the assigned blog page in "settings > reading" or blog archive pages or search results page.', 'redux-framework-demo' ),
                'desc'          => esc_html__( 'Min: 1, max: 3, step: 1, default value: 1', 'redux-framework-demo' ),
                'default'       => 1,
                'min'           => 1,
                'step'          => 1,
                'max'           => 3,
                'display_value' => 'label',
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                ),
                'required' => array( 'tz_blog_general_layout', '=', '1' )
            ),
            array(
                'id'       => 'tz_blog_general_sidebar',
                'type'     => 'select',
                'title'    => esc_html__( 'Sidebar Blog', 'plazart-theme' ),
                'subtitle' => esc_html__( '', 'plazart-theme' ),
                'options'  => array(
                    '0'    => 'None',
                    '1'    => 'Left',
                    '2'    => 'Right',
                    '3'    => 'Mixed'
                ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                ),
                'default'  => 0,
            ),
            array(
                'id'       => 'tz_blog_general_title',
                'type'     => 'switch',
                'title'    => esc_html__( 'Blog Title', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Show/Hide blog title', 'plazart-theme' ),
                'default'  => 0,
            ),
            array(
                'id'       => 'tz_blog_general_content',
                'type'     => 'switch',
                'title'    => esc_html__( 'Blog Content', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Show/Hide blog content/description', 'plazart-theme' ),
                'default'  => 0,
            ),
            array(
                'id'       => 'tz_blog_general_mandy',
                'type'     => 'text',
                'title'    => esc_html__( 'Blog Alternate Layout Month and Year Format', 'plazart-theme' ),
                'subtitle' => wp_kses_post( __( 'Controls the month and year format for blog alternate layouts. <a href="http://codex.wordpress.org/Formatting_Date_and_Time" target="_blank" rel="noopener noreferrer">Formatting Date and Time</a>', 'plazart-theme' ) ),
                'default'     => 'm, Y',
            ),
            array(
                'id'       => 'tz_blog_general_day',
                'type'     => 'text',
                'title'    => esc_html__( 'Blog Alternate Layout Day Format', 'plazart-theme' ),
                'subtitle' => wp_kses_post( __( 'Controls the month and year format for blog alternate layouts. <a href="http://codex.wordpress.org/Formatting_Date_and_Time" target="_blank" rel="noopener noreferrer">Formatting Date and Time</a>', 'plazart-theme' ) ),
                'default'     => 'j',
            ),
            array(
                'id'       => 'tz_blog_general_pagination',
                'type'     => 'switch',
                'title'    => esc_html__( 'Pagination', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Show/Hide pagination', 'plazart-theme' ),
                'default'  => 0,
            ),
        )
    ));

//Blog Single

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Blog Single', 'plazart-theme' ),
        'id'         => 'tz_blog_single',
        'desc'       => esc_html__( '', 'plazart-theme' ),
        'subsection' => true,
        'fields'     => array(

            array(
                'id'       => 'tz_blog_single_title',
                'type'     => 'switch',
                'title'    => esc_html__( 'Blog title', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Show/hide blog title', 'plazart-theme' ),
                'default'  => 0,
            ),

            array(
                'id'       => 'tz_blog_single_images',
                'type'     => 'switch',
                'title'    => esc_html__( 'Blog images, video, audio', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Show/hide blog images, video, audio', 'plazart-theme' ),
                'default'  => 0,
            ),

            array(
                'id'       => 'tz_blog_single_title',
                'type'     => 'switch',
                'title'    => esc_html__( 'Title', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Show/hide blog title', 'plazart-theme' ),
                'default'  => 0,
            ),

            array(
                'id'       => 'tz_blog_single_category',
                'type'     => 'switch',
                'title'    => esc_html__( 'Category name', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Show/hide category name', 'plazart-theme' ),
                'default'  => 0,
            ),

            array(
                'id'       => 'tz_blog_single_date',
                'type'     => 'switch',
                'title'    => esc_html__( 'Publish date', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Show/hide publish date', 'plazart-theme' ),
                'default'  => 0,
            ),

            array(
                'id'       => 'tz_blog_single_comment',
                'type'     => 'switch',
                'title'    => esc_html__( 'Comments', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Show/hide comments', 'plazart-theme' ),
                'default'  => 0,
            ),

            array(
                'id'       => 'tz_blog_single_sidebar',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Sidebar', 'plazart-theme' ),
                'subtitle' => esc_html__( '', 'plazart-theme' ),
                'options'  => array(
                    '1' => array(
                        'alt' => 'None Sidebar',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '2' => array(
                        'alt' => 'Sidebar Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    '3' => array(
                        'alt' => 'Sidebar Right',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    ),
                    '4' => array(
                        'alt' => 'Mixed',
                        'img' => ReduxFramework::$_url . 'assets/img/3cm.png'
                    ),

                ),
                'default'  => 0,
            ),

        )
    ));

// -> END Blog Options

// -> START Breadcrumbs Options

Redux::setSection( $opt_name, array(
    'title'            => esc_html__( 'Breadcrumbs', 'plazart-theme' ),
    'id'               => 'tz_breadcrumbs',
    'desc'             => esc_html__( 'Breadcrumbs config', 'plazart-theme' ),
    'customizer_width' => '400px',
    'icon'             => 'el el-compass',
    'fields'     => array(

        array(
            'id'       => 'tz_breadcrumbs_index',
            'type'     => 'switch',
            'title'    => esc_html__( 'Index Breadcrumbs', 'plazart-theme' ),
            'subtitle' => esc_html__( 'Index Breadcrumbs On/Off', 'plazart-theme' ),
            'default'  => false,
        ),

        array(
            'id'       => 'tz_breadcrumbs_archive',
            'type'     => 'switch',
            'title'    => esc_html__( 'Archive Breadcrumbs', 'plazart-theme' ),
            'subtitle' => esc_html__( 'Archive Breadcrumbs On/Off', 'plazart-theme' ),
            'default'  => false,
        ),

        array(
            'id'       => 'tz_breadcrumbs_single',
            'type'     => 'switch',
            'title'    => esc_html__( 'Single Breadcrumbs', 'plazart-theme' ),
            'subtitle' => esc_html__( 'Single Breadcrumbs On/Off', 'plazart-theme' ),
            'default'  => false,
        ),

        array(
            'id'       => 'tz_breadcrumbs_search',
            'type'     => 'switch',
            'title'    => esc_html__( 'Search Breadcrumbs', 'plazart-theme' ),
            'subtitle' => esc_html__( 'Search Breadcrumbs On/Off', 'plazart-theme' ),
            'default'  => false,
        ),

    )
));

// -> END Breadcrumbs Options

// -> START 404 Options

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( '404 Options', 'plazart-theme' ),
        'id'               => 'tz_404',
        'desc'             => esc_html__( '404 page all config', 'plazart-theme' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-warning-sign',
        'fields'     => array(
            array(
                'id'       => 'tz_404_background',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( '404 Background', 'plazart-theme' ),
                'default'  => false,
            ),
            array(
                'id'       => 'tz_404_title',
                'type'     => 'text',
                'title'    => esc_html__( '404 Title', 'plazart-theme' ),
                'default'  => false,
            ),
            array(
                'id'       => 'tz_404_editor',
                'type'     => 'editor',
                'title'    => esc_html__( '404 Content', 'plazart-theme' ),
                'default'  => false,
            ),
        )
    ));

// -> END 404 Options

// -> START Custom Css Options

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Custom Css', 'plazart-theme' ),
        'id'               => 'tz_custom_css',
        'customizer_width' => '400px',
        'icon'             => 'el el-css',
        'fields'     => array(
            array(
                'id'       => 'tz_custom_css_code',
                'type'     => 'ace_editor',
                'title'    => esc_html__( 'CSS CODE', 'plazart-theme' ),
                'desc'     => esc_html__( 'Enter your CSS code in the field below. Do not include any tags or HTML in the field. Custom CSS entered here will override the theme CSS. In some cases, the !important tag may be needed. Don\'t URL encode image or svg paths. Contents of this field will be auto encoded.', 'plazart-theme' ),
                'subtitle' => esc_html__( 'Select type color theme', 'plazart-theme' ),
                'mode'     => 'css',
                'theme'    => 'chrome',
                'default'  => ''
            ),
        )
    ));

// -> END Custom Css Options
/*
 * <--- END SECTIONS
 */
// Function to test the compiler hook and demo CSS output.
// Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

// Change the arguments after they've been declared, but before the panel is created
//add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

// Change the default value of a field after it's been set, but before it's been useds
//add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

// Dynamically add a section. Can be also used to modify sections/fields
//add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

/**
 * This is a test function that will let you see when the compiler hook occurs.
 * It only runs if a field    set with compiler=>true is changed.
 * */
if ( ! function_exists( 'compiler_action' ) ) {
    function compiler_action( $options, $css, $changed_values ) {
        echo '<h1>The compiler hook has run!</h1>';
        echo "<pre>";
        print_r( $changed_values ); // Values that have changed since the last save
        echo "</pre>";
        print_r($options); //Option values
        print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
    }
}
