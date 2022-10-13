<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'logos-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$items = isset($args['data']['items']) ? $args['data']['items'] : null;
$content = isset($args['data']['content']) ? $args['data']['content'] : null;
$cta = isset($args['data']['cta']) ? $args['data']['cta'] : null;
if( $display):
?>
<section id="<?php echo $section_id?>" class="logos centered section-h-padding section-v-margin color-brand-primary">
    <div class="layout--1080">
        <?php
        echo $heading ? '<h2 class="logos__heading" data-aos="smooth-slide-up" data-aos-delay="250" data-aos-duration="450" data-aos-easing="cubic">'.$heading.'</h2>' : '';
        echo $content ? '<h4 class="logos__copy" data-aos="smooth-slide-up" data-aos-delay="350" data-aos-duration="450" data-aos-easing="cubic">'.$content.'</h4>' : '';
        if($items):
        get_template_part( 'snippets/logos', null,
            array( 
                'data'  => array(
                    'section_id' => $section_id,
                    'items' => $items,
                    'items_per_row' => array(
                        'mobile' => 3, // set to 3 or 4
                        'desktop' => 5 // set to 4 or 5
                    )
                )
            ) 
        );
        endif;
        echo $cta ? '<a href="'.$cta['url'].'" target="'.( isset($cta['target']) ? $cta['target'] : '_self' ).'" class="button" data-aos="smooth-slide-up" data-aos-delay="250" data-aos-duration="450" data-aos-easing="cubic">'.$cta['title'].'</a>' : '';   
        ?>    
    </div>
</section>
<?php endif; ?>