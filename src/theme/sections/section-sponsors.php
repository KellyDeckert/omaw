<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'sponsors-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$items = isset($args['data']['items']) ? $args['data']['items'] : null;
if( $display):
?>
<section id="<?php echo $section_id?>" class="sponsors section-h-padding section-v-margin color-brand-primary">
    <div class="layout--1080" data-aos="smooth-slide-up" data-aos-delay="200" data-aos-duration="750" data-aos-easing="cubic">
        <?php
        echo $heading ? '<h2 class="sponsors__heading">'.$heading.'</h2>' : '';
        if($items){
            get_template_part( 'snippets/sponsors', null,
                array( 
                    'data'  => array(
                        'section_id' => $section_id,
                        'items' => $items,
                    )
                ) 
            );
        }
        ?>
    </div>        
</section>
<?php endif; ?>