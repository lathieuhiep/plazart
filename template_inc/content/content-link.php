<?php
$tz_plazart_link = get_post_meta( $post->ID, '_format_link_url', true );
?>
<div class="tz-blog-link">
    <h3 class="tz-blog-link-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
    <a href="<?php echo esc_url($tz_plazart_link);?>"><?php echo esc_html($tz_plazart_link);?></a>
    <div class="tz-blog-link-excerpt">
        <?php the_content();?>
    </div>
</div>