<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'centered-stats-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$items = isset($args['data']['items']) ? $args['data']['items'] : null;
$content = isset($args['data']['content']) ? $args['data']['content'] : null;
$cta = isset($args['data']['cta']) ? $args['data']['cta'] : null;
if( $display):
?>
<section id="<?php echo $section_id?>" class="centered-stats centered color-brand-primary section-h-padding">
    <div class="layout--1080">
        <?php
        echo $heading ? '<h2 class="centered-stats__heading font-light" data-aos="smooth-slide-up" data-aos-delay="100" data-aos-duration="450" data-aos-easing="cubic">'.$heading.'</h2>' : '';
        get_template_part( 'snippets/centered-stats', null,
            array( 
                'data'  => array(
                    'section_id' => $section_id,
                    'items' => $items
                )
            ) 
        );
        echo $content ? '<h4 class="centered-stats__copy" data-aos="smooth-slide-up" data-aos-delay="100" data-aos-duration="450" data-aos-easing="cubic">'.$content.'</h4>' : '';
        echo $cta ? '<a href="'.$cta['url'].'" target="'.( isset($cta['target']) ? $cta['target'] : '_self' ).'" class="button button--secondary" data-aos="smooth-slide-up" data-aos-delay="100" data-aos-duration="450" data-aos-easing="cubic">'.$cta['title'].'</a>' : '';   
        ?>    
    </div>
</section>
<?php endif; ?>