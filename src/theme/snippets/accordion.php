<?php 
$items = isset($args['data']['items']) ? $args['data']['items'] : null;
$type = isset($args['data']['type']) ? $args['data']['type'] : 'faq';

$heading_tag = $type == 'agenda' ? 'h5' : 'h4';
if($items):
    echo '<div class="accordion accordion--'.$type.'">';
    foreach( $items as $key => $accordion_item ):
        echo '<details>';
            echo '<summary><div class="accordion--inner">';
                echo $type == 'agenda' && $accordion_item['type'] ? '<h6 class="details__subheading font-regular">'.$accordion_item['type'].'</h6>' : '';
                echo $accordion_item['heading'] ? '<'.$heading_tag.' class="details__heading">'.$accordion_item['heading'].'</'.$heading_tag.'>' : '';
                echo $type == 'agenda' && $accordion_item['description'] ? '<p class="details__description">'.$accordion_item['description'].'</p>' : '';
                if($accordion_item['content']){
                    get_template_part( 'snippets/icon-down-arrow');
                }
            echo '</div></summary>';
            if($accordion_item['content']){
                echo '<div class="details__content">';
                    echo $accordion_item['content'] ? '<div class="details__text">'.$accordion_item['content'].'</div>' : '';
                echo '</div>';
            }
        echo '</details>';
    endforeach;
    echo '</div>';
endif;