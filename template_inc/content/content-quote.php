<?php
$tz_plazart_name = get_post_meta( $post->ID, '_format_quote_source_name', true );
$tz_plazart_link = get_post_meta( $post->ID, '_format_quote_source_url', true );
?>
<div class="tz-blog-quote">
    <div class="tz-quote-info">
        <span class="tz-quote-name"><?php echo esc_html($tz_plazart_name)?></span>
        <span>-</span>
        <a class="tz-quote-link" href="<?php echo esc_url($tz_plazart_link)?>"><?php echo esc_html($tz_plazart_link)?></a>
    </div>
    <div class="tz-quote-content">
        <?php echo '"'. get_the_content() .'"';?>
    </div>
</div>