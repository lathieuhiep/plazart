<?php
    $tz_plazart_audio = get_post_meta( $post->ID, '_format_audio_embed', true );
    if($tz_plazart_audio != ''):
        ?>
        <div class="tz-blog-audio">
            <?php if(wp_oembed_get( $tz_plazart_audio )) : ?>
                <?php echo wp_oembed_get($tz_plazart_audio); ?>
            <?php else : ?>
                <?php echo balanceTags($tz_plazart_audio); ?>
            <?php endif; ?>
        </div>
<?php endif;?>