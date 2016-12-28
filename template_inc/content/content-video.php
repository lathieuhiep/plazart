<?php $tz_plazart_video = get_post_meta( $post->ID, '_format_video_embed', true ); ?>
<?php
if($tz_plazart_video != ''):
    ?>
    <div class="tz-blog-video">
        <?php if(wp_oembed_get( $tz_plazart_video )) : ?>
            <?php echo wp_oembed_get($tz_plazart_video); ?>
        <?php else : ?>
            <?php echo balanceTags($tz_plazart_video); ?>
        <?php endif; ?>
    </div>
<?php endif;?>