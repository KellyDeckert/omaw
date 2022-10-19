<?php
$section_id = isset($args['data']['id']) ? $args['data']['id'] : 'hero';
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$sub_heading = isset($args['data']['sub_heading']) ? $args['data']['sub_heading'] : null;
$content = isset($args['data']['content']) ? $args['data']['content'] : null;
$items = isset($args['data']['items']) ? $args['data']['items'] : null;
$image = isset($args['data']['image']) ? $args['data']['image'] : null;
$image_url = isset($image['sizes']) ? $image['sizes']['750x'] : null;
$border_bottom = $args['data']['border_bottom'] == true ?  true : false;

$hero_class = '';
if($image){
    $hero_class = 'hero--image';
} elseif ($items){
    $hero_class = 'hero--items';
} 
$hero_class .= $border_bottom ? ' hero--border-bottom' : '' ;

if( $display):
?>
<section id="<?php echo $section_id;?>" class="hero color-brand-primary <?php echo $hero_class;?>">
    <div class="hero__columns">
        <div class="hero__content">
            <?php
            echo $sub_heading ? '<h5 class="hero__sub-heading brand-primary" data-aos="smooth-slide-up" data-aos-delay="450" data-aos-duration="450" data-aos-easing="cubic">'.$sub_heading.'</h5>' : '';
            echo $heading ? '<h1 class="hero__heading brand-primary" data-aos="smooth-slide-up" data-aos-delay="550" data-aos-duration="500" data-aos-easing="cubic">'.$heading.'</h1>' : '';
            echo $content ? '<div class="hero__copy" data-aos="fade" data-aos-delay="650" data-aos-duration="500" data-aos-easing="cubic">'.$content.'</div>' : '';
            ?>
        </div>
        <div class="hero__image">
            <?php 
            if($image){
                echo $image ? '<img loading="lazy" src="'.$image_url.'" alt="'.$image['alt'].'" data-aos="smooth-slide-up" data-aos-delay="650" data-aos-duration="750" data-aos-easing="cubic">' : ''; 
            }   
            ?>
            <?php if($items): ?>
            <div class="hero__animated-subjects">
                <?php
                foreach( $items as $item ):
                echo '<figure class="hero__animated-subject">';
                    echo '<figcaption><strong>'.$item['title'] .'</strong>'.$item['organization'] .'</figcaption>';
                    echo $item['image'] ? '<img src="'.$item['image']['url'] .'" alt="'.$item['image']['alt'] .'">' : '';        
                echo '</figure>';
                endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>