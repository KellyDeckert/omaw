<?php
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$sub_heading = isset($args['data']['sub_heading']) ? $args['data']['sub_heading'] : null;
$items = isset($args['data']['items']) ? $args['data']['items'] : null;
?>

<section class="hero color-brand-primary">
    <div class="hero__columns">
        <div class="hero__content">
            <?php
            echo $sub_heading ? '<h5 class="image-copy__sub-heading brand-primary" data-aos="smooth-slide-up" data-aos-delay="450" data-aos-duration="450" data-aos-easing="cubic">'.$sub_heading.'</h5>' : '';
            echo $heading ? '<h1 class="image-copy__heading brand-primary" data-aos="smooth-slide-up" data-aos-delay="550" data-aos-duration="500" data-aos-easing="cubic">'.$heading.'</h1>' : '';
            ?>
        </div>
        <?php if($items): ?>
        <div class="hero__image">
            <div class="hero__animated-subjects">
                <?php
                foreach( $items as $item ):
                echo '<figure class="hero__animated-subject">';
                    echo '<figcaption><strong>'.$item['title'] .'</strong>'.$item['organization'] .'</figcaption>';
                    echo $item['image'] ? '<img src="'.$item['image']['url'] .'" alt="'.$item['image']['alt'] .'">' : '';        
                echo '</figure>';
                endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>