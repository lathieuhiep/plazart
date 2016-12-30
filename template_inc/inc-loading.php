
<?php
    global $plazart_options;
    $tz_plazart_show_loading = $plazart_options['tz_general_show_loading'];
    $tz_plazart_loading_url  = $plazart_options['tz_general_image_loading']['url'];
    if( isset($tz_plazart_loading_url) && $tz_plazart_show_loading == true ):
?>
<div id="tzloadding">
    <?php

    if( isset($tz_plazart_loading_url) && !empty($tz_plazart_loading_url) ):
        $tz_plazart_loading_image_size   =   getimagesize(esc_url($tz_plazart_loading_url));


        ?>
        <img class="loading_img" src="<?php echo esc_url($tz_plazart_loading_url); ?>" alt="<?php esc_attr_e('loading...','plazart-theme') ?>" width="<?php echo esc_attr($tz_plazart_loading_image_size[0]);?>" height ="<?php echo esc_attr($tz_plazart_loading_image_size[1]); ?>">
    <?php else: ?>
        <img class="loading_img" src="<?php echo esc_url(get_template_directory_uri().'/images/loading.gif'); ?>" alt="<?php esc_attr_e('loading...','plazart-theme') ?>" width="100" height="100">

    <?php endif; ?>
</div>
    <?php endif; ?>