<?php 
$snippet = isset($args['data']['snippet']) ? $args['data']['snippet'] : null;
$section_id = isset($args['data']['section_id']) ? $args['data']['section_id'] : null;
if($snippet): ?>
<div id="<?php echo $section_id; ?>-indicators" class="two-col-indicator">
    <?php echo $snippet['heading'] ? '<h4 class="two-col-indicator__heading font-bold" data-aos="smooth-slide-up" data-aos-delay="300" data-aos-duration="750" data-aos-easing="cubic">'.$snippet['heading'].'</h4>' : '' ;?>
    <div class="two-col-indicator__cols desktop-narrow-cols">
        <div data-aos="smooth-slide-up" data-aos-delay="400" data-aos-duration="450" data-aos-easing="cubic">
            <?php 
            echo $snippet['left_sub_heading'] ? '<h6 class="two-col-indicator__sub-heading">'.$snippet['left_sub_heading'].'</h6>' : '' ;
            if( $snippet['left_items'] ){
                echo '<ul class="arrow-marker-list arrow-marker-list--up font-light">';
                foreach( $snippet['left_items'] as $key => $item ):
                    echo '<li>';
                        echo $item['text'];
                    echo '</li>';
                endforeach; 
                echo '</ul>';
            }
            ?>
        </div>
        <div data-aos="smooth-slide-up" data-aos-delay="500" data-aos-duration="450" data-aos-easing="cubic">
            <?php 
            echo $snippet['right_sub_heading'] ? '<h6 class="two-col-indicator__sub-heading">'.$snippet['right_sub_heading'].'</h6>' : '' ;
            if( $snippet['right_items'] ){
                echo '<ul class="arrow-marker-list font-light">';
                foreach( $snippet['right_items'] as $key => $item ):
                    echo '<li>';
                        echo $item['text'];
                    echo '</li>';
                endforeach; 
                echo '</ul>';
            }
            ?>
        </div>
    </div>
</div>
<?php endif; ?>