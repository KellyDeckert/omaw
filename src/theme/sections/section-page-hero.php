<?php
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$sub_heading = isset($args['data']['sub_heading']) ? $args['data']['sub_heading'] : null;
$items = isset($args['data']['items']) ? $args['data']['items'] : null;
?>

<section class="hero color-brand-primary">
    <div class="hero__columns">
        <div class="hero__content">
            <?php
            echo $sub_heading ? '<h5 class="image-copy__sub-heading brand-primary">'.$sub_heading.'</h5>' : '';
            echo $heading ? '<h1 class="image-copy__heading brand-primary">'.$heading.'</h1>' : '';
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