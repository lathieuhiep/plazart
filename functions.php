<?php

/*
 *constants
 */
if( !function_exists('tz_plazart_setup') ):
    function tz_plazart_setup(){

        /**
         * Set the content width based on the theme's design and stylesheet.
         */
        global $content_width;
        if ( ! isset( $content_width ) )
            $content_width = 900;

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         */
        load_theme_textdomain( 'plazart-theme', get_template_directory() . '/languages' );

        /**
         * plazart theme setup.
         *
         * Set up theme defaults and registers support for various WordPress features.
         *
         * Note that this function is hooked into the after_setup_theme hook, which
         * runs before the init hook. The init hook is too late for some features, such
         * as indicating support post thumbnails.
         *
         */
        //Enable support for Header (tz-demo)
        add_theme_support( 'custom-header' );

        //Enable support for Background (tz-demo)
        add_theme_support( 'custom-background' );

        //Enable support for Post Thumbnails
        add_theme_support('post-thumbnails');

        // Add RSS feed links to <head> for posts and comments.
        add_theme_support( 'automatic-feed-links' );

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menu('primary','Primary Menu');
        register_nav_menu('footer-menu','Footer Menu');

        // add theme support title-tag
        add_theme_support( 'title-tag' );

        /*  Post Type   */
        add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio', 'link','quote' ) );

        /*
	    * This theme styles the visual editor to resemble the theme style,
	    * specifically font, colors, icons, and column width.
	    */
        add_editor_style( array( 'css/editor-style.css', tz_plazart_fonts_url()) );
    }
endif;
add_action( 'after_setup_theme', 'tz_plazart_setup' );

/**
 * Register Sidebar
 */

add_action( 'widgets_init', 'tz_plazart_widgets_init');
function tz_plazart_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'plazart-theme'),
        'id'            => 'tz-plazart-sidebar',
        'description'   => esc_html__( 'Display sidebar right or left on all page.', 'plazart-theme' ),
        'before_widget' => '<aside id="%1$s" class="%2$s widget">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="module-title title-widget"><span>',
        'after_title'   => '</span></h3>'
    ));

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'plazart-theme' ),
        'id'            => 'tz-plazart-footer-1',
        'description'   => esc_html__( 'Display footer column 1 on all page.', 'plazart-theme' ),
        'before_widget' => '<aside id="%1$s" class="%2$s widget">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="module-title title-widget"><span>',
        'after_title'   => '</span></h3>'
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'plazart-theme' ),
        'id'            => 'tz-plazart-footer-2',
        'description'   => esc_html__( 'Display footer column 2 on all page.', 'plazart-theme' ),
        'before_widget' => '<aside id="%1$s" class="%2$s widget">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="module-title title-widget"><span>',
        'after_title'   => '</span></h3>'
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'plazart-theme' ),
        'id'            => 'tz-plazart-footer-3',
        'description'   => esc_html__( 'Display footer column 3 on all page.', 'plazart-theme' ),
        'before_widget' => '<aside id="%1$s" class="%2$s widget">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="module-title title-widget"><span>',
        'after_title'   => '</span></h3>'
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 4', 'plazart-theme' ),
        'id'            => 'tz-plazart-footer-4',
        'description'   => esc_html__( 'Display footer column 4 on all page.', 'plazart-theme' ),
        'before_widget' => '<aside id="%1$s" class="%2$s widget">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="module-title title-widget"><span>',
        'after_title'   => '</span></h3>'
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 5', 'plazart-theme' ),
        'id'            => 'tz-plazart-footer-5',
        'description'   => esc_html__( 'Display footer column 5 on all page.', 'plazart-theme' ),
        'before_widget' => '<aside id="%1$s" class="%2$s widget">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="module-title title-widget"><span>',
        'after_title'   => '</span></h3>'
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 6', 'plazart-theme' ),
        'id'            => 'tz-plazart-footer-6',
        'description'   => esc_html__( 'Display footer column 6 on all page.', 'plazart-theme' ),
        'before_widget' => '<aside id="%1$s" class="%2$s widget">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="module-title title-widget"><span>',
        'after_title'   => '</span></h3>'
    ) );
}

