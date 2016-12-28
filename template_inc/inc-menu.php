
<?php
    global $plazart_options;
    $tz_plazart_logotype   =   $plazart_options['tz_type_logo'];
    $tz_plazart_text       =   $plazart_options['tz_logo_name'];
    $tz_plazart_img_url    =   $plazart_options['tz_logo_images'];
?>
<header class="tz-header">
        <div class="container">
            <button class="navbar-toggle collapsed tz_icon_menu" type="button" data-target="#tz-navbar-collapse" data-toggle="collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="pull-left tz_logo" href="<?php echo esc_url(get_home_url('/')); ?>" title="<?php bloginfo('name'); ?>">
                <?php

                if($tz_plazart_logotype == 'logo_text'){
                    echo ('<span class="tz-logo-text">'.esc_html($tz_plazart_text).'</span>');
                }else{
                    if ( isset($tz_plazart_img_url) && !empty( $tz_plazart_img_url ) ) :
                        echo'<img src="'.esc_url($tz_plazart_img_url["url"]).'" alt="'.get_bloginfo('title').'" />';
                    else :
                        echo'<img src="'.esc_url(get_template_directory_uri()).'/images/logo.png" alt="'.get_bloginfo('title').'" width="217" height="38" />';
                    endif;
                }
                ?>
            </a>
            <nav class="nav-collapse pull-right">
                    <?php

                    if ( has_nav_menu('primary') ) :
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'menu_class'     => 'nav navbar-nav collapse navbar-collapse tz-nav',
                            'menu_id'        => 'tz-navbar-collapse',
                            'container'      => false,
                        ) ) ;
                    endif;

                    ?>
            </nav>
        </div><!--end class container-->
</header>