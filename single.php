<?php
global $plazart_options;
$tz_plazarttheme_single_sidebar    =   $plazart_options['tz_blog_single_sidebar'];
var_dump($tz_plazarttheme_single_sidebar);
get_header();
get_template_part('template_inc/inc','menu');
get_template_part('template_inc/inc','breadcrumb');
?>
<div class="tz-blog-single">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php
                if ( have_posts() ) : while (have_posts()) : the_post() ;
                    tzPlazart_setPostViews(get_the_ID());
                    $tz_plazart_comment_count  = wp_count_comments($post->ID);
                    $tz_plazart_view = tzPlazart_getPostViews($post->ID);
                    ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
                    <div class="author">
                        <div class="author-avata">
                            <?php echo get_avatar( get_the_author_meta('ID'),159); ?>
                        </div>
                        <div class="author-info">
                            <h3><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>"><?php the_author();?></a></h3>
                            <p><?php the_author_meta('description'); ?></p>
                        </div>
                    </div>

                    <div class="tzComments">
                        <?php comments_template( '', true ); ?>
                    </div><!-- end comments -->
                    <?php
                endwhile; // end while ( have_posts )
                endif; // end if ( have_posts )
                ?>
            </div>
            <?php if($tz_plazarttheme_single_sidebar == 3 || $tz_plazarttheme_single_sidebar == 4):  ?>
            <?php get_sidebar(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>

