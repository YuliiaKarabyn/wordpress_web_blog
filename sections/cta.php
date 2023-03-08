<?php
    $cta = $args['data'];
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 d-md-flex align-items-md-center justify-content-md-between">
            <h3 class="text-white text-md-center"><?php echo $cta['title']; ?></h3>
            <?php 
            $cta_button = $cta['button'];
            if( $cta_button ){
                $cta_button_url = $cta_button['url'];
                $cta_button_title = $cta_button['title'];
                $cta_button_target = $cta_button['target'] ? $cta_button['target'] : '_self';
                ?>
                <a class="btn btn-primary navbar-button" href="<?php echo esc_url( $cta_button_url ); ?>" target="<?php echo esc_attr( $cta_button_target ); ?>"><?php echo esc_html( $cta_button_title ); ?></a>
            <?php } ?>
        </div>
    </div>
</div>