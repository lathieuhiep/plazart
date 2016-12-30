<?php
    /*
     * Method process option
     * # option 1: config font
     * # option 2: process config theme
    */
    if(!is_admin()):

        add_action('wp_head','tz_plazart_config_theme');

        function tz_plazart_config_theme(){
            if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
                    global $plazart_options;
                    $tz_plazart_favicon = $plazart_options['tz_favicon_upload']['url'];
                    if( $tz_plazart_favicon ){
                        echo '<link rel="shortcut icon" href="' . esc_url($tz_plazart_favicon) . '" type="image/x-icon" />';
                    }
            }
        }
    endif;

    //Method add custom css

    function plazart_theme_method()
    {
        wp_enqueue_style(
            'custom-style',
            get_template_directory_uri() . '/css/custom_script.css'
        );
        global $plazart_options;
        $css = $plazart_options['tz_custom_css_code'];
        $layout = $plazart_options['tz_layout_type'];
        $sitewidth = '';
        if ($layout == 1) {
            $sitewidth = $plazart_options['tz_layout_sitewidth'];
        } else {
        $sitewidth = '100%';
        }
        $custom_css =

            "
                $css
                .container{
                    width: $sitewidth !important;
                }

            ";

        wp_add_inline_style( 'custom-style', $custom_css );
    }
add_action( 'wp_enqueue_scripts', 'plazart_theme_method' );

?>