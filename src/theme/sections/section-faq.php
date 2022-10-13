<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'faq-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$items = isset($args['data']['items']) ? $args['data']['items'] : null;
$jump_link_name = isset($args['data']['jump_link_name']) ? $args['data']['jump_link_name'] : $section_id;
$margin = isset($args['data']['margin']) ? $args['data']['margin'] : 'full'; // 'full' or 'compact',
$margin_class = $margin == 'full' ? 'section-v-margin' : 'section-v-margin-compact' ;

if( $display):
?>
<section id="<?php echo $section_id?>" data-quicklink-name="<?php echo $jump_link_name?>" class="faq section-h-padding <?php echo $margin_class;?> color-brand-primary">
    <div class="layout--1080" data-aos="smooth-slide-up" data-aos-delay="200" data-aos-duration="750" data-aos-easing="cubic">
        <?php
        echo $heading ? '<h2 class="faq__heading">'.$heading.'</h2>' : '';
        if($items){
            get_template_part( 'snippets/accordion', null,
                array( 
                    'data'  => array(
                        'type' => 'faq',
                        'items' => $items,
                    )
                ) 
            );
        }
        ?>
    </div>        
</section>
<?php endif; ?>