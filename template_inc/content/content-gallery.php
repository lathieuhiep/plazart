<?php
$tz_plazart_gallery = get_post_meta( $post->ID, '_format_gallery_images', true );
if($tz_plazart_gallery) :
    ?>
    <div class="tz-blog-slides">
        <ul class="slides">
            <?php foreach($tz_plazart_gallery as $tz_plazart_image) : ?>

                <?php $tz_plazart_image_src = wp_get_attachment_image_src( $tz_plazart_image, 'full-thumb' ); ?>
                <?php $tz_plazart_caption = get_post_field('post_excerpt', $tz_plazart_image); ?>
                <li><img src="<?php echo esc_url($tz_plazart_image_src[0]); ?>" <?php if($tz_plazart_caption) : ?>title="<?php echo esc_attr($tz_plazart_caption); ?>"<?php endif; ?> alt="<?php echo sanitize_title(get_the_title())?>"/></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>