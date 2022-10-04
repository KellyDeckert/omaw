<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'yellow-cta-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$full_width = isset($args['data']['full_width']) ? $args['data']['full_width'] : false;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$sub_heading = isset($args['data']['sub_heading']) ? $args['data']['sub_heading'] : null;
$content = isset($args['data']['content']) ? $args['data']['content'] : null;
$cta = isset($args['data']['cta']) ? $args['data']['cta'] : null;
if( $display):
?>
<section id="<?php echo $section_id?>" class="yellow-cta section-h-padding color-brand-primary <?php echo $full_width ? 'yellow-cta--full-width' : '';?>"
<?php echo $full_width ? '' : 'data-aos="smooth-slide-up" data-aos-delay="350" data-aos-duration="450" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'"';?>
>
    <div class="yellow-cta__banner section-1080">
        <?php
        echo '<div class="yellow-cta__content">';
            echo $sub_heading ? '<h5 class="yellow-cta__sub-heading" data-aos="smooth-slide-up" data-aos-delay="450" data-aos-duration="450" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'">'.$sub_heading.'</h5>' : '';
            echo $heading ? '<h2 class="yellow-cta__heading font-light" data-aos="smooth-slide-up" data-aos-delay="550" data-aos-duration="450" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'">'.$heading.'</h2>' : '';
            echo $content ? '<div class="yellow-cta__copy" data-aos="fade" data-aos-delay="650" data-aos-duration="450" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'">'.$content.'</div>' : '';
        echo '</div>';
        echo $cta ? '<a href="'.$cta['url'].'" target="'.( isset($cta['target']) ? $cta['target'] : '_self' ).'" class="button button--secondary button--accent-light" data-aos="fade" data-aos-delay="650" data-aos-duration="450" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'">'.$cta['title'].'</a>' : '';   
        ?>
    </div>
</section>
<?php endif; ?>