<?php
//Global variable redux
global $plazart_options;
$tz_plazart_footer_col     =   $plazart_options ["tz_footer_column_col"];
$tz_plazart_footer_widthl  =   $plazart_options ["tz_footer_column_w1"];
$tz_plazart_footer_width2  =   $plazart_options ["tz_footer_column_w2"];
$tz_plazart_footer_width3  =   $plazart_options ["tz_footer_column_w3"];
$tz_plazart_footer_width4  =   $plazart_options ["tz_footer_column_w4"];
$tz_plazart_copyright      =   $plazart_options ["tz_footer_copyright_editor"];
?>

    <footer class="tz-footer">
        <div class="tz-footer-top">
            <div class="container">
                <div class="row">
                    <?php
                    for( $tz_plazart_i=0; $tz_plazart_i < $tz_plazart_footer_col; $tz_plazart_i++ ):
                        $tz_plazart_j = $tz_plazart_i +1;
                        if($tz_plazart_i==0){
                            $tz_plazart_col = $tz_plazart_footer_widthl;
                        }elseif($tz_plazart_i==1){
                            $tz_plazart_col = $tz_plazart_footer_width2;
                        }elseif($tz_plazart_i==2){
                            $tz_plazart_col = $tz_plazart_footer_width3;
                        }elseif($tz_plazart_i==3){
                            $tz_plazart_col = $tz_plazart_footer_width4;
                        }

                        ?>
                        <div class="col-md-<?php echo esc_attr($tz_plazart_col); ?> footerattr">
                            <?php
                            if(is_active_sidebar("tz-plazart-footer-".$tz_plazart_j) ):
                                dynamic_sidebar("tz-plazart-footer-".$tz_plazart_j);
                            endif;
                            ?>
                        </div><!--end class footermenu-->
                        <?php
                    endfor;
                    ?>
                </div>
            </div>
        </div>
        <div class="tz-footer-bottom">
            <div class="container">
                <div class="tz-copyright pull-left"><?php echo balanceTags($tz_plazart_copyright); ?></div>
                <div class="tz-footer-menu pull-right">
                    <nav>
                        <?php
                        if ( has_nav_menu('footer-menu') ) :
                            wp_nav_menu(array(
                                'theme_location'    => 'footer-menu',
                                'menu_class'        => 'menu-footer',
                                'container'         =>  false,
                            ));
                        endif;
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>
