<?php
global $plazartoptions;
$$tz_plazart_single_title = $plazartoptions['tz_blog_single_title'];
$$tz_plazart_single_title = $plazartoptions['tz_blog_single_title'];
$tz_plazart_post_type = get_post_type( $post -> ID );
$tz_plazart_comment_count  = wp_count_comments($post->ID);
$tz_plazart_view = tzPlazart_getPostViews($post->ID);
?>
<div class="tz-blog-content">
    <h3 class="tz-blog-title">
        <?php
        if(is_single()){
            ?>
            <?php the_title();?>
            <?php
        }else{
            ?>
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
            <?php
        }
        ?>
    </h3>

    <div class="tz-blog-meta">
        <span>
            <?php echo esc_html__('Author:','plazart-theme');?>
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a>
        </span>
        <?php $tz_plazart_year = get_the_time( 'Y' );
        $tz_plazart_month = get_the_time( 'm' );
        $tz_plazart_day = get_the_time( 'd' ); ?>
        <span>
            <a href="<?php echo esc_url(get_day_link( $tz_plazart_year, $tz_plazart_month, $tz_plazart_day )) ?>"><?php echo get_the_date(); ?></a>
        </span>

        <span><?php echo esc_html__('Comments:','plazart-theme') . esc_html($tz_plazart_comment_count ->total_comments);?></span>

        <span><?php echo esc_html__('Views: ','plazart-theme') . esc_html($tz_plazart_view);?></span>

        <?php
        if(get_the_category() !=false):
            ?>
            <span class="tz-blog-category">
                <?php
                esc_html_e('Category: ','plazart-theme');
                the_category(', ');
                ?>
            </span>
        <?php endif; ?>
        <?php
        if(get_the_tags() != false):
            ?>
            <span class="tz-blog-tag">
                <?php
                esc_html_e('Tag: ','plazart-theme');
                the_tags('',', ');
                ?>
            </span>
        <?php endif; ?>
    </div>

    <?php
    if( is_single()){
        ?>
        <div class="tz-blog-excerpt">
            <?php
                the_content();
                wp_link_pages();
            ?>
        </div>

        <div class="tz-blog-share">
            <span><?php  esc_html_e('Share this post:', 'plazart-theme') ; ?></span>
            <!-- Facebook Button -->
            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a>
            <a target="_blank" href="https://twitter.com/home?status=Check%20out%20this%20article:%20<?php print tz_plazart_social_title( get_the_title() ); ?>%20-%20<?php echo urlencode(the_permalink()); ?>"><i class="fa fa-twitter"></i></a>
            <?php $tz_plazart_pin_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
            <a data-pin-do="skipLink" target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo esc_attr($tz_plazart_pin_image); ?>&description=<?php the_title(); ?>"><i class="fa fa-pinterest"></i></a>
            <a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i></a>
        </div>
        <?php
    }else{
        if($tz_plazart_post_type != 'page'){
            ?>
            <div class="tz-blog-excerpt">
                <?php
                if( ! has_excerpt()):
                    the_content();
                    wp_link_pages();
                else:
                    the_excerpt();
                    ?>
                    <a href="<?php the_permalink();?>" class="tzreadmore"><?php echo esc_html__('Read more','plazart-theme');?></a>
                    <?php
                endif;
                ?>
            </div>
            <?php
        }
    }
    ?>
</div>