<?php
get_header();
get_template_part('template_inc/inc','menu');
global $plazart_options;
$breadcrumbs = $plazart_options['tz_breadcrumbs_search'];
if($breadcrumbs == true){
    get_template_part('template_inc/inc','breadcrumb');
}
?>
<div class="tz-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php
                if ( have_posts() ) : while (have_posts()) : the_post();
                    $tz_plazart_comment_count  = wp_count_comments($post->ID);
                    $tz_plazart_view = tzPlazart_getPostViews($post->ID);
                    ?>
                    <div id='post-<?php the_ID(); ?>' <?php post_class(); ?>>
                        <?php
                        if(has_post_format('gallery')):
                            get_template_part( 'template_inc/content/content','gallery' );
                            get_template_part( 'template_inc/content/content','info' );
                        elseif(has_post_format('audio')):
                            get_template_part( 'template_inc/content/content','audio' );
                            get_template_part( 'template_inc/content/content','info' );
                        elseif(has_post_format('video')):
                            get_template_part( 'template_inc/content/content','video' );
                            get_template_part( 'template_inc/content/content','info' );
                        elseif(has_post_format('quote')):
                            get_template_part( 'template_inc/content/content','quote' );
                        elseif(has_post_format('link')):
                            get_template_part( 'template_inc/content/content','link' );
                        else:
                            get_template_part( 'template_inc/content/content','image' );
                            get_template_part( 'template_inc/content/content','info' );
                        endif;
                        ?>
                    </div>
                    <?php
                endwhile; // end while ( have_posts )
                else: ?>
                    <div class="tz-serach-notda">
                        <h3><?php  esc_html_e('No Data', 'plazart-theme');?></h3>

                        <div class="page-content">

                            <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

                                <p><?php printf(  esc_html__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'plazart-theme' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

                            <?php elseif ( is_search() ) : ?>

                                <p><?php  esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'plazart-theme' ); ?></p>
                                <?php get_search_form(); ?>

                            <?php else : ?>

                                <p><?php  esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'plazart-theme' ); ?></p>
                                <?php get_search_form(); ?>

                            <?php endif; ?>

                        </div><!-- .page-content -->
                    </div>
                    <?php
                endif; // end if ( have_posts )
                ?>

                <?php
                tz_plazart_content_nav('bottom-nav');
                ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>

