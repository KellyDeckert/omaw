<?php 
setup_postdata($post);
$date = get_the_date('M, D Y');
$author = ( get_the_author() == 'admin' ) ? 'One Mind' : get_the_author();
$permalink = get_permalink();
$image = getImageObject($post->ID);
$type = get_post_type();
$description = get_field('description');
$content = wpautop( $post->post_content );

$is_person = $type == 'speakers' || $type == 'team-members' ? true : false ;
$has_bio = $is_person && $content ? true : false ;
$bio_overlay_link_attributes = ' data-overlay-link data-overlay-type="person" data-overlay-post-type="'.$type.'" data-overlay-post-id="'.$post->ID.'"';
echo '<div class="card card--'.$type.' swiper-slide">';
    // all posts have images
    if($image){
        echo '<picture class="card__image zoom-image">';
            echo '<a href="'.$permalink.'" '.( $has_bio ? $bio_overlay_link_attributes : '').'><img src="'.$image['750x'].'" alt="'.$image['alt'].'"></a>';
        echo '</picture>';
    }
    // posts have bylines
    echo $type == 'post' ? '<p class="card__byline paragraph--xs uppercase"><strong>'.$date.' | '.$author.'</strong></p>' : '';
    // all posts have titles
    echo '<h5 class="card__title"><a href="'.$permalink.'" '.( $has_bio ? $bio_overlay_link_attributes : '').'>'.get_the_title().'</a></h5>';
    // speakers have a description
    echo $type == $is_person && $description ? '<p class="card__description paragraph--sm">'.$description.'</p>' : '';
    // posts have a read more button
    echo $type == 'post' ? '<a href="'.$permalink.'" class="card__button button button--alt">Read More</a>' : '';
    // speakers with content
    if($has_bio) {
        echo '<button class="card__icon-button" '.$bio_overlay_link_attributes.'>';
        get_template_part( 'snippets/icon-expand');
        echo '</button>';
    }
echo '</div>';
?>