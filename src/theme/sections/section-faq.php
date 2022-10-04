<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'faq-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$items = isset($args['data']['items']) ? $args['data']['items'] : null;
if( $display):
?>
<section id="<?php echo $section_id?>" class="faq section-h-padding section-v-margin color-brand-primary">
    <div class="section-1080" data-aos="smooth-slide-up" data-aos-delay="200" data-aos-duration="750" data-aos-easing="cubic">
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