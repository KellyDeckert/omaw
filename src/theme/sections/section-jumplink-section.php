<?php

$items_type = isset($args['data']['items_type']) ? $args['data']['items_type'] : 'jumplink-section';
$section_id = isset($args['data']['id']) ? $args['data']['id'] : $items_type.'-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$content = isset($args['data']['content']) ? $args['data']['content'] : null;
$items = isset($args['data']['items']) ? $args['data']['items'] : null;



$jump_link_display = isset($args['data']['jump_link_display']) ? $args['data']['jump_link_display'] : false;
$jump_link_name = isset($args['data']['jump_link_name']) ? $args['data']['jump_link_name'] : $section_id;
$margin = isset($args['data']['margin']) ? $args['data']['margin'] : 'full'; // 'full' or 'compact',
$margin_class = $margin == 'full' ? 'section-v-margin' : 'section-v-margin-compact' ;




if( $display):
?>
<section id="<?php echo $section_id?>" data-quicklink-on="<?php echo $jump_link_display?>" data-quicklink-name="<?php echo $jump_link_name?>" class="<?php echo $items_type;?> section-h-padding <?php echo $margin_class;?> color-brand-primary">
    <div class="layout--1080" data-aos="smooth-slide-up" data-aos-delay="200" data-aos-duration="750" data-aos-easing="cubic">
        <?php
        echo $heading ? '<h2 class="'.$items_type.'__heading">'.$heading.'</h2>' : '';
        echo $content ? '<div class="'.$items_type.'__copy">'.$content.'</div>' : '';
        if($items){
            if($items_type == 'faq'){
                get_template_part( 'snippets/accordion', null,
                    array( 
                        'data'  => array(
                            'type' => 'faq',
                            'items' => $items,
                        )
                    ) 
                );                
            }
            if($items_type == 'publications'){
                get_template_part( 'snippets/cards', null,
                    array( 
                        'data'  => array(
                            'items' => $items,
                            'layout' => 'no-image',
                        )
                    ) 
                );                
            }
        }
        ?>
    </div>        
</section>
<?php endif; ?>