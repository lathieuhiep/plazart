<?php
// -> START TemPlaza background

Redux::setSection( $opt_name, array(
'id'               => 'tz_TemPlaza',
'title'            => esc_html__( 'Plazart Theme 1.0', 'tz-plazart' ),
'customizer_width' => '400px',
'icon'             => '',
));
// -> END TemPlaza background


// -> START Logo & Favicon Options
Redux::setSection( $opt_name, array(
'title'            => esc_html__( 'Logo & Favicon', 'plazart-theme' ),
'id'               => 'tz_plazart_logo',
'desc'             => esc_html__( 'Logo & Favicon settings', 'plazart-theme' ),
'customizer_width' => '400px',
'icon'             => 'el el-flag',
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


// -> End Logo & Favicon Options

// -> START General Options

Redux::setSection( $opt_name, array(
'title'            => esc_html__( 'General Options', 'plazart-theme' ),
'id'               => 'tz_general',
'desc'             => esc_html__( 'General all config', 'plazart-theme' ),
'customizer_width' => '400px',
'icon'             => 'el el-th-large',
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

// -> END General Options

// -> START Background Options

Redux::setSection( $opt_name, array(
'title'            => esc_html__( 'Background', 'plazart-theme' ),
'id'               => 'tz_background',
'desc'             => esc_html__( 'Background all config', 'plazart-theme' ),
'customizer_width' => '400px',
'icon'             => 'el el-photo',
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

// -> START Color Options

Redux::setSection( $opt_name, array(
'title'            => esc_html__( 'Color', 'plazart-theme' ),
'id'               => 'tz_color',
'desc'             => esc_html__( 'Color all config', 'plazart-theme' ),
'customizer_width' => '400px',
'icon'             => 'el el-brush',
'fields'     => array(
array(
'id'       => 'tz_color_type',
'type'     => 'button_set',
'title'    => esc_html__( 'Color config', 'plazart-theme' ),
'subtitle' => esc_html__( 'Select type color theme', 'plazart-theme' ),
'options'  => array(
'1' => 'None',
'2' => 'Default color',
'3' => 'Custom color'
),
'default'  => '1'
),
//Default color
array(
'id'       => 'tz_default_color',
'type'     => 'image_select',
'title'    => esc_html__( 'Images Option', 'plazart-theme' ),
'subtitle' => esc_html__( 'No validation can be done on this field type', 'plazart-theme' ),
'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'plazart-theme' ),
//Must provide key => value(array:title|img) pairs for radio options
'options'  => array(
'1' => array( 'title' => 'Opt 1', 'img' => get_template_directory_uri() . '/extension/assets/images/homecolor.jpg' ),
'2' => array( 'title' => 'Opt 2', 'img' => get_template_directory_uri() . '/extension/assets/images/homecolor1.jpg' ),
'3' => array( 'title' => 'Opt 3', 'img' => get_template_directory_uri() . '/extension/assets/images/homecolor2.jpg' ),
'4' => array( 'title' => 'Opt 4', 'img' => get_template_directory_uri() . '/extension/assets/images/homecolor3.jpg' )
),
'default'  => '1',
'required' => array( 'tz_color_type', '=', array( '2' ) )
),
//Custom color
array(
'id'       => 'tz_custom_color',
'type'     => 'color_rgba',
'title'    => esc_html__( 'Custom color', 'plazart-theme' ),
'subtitle' => __( 'Gives you the RGBA color.', 'redux-framework-demo' ),
'default'  => array(
'color' => '#7e33dd',
'alpha' => '.8'
),
'mode'     => 'background',
'validate' => 'colorrgba',
'required' => array( 'tz_color_type', '=', array( '3' ) )
),
)
));

// -> END Color Options



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
'type'     => 'select',
'title'    => esc_html__( 'Sidebar', 'plazart-theme' ),
'subtitle' => esc_html__( '', 'plazart-theme' ),
'options'  => array(
'0'    => 'None',
'1'    => 'Left',
'2'    => 'Right',
'3'    => 'Mixed'
),
'default'  => 0,
),

)
));

// -> END Blog Options


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
'type'     => 'select',
'title'    => esc_html__( 'Number of Footer Columns', 'plazart-theme' ),
'subtitle' => esc_html__( 'Controls the number of columns in the footer', 'plazart-theme' ),
'options'  => array(
'0'    => 'None',
'1'    => '1 Columnn',
'2'    => '2 Columnn',
'3'    => '3 Columnn',
'4'    => '4 Columnn',
'5'    => '5 Columnn',
'6'    => '6 Columnn',
),
'default'  => 1,
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
array('tz_footer_column_col','equals','1','2','3','4','5','6'),
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
array('tz_footer_column_col','equals','2','3','4','5','6'),
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
array('tz_footer_column_col','equals','3','4','5','6'),
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
array('tz_footer_column_col','equals','4','5','6'),
array('tz_footer_column_col','!=','1'),
array('tz_footer_column_col','!=','2'),
array('tz_footer_column_col','!=','3'),
array('tz_footer_column_col','!=','0'),
)
),
array(
'id'       => 'tz_footer_column_w5',
'type'          => 'slider',
'title'         => esc_html__( 'Footer width 5', 'plazart-theme' ),
'subtitle'      => esc_html__( 'Select the number of columns to display in the footer', 'plazart-theme' ),
'desc'          => esc_html__( 'Min: 1, max: 12, default value: 1', 'plazart-theme' ),
'default'       => 1,
'min'           => 1,
'step'          => 1,
'max'           => 12,
'display_value' => 'label',
'required' => array(
array('tz_footer_column_col','equals','5','6'),
array('tz_footer_column_col','!=','1'),
array('tz_footer_column_col','!=','2'),
array('tz_footer_column_col','!=','3'),
array('tz_footer_column_col','!=','4'),
array('tz_footer_column_col','!=','0'),
)
),
array(
'id'       => 'tz_footer_column_w6',
'type'          => 'slider',
'title'         => esc_html__( 'Footer width 6', 'plazart-theme' ),
'subtitle'      => esc_html__( 'Select the number of columns to display in the footer', 'plazart-theme' ),
'desc'          => esc_html__( 'Min: 1, max: 12, default value: 1', 'plazart-theme' ),
'default'       => 1,
'min'           => 1,
'step'          => 1,
'max'           => 12,
'display_value' => 'label',
'required' => array(
array('tz_footer_column_col','equals','6'),
array('tz_footer_column_col','!=','1'),
array('tz_footer_column_col','!=','2'),
array('tz_footer_column_col','!=','3'),
array('tz_footer_column_col','!=','4'),
array('tz_footer_column_col','!=','5'),
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

// -> START Layout Options
Redux::setSection( $opt_name, array(
'title'            => esc_html__( 'Layout', 'plazart-theme' ),
'id'               => 'tz_layout',
'desc'             => esc_html__( 'Layout all config', 'plazart-theme' ),
'customizer_width' => '400px',
'icon'             => 'el el-move',
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


// -> END Layout Options


// -> START Social Share Options

Redux::setSection( $opt_name, array(
'title'            => esc_html__( 'Social', 'plazart-theme' ),
'id'               => 'tz_social',
'desc'             => esc_html__( 'Social all config', 'plazart-theme' ),
'customizer_width' => '400px',
'icon'             => 'el el-share',
'fields'     => array(
array(
'id'       => 'tz_social_switch',
'type'     => 'switch',
'title'    => esc_html__( 'Social', 'plazart-theme' ),
'subtitle' => esc_html__( 'Enabled/Disabled Social', 'plazart-theme' ),
'on'       => 'Enabled',
'off'      => 'Disabled',
),
//facebook share
array(
'id'       => 'tz_social_facebook',
'type'     => 'switch',
'title'    => esc_html__( 'Facebook', 'plazart-theme' ),
'subtitle' => esc_html__( 'Enabled/Disabled Facebook share', 'plazart-theme' ),
'default'  => false,
'on'       => 'Enabled',
'off'      => 'Disabled',
'required' => array( 'tz_social_switch', '=', true ),
),
array(
'id'       => 'tz_social_facebook_link',
'type'     => 'text',
'title'    => esc_html__( 'Facebook Link', 'plazart-theme' ),
'subtitle' => esc_html__( 'Enter facebook link ', 'plazart-theme' ),
'placeholder'  => 'https://www.facebook.com/templaza',
'required' => array( 'tz_social_facebook', '=', true ),
),
array(
'id'       => 'tz_social_facebook_icon',
'type'     => 'text',
'title'    => esc_html__( 'Facebook Icon', 'plazart-theme' ),
'subtitle' => esc_html__( 'Enter facebook icon ', 'plazart-theme' ),
'placeholder'  => 'fa fa-facebook',
'required' => array( 'tz_social_facebook', '=', true ),
),
//twitter share
array(
'id'       => 'tz_social_twitter',
'type'     => 'switch',
'title'    => esc_html__( 'Twitter', 'plazart-theme' ),
'subtitle' => esc_html__( 'Enabled/Disabled Twitter share', 'plazart-theme' ),
'default'  => false,
'on'       => 'Enabled',
'off'      => 'Disabled',
'required' => array( 'tz_social_switch', '=', true ),
),
array(
'id'       => 'tz_social_twitter_link',
'type'     => 'text',
'title'    => esc_html__( 'Twitter Link', 'plazart-theme' ),
'subtitle' => esc_html__( 'Enter twitter link ', 'plazart-theme' ),
'placeholder'  => 'https://twitter.com/templazavn',
'required' => array( 'tz_social_twitter', '=', true ),
),
array(
'id'       => 'tz_social_twitter_icon',
'type'     => 'text',
'title'    => esc_html__( 'Twitter Icon', 'plazart-theme' ),
'subtitle' => esc_html__( 'Enter twitter icon ', 'plazart-theme' ),
'placeholder'  => 'fa fa-twitter',
'required' => array( 'tz_social_twitter', '=', true ),
),
//Google plus share
array(
'id'       => 'tz_social_google',
'type'     => 'switch',
'title'    => esc_html__( 'Google Plus', 'plazart-theme' ),
'subtitle' => esc_html__( 'Enabled/Disabled Google Plus share', 'plazart-theme' ),
'default'  => false,
'on'       => 'Enabled',
'off'      => 'Disabled',
'required' => array( 'tz_social_switch', '=', true ),
),
array(
'id'       => 'tz_social_google_link',
'type'     => 'text',
'title'    => esc_html__( 'Google Plus Link', 'plazart-theme' ),
'subtitle' => esc_html__( 'Enter google plus link ', 'plazart-theme' ),
'placeholder'  => 'https://plus.google.com/+Templaza',
'required' => array( 'tz_social_google', '=', true ),
),
array(
'id'       => 'tz_social_google_icon',
'type'     => 'text',
'title'    => esc_html__( 'Google plus Icon', 'plazart-theme' ),
'subtitle' => esc_html__( 'Enter google plus icon ', 'plazart-theme' ),
'placeholder'  => 'fa fa-google-plus',
'required' => array( 'tz_social_google', '=', true ),
),
)
));

// -> END Social Share Options

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