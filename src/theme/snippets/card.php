<?php 
$layout = isset($args['data']['layout']) ? $args['data']['layout'] : null;
setup_postdata($post);
$date = get_the_date('M, D Y');
$author = ( get_the_author() == 'admin' ) ? 'One Mind' : get_the_author();
$permalink = get_permalink();
$image = getImageObject($post->ID);
$type = get_post_type();
$title = get_field('title');
$description = get_field('description');
$content = wpautop( $post->post_content );

$is_person = $type == 'speakers' || $type == 'team-members' ? true : false ;
$has_bio = $is_person && $content ? true : false ;
$bio_overlay_link_attributes = ' data-overlay-link data-overlay-type="person" data-overlay-post-type="'.$type.'" data-overlay-post-id="'.$post->ID.'"';
$has_link = $has_bio;
$link_content = $has_bio ? ' href="#" '.$bio_overlay_link_attributes : ' href="'.$permalink.'"' ;

echo '<div class="card'.($layout ? ' card--'.$layout : '').' card--'.$type.' swiper-slide">';
    // all posts have images
    if($image){
        echo '<picture class="card__image'.( $has_link ? ' zoom-image' : '').'">';
            echo $has_link ? '<a '.$link_content.'>' : '' ;
            echo '<img src="'.$image['750x'].'" alt="'.$image['alt'].'">';
            echo $has_link ? '</a>' : '';
        echo '</picture>';
    }
    // posts have bylines
    echo $type == 'post' ? '<p class="card__byline paragraph--xs uppercase"><strong>'.$date.'</strong></p>' : '';
    // all posts have titles
    echo '<h5 class="card__name">';
        echo $has_link ? '<a '.$link_content.'>' : '' ;
            echo get_the_title();
        echo $has_link ? '</a>' : '';
    echo '</h5>';
    // speakers and team members have a title
    echo $type == $is_person && $title ? '<p class="card__title paragraph--sm">'.$title.'</p>' : '';
    // team members have a description
    echo $type == 'team-members' && $description ? '<p class="card__description">'.$title.'</p>' : '';


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