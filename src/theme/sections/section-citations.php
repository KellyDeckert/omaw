<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'citations-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$content = isset($args['data']['content']) ? $args['data']['content'] : null;
if( $display):
?>
<section id="<?php echo $section_id?>" class="citations section-h-padding section-v-margin color-brand-primary">
    <div class="citations__inner layout--1080" data-aos="fade" data-aos-delay="200" data-aos-duration="750" data-aos-easing="cubic">
        <div class="layout--860" data-aos="smooth-slide-up" data-aos-delay="400" data-aos-duration="750" data-aos-easing="cubic">
            <?php
            echo $heading ? '<h6 class="citations__heading">'.$heading.'</h6>' : '';
            echo $content ? '<div class="citations__copy paragraph--xs">'.$content.'</div>' : '';
            ?>
        </div>        
    </div>
</section>
<?php endif; ?>