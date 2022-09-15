<?php
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
$heading = isset($args['data']['heading']) ? $args['data']['heading'] : null;
$content = isset($args['data']['content']) ? $args['data']['content'] : null;
$items = isset($args['data']['items']) ? $args['data']['items'] : null;
$cta = isset($args['data']['cta']) ? $args['data']['cta'] : null;
function getImageObject($id){
    $has_featured_image = has_post_thumbnail($id);
    if( $has_featured_image ){
        return array(
            'alt' => get_post_meta(get_post_thumbnail_id($id), '_wp_attachment_image_alt', true),
            'small-thumbnail' => get_the_post_thumbnail_url($id,'small-thumbnail'),
            'thumbnail' => get_the_post_thumbnail_url($id,'thumbnail'),
            'medium' => get_the_post_thumbnail_url($id,'medium'),
            'large' => get_the_post_thumbnail_url($id,'large'),
            '750x' => get_the_post_thumbnail_url($id,'750x'),
            '1440x' => get_the_post_thumbnail_url($id,'1440x'),
            '1920x' => get_the_post_thumbnail_url($id,'1920x'),
            'full' => get_the_post_thumbnail_url($id,'full'),
        );
    } else {
        return false;
    }
}

function getCardHtml($post){
    $date = get_the_date('M, D Y');
    $author = ( get_the_author() == 'admin' ) ? 'One Mind' : get_the_author();
    $title = get_the_title();
    $permalink = get_permalink();
    $image = getImageObject($post->ID);
    $html = '<div class="card swiper-slide">';
        if($image){
            $html .= '<picture class="card__image zoom-image">';
                $html .= '<a href="'.$permalink.'"><img src="'.$image['750x'].'" alt="'.$image['alt'].'"></a>';
            $html .= '</picture>';
        }
        $html .= '<p class="card__byline paragraph--xs uppercase"><strong>'.$date.' | '.$author.'</strong></p>';
        $html .= '<h5 class="card__title"><a href="'.$permalink.'">'.$title.'</a></h5>';
        $html .= '<a href="'.$permalink.'" class="card__button button button--alt">Read More</a>';
    $html .= '</div>';
    return $html;
}
if( $display):
?>
<section class="featured-posts section-v-padding section-h-padding color-brand-primary">
    <div class="section-1080">
        <?php
            echo $heading ? '<h2 class="featured-posts__heading">'.$heading.'</h2>' : '';
            echo $content ? '<div class="featured-posts__copy">'.$content.'</div>' : '';
            if($items){

                
                echo '<div class="featured-posts__cards cards desktop">';
                foreach( $items as $post ): 
                    setup_postdata($post);
                    echo getCardHtml($post);
                endforeach;
                wp_reset_postdata();
                echo '</div>';
                


                echo '<div class="featured-posts__cards swiper cards mobile"><div class="swiper-wrapper">';

                foreach( $items as $post ): 
                    setup_postdata($post);
                    echo getCardHtml($post);
                endforeach;
                wp_reset_postdata();

                echo '</div><div class="swiper-button-prev"></div><div class="swiper-button-next"></div></div>';


            }
            echo $cta ? '<a href="'.$cta['url'].'" target="'.( isset($cta['target']) ? $cta['target'] : '_self' ).'" class="featured-posts__cta button">'.$cta['title'].'</a>' : '';  
        ?>
    </div>
</section>
<?php endif; ?>