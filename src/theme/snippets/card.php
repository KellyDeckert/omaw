<?php 
$layout = isset($args['data']['layout']) ? $args['data']['layout'] : null;
$swiper_slide = isset($args['data']['swiper_slide']) ? $args['data']['swiper_slide'] : false;
setup_postdata($post);
$date = get_the_date('M, D Y');
$author = getRelationShipAuthor(get_field('authors'));
$permalink = get_permalink();
$image = getImageObject($post->ID);
$type = get_post_type();
$title = get_field('title');
$description = get_field('description');
$content = wpautop( $post->post_content );

$is_post =  $type == 'post' ? true : false ;
$is_person = $type == 'speakers' || $type == 'team-members' ? true : false ;
$has_overlay = $is_person && $content ? true : false ;
$bio_overlay_link_attributes = ' data-overlay-link data-overlay-type="person" data-overlay-post-type="'.$type.'" data-overlay-post-id="'.$post->ID.'"';


$has_link = $has_overlay || $is_post ? true : false ;
$link_content = $has_overlay ? 'data-overlay="'.$has_overlay.'" '.$bio_overlay_link_attributes : ' href="'.$permalink.'"' ;
$card_tag = $is_post ? 'a' : 'div';

echo '<'.$card_tag.' class="card'.($layout ? ' card--'.$layout : '').' card--'.$type.' '.( $swiper_slide ? 'swiper-slide' : '').'" '.$link_content.'>';
    // all posts have images
    if($image){
        echo '<picture class="card__image'.( $has_link ? ' zoom-image' : '').'">';
            echo '<img src="'.$image['750x'].'" alt="'.$image['alt'].'">';
        echo '</picture>';
    }
    // posts have bylines
    echo $is_post ? '<p class="card__byline paragraph--xs uppercase"><strong>'.$date.(isset($author['name']) ? ' | '.$author['name'] : '' ).'</strong></p>' : '';
    // all posts have titles
    echo '<h5 class="card__name">';
        echo get_the_title();
    echo '</h5>';
    // speakers and team members have a title
    echo $type == $is_person && $title ? '<p class="card__title paragraph--sm">'.$title.'</p>' : '';
    // team members have a description
    echo $type == 'team-members' && $description ? '<p class="card__description">'.$description.'</p>' : '';


    // posts have a read more button
    echo $is_post ? '<span class="card__button button button--alt">Read More</span>' : '';
    // speakers with content
    if($has_overlay) {
        // echo '<button class="card__icon-button" '.$bio_overlay_link_attributes.'>';
        echo '<button class="card__icon-button">';
        get_template_part( 'snippets/icon-expand');
        echo '</button>';
    }
echo '</'.$card_tag.'>';
?>