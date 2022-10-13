<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'agenda-'.rand();
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$content = isset($args['data']['content']) ? $args['data']['content'] : null;
$items = isset($args['data']['items']) ? $args['data']['items'] : null;
if( $display):
?>
<section id="<?php echo $section_id?>" class="agenda centered section-h-padding section-v-margin color-brand-primary">
    <div class="layout--1080" data-aos="smooth-slide-up" data-aos-delay="200" data-aos-duration="750" data-aos-easing="cubic">
        <?php
        if($heading || $content){
            echo '<div class="layout--860">';
                echo $heading ? '<h2 class="agenda__heading">'.$heading.'</h2>' : '';
                echo $content ? '<h4 class="agenda__copy font-light">'.$content.'</h4>' : '';
            echo '</div>';
        }
        if($items){
            echo '<div id="'.$section_id.'-tabs" class="agenda__days tabs" data-index="0" data-max-index="'.(count($items)-1).'">';
                foreach( $items as $key => $item ):
                    echo '<div class="agenda__day tabs__tab'.($key == 0 ? ' tabs__tab--active' : '').'">';
                        echo '<h4 class="agenda__day-heading font-light">Day '.($key + 1).( $item['date'] ? ' | '.$item['date'] : '' ).'</h4>';
                        get_template_part( 'snippets/accordion', null,
                            array( 
                                'data'  => array(
                                    'type' => 'agenda',
                                    'items' => $item['items'],
                                )
                            ) 
                        );
                    echo '</div>';
                endforeach;
                echo '<div class="tabs__nav">';
                    echo '<button class="tabs__nav-prev-button disabled" data-tabs="'.$section_id.'-tabs" data-index="prev">';
                    get_template_part( 'snippets/icon-left-arrow');
                    echo '</button>';
                    foreach( $items as $key => $item ):
                        echo '<button class="tabs__nav-tab-button'.($key == 0 ? ' tabs__nav-tab-button--active' : '').'" data-tabs="'.$section_id.'-tabs" data-index="'.$key.'">Day '.($key + 1).'</button>';
                    endforeach;
                    echo '<button class="tabs__nav-next-button" data-tabs="'.$section_id.'-tabs" data-index="next">';
                    get_template_part( 'snippets/icon-left-arrow');
                    echo '</button>';
                echo '</div>';            
            echo '</div>';

        }
        ?>
    </div>        
</section>
<?php endif; ?>