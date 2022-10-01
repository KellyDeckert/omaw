<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'widget-'.rand();
$bg_color = isset($args['data']['color']) ? $args['data']['color'] : '';
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : '';
$content = isset($args['data']['content']) ? $args['data']['content'] : '';
$button = isset($args['data']['button']) ? $args['data']['button'] : null;

$text_color = '';
$button_color = 'button--secondary-alt';
switch($bg_color){
    case '#010F3A':
        $text_color = 'sidebar__widget--dark';
        $button_color = 'button--accent button--accent-light';
        break; 
}

?>
<div id="<?php echo $section_id?>" class="sidebar__widget <?php echo $text_color; ?>" style="<?php echo $bg_color ? 'background-color:' . $bg_color . ';' : ''?>">
    <?php 
    
    echo $heading ? '<h4 class="widget__header" data-aos="smooth-slide-up" data-aos-delay="550" data-aos-duration="450" data-aos-easing="cubic">'. $heading .'</h4>' : '';
    echo $content ? '<div class="widget__content" data-aos="smooth-slide-up" data-aos-delay="550" data-aos-duration="450" data-aos-easing="cubic">'. $content .'</div>' : '';

    echo $button ? '<a href="'.$button['url'].'" target="'.( isset($button['target']) ? $button['target'] : '_self' ).'" class="button '. $button_color .'" data-aos="smooth-slide-up" data-aos-delay="550" data-aos-duration="450" data-aos-easing="cubic">'.$button['title'].'</a>' : '';
    
    ?>
</div>