/*  Theme Scripts  */
add_action('init', 'tz_plazart_register_theme_scripts');
function tz_plazart_register_theme_scripts(){
    if ($GLOBALS['pagenow'] != 'wp-login.php') {
        if (is_admin()) {
            add_action('admin_enqueue_scripts', 'tz_plazart_register_back_end_scripts');
        }else{
            add_action('wp_enqueue_scripts', 'tz_plazart_register_front_end_styles');
            add_action('wp_enqueue_scripts', 'tz_plazart_register_front_end_scripts');
        }
    }
}

//Register Back-End script
function tz_plazart_register_back_end_scripts(){

    wp_enqueue_style('plazart-admin-styles', get_template_directory_uri() . '/extension/assets/css/admin-styles.css');
    wp_enqueue_style('plazart-option', get_template_directory_uri() . '/extension/assets/css/tz-theme-options.css');

    wp_enqueue_script('plazart-portfolio-meta-boxes', get_template_directory_uri() . '/extension/assets/js/portfolio-meta-boxes.js', array(), false, $in_footer=true );
    wp_enqueue_script('plazart-portfolio-theme-option', get_template_directory_uri() . '/extension/assets/js/portfolio-theme-option.js', array(), false, $in_footer=true );
}

//Register Front-End Styles
function tz_plazart_register_front_end_styles()
{
    wp_enqueue_style('bootstrap.min', get_template_directory_uri().'/css/bootstrap.min.css', false );
    wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.css', false );
    wp_enqueue_style( 'plazart-fonts', tz_plazart_fonts_url(), array(), null );
    if( is_single() || is_tag() || is_category() || is_archive() || is_author() || is_search() || is_home() ){
        wp_enqueue_style('flexslider', get_template_directory_uri().'/css/flexslider/flexslider.css', false );
    }

    /*   End-Fonts-option   */
    wp_enqueue_style('plazart-style', get_template_directory_uri() . '/style.css', false );

    // Load the Internet Explorer specific stylesheet.
    wp_enqueue_style( 'tz-plazart-ie', get_template_directory_uri() . '/css/ie.css', array( 'plazart-style' ), '20160816' );
    wp_style_add_data( 'tz-plazart-ie', 'conditional', 'lt IE 10' );

    // Load the Internet Explorer 8 specific stylesheet.
    wp_enqueue_style( 'tz-plazart-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'plazart-style' ), '20160816' );
    wp_style_add_data( 'tz-plazart-ie8', 'conditional', 'lt IE 9' );

    // Load the Internet Explorer 7 specific stylesheet.
    wp_enqueue_style( 'tz-plazart-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'plazart-style' ), '20160816' );
    wp_style_add_data( 'tz-plazart-ie7', 'conditional', 'lt IE 8' );

}

//Register Front-End Scripts
function tz_plazart_register_front_end_scripts()
{

    // Load the html5 shiv.
    wp_enqueue_script( 'tz-plazart-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.0' );
    wp_script_add_data( 'tz-plazart-html5', 'conditional', 'lt IE 9' );

    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri().'/js/bootstrap.min.js',array(),false,true );

    if ( is_single() ):
        wp_enqueue_script('widgets', get_template_directory_uri().'/js/widgets.js',array(),false,true);
    endif;

    if( is_single() || is_tag() || is_category() || is_archive() || is_author() || is_search() || is_home()){
        wp_enqueue_script('jsflexslider', get_template_directory_uri().'/js/jquery.flexslider-min.js',array(),false,true);
        wp_enqueue_script('plazart-single', get_template_directory_uri().'/js/single.js',array(),false,true);
    }

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    wp_enqueue_script( 'plazart-custom', get_template_directory_uri().'/js/custom.js',array('jquery'),false,true );

}

/*
 * Required: include plugin theme scripts
 */
require get_template_directory() . '/extension/tz-process-option.php';

if ( class_exists( 'ReduxFramework' ) ) {
    /*
     * Required: Redux Framework
     */
    require get_template_directory() . '/extension/plazartredux/theme-options.php';
}

// Enable upload custom font
//Update function by TemPlaza HungKv
if( ! function_exists( 'tz_plazart_upload_mimes' ) ) {
    function tz_plazart_upload_mimes( $tz_plazart_existing_mimes=array() ){
        $tz_plazart_existing_mimes['woff']   = 'font/woff';
        $tz_plazart_existing_mimes['ttf'] 	= 'font/ttf';
        $tz_plazart_existing_mimes['svg'] 	= 'font/svg';
        $tz_plazart_existing_mimes['eot'] 	= 'font/eot';
        $tz_plazart_existing_mimes['otf'] 	= 'font/otf';
        return $tz_plazart_existing_mimes;
    }
}
add_filter('upload_mimes', 'tz_plazart_upload_mimes');

/**
 * Show full editor
 */
if( !function_exists('tz_plazart_ilc_mce_buttons') ){
    function tz_plazart_ilc_mce_buttons($buttons){
        array_push($buttons,
            "backcolor",
            "anchor",
            "hr",
            "sub",
            "sup",
            "fontselect",
            "fontsizeselect",
            "styleselect",
            "cleanup"
        );
        return $buttons;
    }
}
add_filter("mce_buttons_2", "tz_plazart_ilc_mce_buttons");

if ( ! function_exists( 'tz_plazart_fonts_url' ) ) :
    function tz_plazart_fonts_url() {
        $tz_plazart_fonts_url = '';

        /* Translators: If there are characters in your language that are not
        * supported by Open Sans, translate this to 'off'. Do not translate
        * into your own language.
        */
        $tz_plazart_Muli = _x( 'on', 'Muli font: on or off', 'plazart-theme' );


        //    wp_enqueue_style('Droidserif', 'http://fonts.googleapis.com/css?family=Droid+Serif:400italic');

        if ('off' !== $tz_plazart_Muli) {
            $font_families = array();

            if ( 'off' !== $tz_plazart_Muli ) {
                $font_families[] = 'Muli:300,400';
            }

            $tz_plazart_query_args = array(
                'family' => urlencode( implode( '|', $font_families ) ),
                'subset' => urlencode( 'latin,latin-ext' ),
            );

            $tz_plazart_fonts_url = add_query_arg( $tz_plazart_query_args, 'https://fonts.googleapis.com/css' );
        }

        return esc_url_raw( $tz_plazart_fonts_url );
    }
endif;

/*
 * Content Nav
 */

if ( ! function_exists( 'tz_plazart_content_nav' ) ) :
    /**
     * Displays navigation to next/previous pages when applicable.
     */
    function tz_plazart_content_nav( $musika_html_id ) {
        global $wp_query;

        $musika_html_id = esc_attr( $musika_html_id );

        if ( $wp_query->max_num_pages > 1 ) : ?>
            <nav id="<?php echo esc_attr($musika_html_id); ?>" class="plazart-navigation">
                <div class="nav-previous alignleft"><?php next_posts_link( '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>' . esc_html__('Older posts', 'plazart-theme' ) ); ?></div>
                <div class="nav-next alignright"><?php previous_posts_link( esc_html__('Newer posts','plazart-theme') . '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'); ?></div>
            </nav><!-- #<?php echo esc_attr($musika_html_id); ?> .navigation -->
        <?php endif;
    }
endif;

if ( ! function_exists( 'tz_plazart_comment_nav' ) ) :
    function tz_plazart_comment_nav() {
        // Are there comments to navigate through?
        if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
            ?>
            <nav class="navigation comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'plazart-theme' ); ?></h2>
                <div class="nav-links">
                    <?php
                    if ( $prev_link = get_previous_comments_link( esc_html__( 'Older Comments', 'plazart-theme' ) ) ) :
                        printf( '<div class="nav-previous">%s</div>', $prev_link );
                    endif;

                    if ( $next_link = get_next_comments_link( esc_html__( 'Newer Comments', 'plazart-theme' ) ) ) :
                        printf( '<div class="nav-next">%s</div>', $next_link );
                    endif;
                    ?>
                </div><!-- .nav-links -->
            </nav><!-- .comment-navigation -->
            <?php
        endif;
    }
endif;

/*
* This function is used to get people to check out the article
*/
if ( ! function_exists( 'tzPlazart_getPostViews' ) ) :
    function tzPlazart_getPostViews($musika_postID){
        $musika_count_key = 'post_views_count';
        $musika_count = get_post_meta($musika_postID, $musika_count_key, true);
        if($musika_count==''){ // If such views are not
            delete_post_meta($musika_postID, $musika_count_key);
            add_post_meta($musika_postID, $musika_count_key,'0');
            return "0"; // return value of 0
        }
        return $musika_count; // Returns views
    }
endif;

/*
* This function is used to set and update the article views.
*/
if ( ! function_exists( 'tzPlazart_setPostViews' ) ) :
    function tzPlazart_setPostViews($musika_postID) {
        $musika_count_key = 'post_views_count';
        $musika_count = get_post_meta($musika_postID, $musika_count_key, true);
        if($musika_count==''){
            $musika_count = 0;
            delete_post_meta($musika_postID, $musika_count_key);
            add_post_meta($musika_postID, $musika_count_key, '0');
        }else{
            $musika_count++; // Incremental view
            update_post_meta($musika_postID, $musika_count_key, $musika_count); // update count
        }
    }
endif;

/*
 * TWITTER AMPERSAND ENTITY DECODE
 */
if( ! function_exists( 'tz_plazart_social_title' )):
    function tz_plazart_social_title( $tz_plazart_title ) {
        $tz_plazart_title = html_entity_decode( $tz_plazart_title );
        $tz_plazart_title = urlencode( $tz_plazart_title );
        return $tz_plazart_title;
    }
endif;

/****************************************************************************************************************
 * Fuction override post_class()
 * */

if ( ! function_exists( 'tz_plazart_post_classes' ) ) :
    function tz_plazart_post_classes( $classes, $class, $post_id ) {
        if( is_category() || is_tag() || is_search() || is_author() || is_archive() || is_home() ){
            $classes[] = 'tz-blog-item';
        }

        if(is_single()){
            $classes[] = 'tz-blog-single-item';
        }
        return $classes;
    }
endif;
add_filter( 'post_class', 'tz_plazart_post_classes', 10, 3 );

/**
 * Include the TGM_Plugin_Activation class.
 */
require get_template_directory() . '/plugins/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'tz_plazart_register_required_plugins' );
function tz_plazart_register_required_plugins() {

    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $tz_plazart_plugins = array(

        // This is an example of how to include a plugin pre-packaged with a theme
        array(
            'name'     				=> 'Plazart', // The plugin name
            'slug'     				=> 'plazart-theme', // The plugin slug (typically the folder name)
            'source'   				=> get_stylesheet_directory() . '/plugins/tz-plazart.zip', // The plugin source
            'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
            'version' 				=> '1.0.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'     				=> 'Vafpress Post Formats UI', // The plugin name
            'slug'     				=> 'vafpress-post-formats-ui-develop', // The plugin slug (typically the folder name)
            'source'   				=> get_stylesheet_directory() . '/plugins/vafpress-post-formats-ui-develop.zip', // The plugin source
            'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
            'version' 				=> '1.5', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
        ),

        // This is an example of how to include a plugin from the WordPress Plugin Repository
        array(
            'name'      => 'Redux Framework',
            'slug'      => 'redux-framework',
            'required'  => true,
        ),
    );

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $tz_plazart_config = array(
        'id'           => 'plazart-theme',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                          // Message to output right before the plugins table.
    );

    tgmpa( $tz_plazart_plugins, $tz_plazart_config );
}
?>