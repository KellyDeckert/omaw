<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'blue-cta-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$extend_bg_color = isset($args['data']['extend']) && $args['data']['extend'] == 1 ? 'extend--off' : 'extend--on';
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$sub_heading = isset($args['data']['sub_heading']) ? $args['data']['sub_heading'] : null;
$cta = isset($args['data']['cta']) ? $args['data']['cta'] : null;
if( $display):
?>

<section id="<?php echo $section_id?>" class="blue-cta-right <?php echo $extend_bg_color; ?>">
    <div class="blue-cta-right__banner section-1080"  data-aos="smooth-slide-left" data-aos-delay="250" data-aos-duration="400" data-aos-easing="cubic">
        <?php
        echo $heading ? '<h4 class="blue-cta-right__heading" data-aos="smooth-slide-up" data-aos-delay="450" data-aos-duration="450" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'">'.$heading.'</h4>' : '';
        echo $sub_heading ? '<h4 class="blue-cta-right__sub-heading" data-aos="smooth-slide-up" data-aos-delay="550" data-aos-duration="450" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'">'.$sub_heading.'</h4>' : '';
        echo $cta ? '<a href="'.$cta['url'].'" target="'.( isset($cta['target']) ? $cta['target'] : '_self' ).'" class="button button--accent button--accent-light" data-aos="fade" data-aos-delay="650" data-aos-duration="450" data-aos-easing="cubic" data-aos-anchor="#'.$section_id.'">'.$cta['title'].'</a>' : '';   
        ?>
    </div>
</section>
<?php endif; ?>