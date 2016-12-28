<div class="tz-breadcrumb">
    <div class="container">
        <h1>
            <?php
                if(is_category()){
                    single_cat_title();
                }elseif(is_author()){
                    the_author();
                }elseif(is_search()){
                    echo get_search_query();
                }elseif(is_tag()){
                    echo single_tag_title();
                }elseif(is_home()){
                    single_post_title();
                }elseif(is_404()){
                    echo  esc_html__('Error 404 - Page Not Found','plazart-theme');
                }elseif(is_archive()){
                    if ( is_day() ) :
                        printf(  esc_html__( 'Archives %s', 'plazart-theme'), '<span>' . get_the_date() . '</span>' );
                    elseif ( is_month() ) :
                        printf(  esc_html__( 'Archives %s', 'plazart-theme'), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'plazart-theme') . '</span>' ));
                    elseif ( is_year() ) :
                        printf(  esc_html__( 'Archives %s', 'plazart-theme'), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'plazart-theme') . '</span>' ));
                    else :
                        esc_html_e( 'Archives', 'plazart-theme' );
                    endif;
                }else{
                    the_title();
                }
            ?>
        </h1>

    </div><!-- end class container -->
</div><!-- end class tzbreadcrumb -->