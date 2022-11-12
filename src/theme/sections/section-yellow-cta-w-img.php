<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'yellow-cta-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$full_width = isset($args['data']['full_width']) ? $args['data']['full_width'] : false;
$padding = isset($args['data']['padding']) ? $args['data']['padding'] : false;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$content = isset($args['data']['content']) ? $args['data']['content'] : null;
$cta = isset($args['data']['cta']) ? $args['data']['cta'] : null;
$image = isset($args['data']['image']) ? $args['data']['image'] : null;
$image_url = $image['sizes']['750x'];
if( $image['mime_type'] == 'image/png' ){
    $image_url = $image['url'];
}
if( $padding ) {
    $padding = 'yellow-cta__banner--padded';
}
if( $display):
?>
<section id="<?php echo $section_id?>" class="yellow-cta yellow-cta-img section-h-padding color-brand-primary <?php echo $full_width ? 'yellow-cta--full-width' : '';?>">
    <div class="yellow-cta__banner <?php echo $padding; ?> layout--1080">
        <?php
        echo $image ? '<div class="yellow-cta__image" data-aos="smooth-slide-up" data-aos-delay="100" data-aos-duration="350"><img loading="lazy" src="'.$image_url.'" alt="'.$image['alt'].'"></div>' : '';
        echo '<div class="yellow-cta__content">';
            echo $heading ? '<h2 class="yellow-cta__heading font-light" data-aos="smooth-slide-up" data-aos-delay="550" data-aos-duration="450" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'">'.$heading.'</h2>' : '';
            echo $content ? '<div class="yellow-cta__copy" data-aos="fade" data-aos-delay="650" data-aos-duration="450" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'">'.$content.'</div>' : '';
            echo $cta ? '<a href="'.$cta['url'].'" target="'.( isset($cta['target']) ? $cta['target'] : '_self' ).'" class="button button--alt button--alt-dark" data-aos="fade" data-aos-delay="650" data-aos-duration="450" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'">'.$cta['title'].'</a>' : '';   
        echo '</div>';
        ?>
    </div>
</section>
<?php endif; ?>