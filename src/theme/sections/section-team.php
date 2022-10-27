<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'leadership-team-'.rand();

$jump_menu = isset($args['data']['jump_menu']) ? $args['data']['jump_menu'] : '';
$section_menu_on = isset($jump_menu['menu-display']) ? $jump_menu['menu-display'] : '';
$section_name = isset($jump_menu['menu-name']) ? $jump_menu['menu-name'] : '';

$display = isset($args['data']['display']) ? $args['data']['display'] : true;

$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$content = isset($args['data']['content']) ? $args['data']['content'] : null;
$members = isset($args['data']['members']) ? $args['data']['members'] : null;

if($display):
?>

<section id="<?php echo $section_id?>" class="leadership-team section-v-padding section-h-padding color-brand-primary"
    data-quicklink-on="<?php echo $section_menu_on; ?>" data-quicklink-name="<?php echo $section_name; ?>">
    <div class="layout--1080">
        <?php
            echo $heading ? '<h2 class="leadership-team__heading" data-aos="smooth-slide-up" data-aos-delay="250" data-aos-duration="450" data-aos-easing="cubic">'.$heading.'</h2>' : '';
            echo $content ? '<div class="leadership-team__copy" data-aos="smooth-slide-up" data-aos-delay="350" data-aos-duration="450" data-aos-easing="cubic">'.$content.'</div>' : '';
            if($members){
            echo '<div class="leadership-team__wrapper">';

                echo '<div class="leadership-team__cards cards" data-aos="smooth-slide-up" data-aos-delay="450" data-aos-duration="600" data-aos-easing="cubic">';
                foreach( $members as $post ): 
                    get_template_part('snippets/card',null,array(
                        'data' => array(
                            'layout' => 'image-left'
                        )
                    ));
                endforeach;
                wp_reset_postdata();
                echo '</div></div>';
            }
        ?>
    </div>
</section>

<?php endif; ?>