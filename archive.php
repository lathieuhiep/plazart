<?php
get_header();
get_template_part('template_inc/inc','menu');
get_template_part('template_inc/inc','breadcrumb');
?>
<div class="tz-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php
                if ( have_posts() ) : while (have_posts()) : the_post();
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

