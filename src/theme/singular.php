<?php
get_header();

// get author
$author = getRelationShipAuthor(get_field('authors'));

// get featured image sizes and alt
$hide_featured_image = get_field('hide_featured_image');
if(!$hide_featured_image){
    $has_featured_image = has_post_thumbnail($id);
    $image = array(
        'alt' => get_post_meta(get_post_thumbnail_id($id), '_wp_attachment_image_alt', true),
        '750x' => get_the_post_thumbnail_url($id,'750x'),
        '1440x' => get_the_post_thumbnail_url($id,'1440x'),
    );
}

/* Start the Loop */
while ( have_posts() ) :the_post();

    // get all categories
    $categories = get_the_category();
    // init category variables
    $post_category = 'Posts';
    // find first category and stop loop
    foreach( $categories as $category ){
        $post_category = $category;
        // $post_category->url = get_bloginfo('url').'/'.$post_category->slug.'/';
        break;
    }   
    ?>

    <div class="post responsive-font-size" itemscope itemtype="https://schema.org/NewsArticle">

        <section id="hero" class="post__hero section-h-padding">
            <div class="layout--1080">
                <?php
                if($image){
                    echo '<div class="post-hero__image" data-aos="smooth-slide-up" data-aos-delay="450" data-aos-duration="650" data-aos-easing="cubic">';
                        echo '<picture class="bg-image">';
                            echo '<source media="(min-width: 750px)" srcset="'.$image['1440x'].'">';
                            echo '<img loading="lazy" class="single-post__featured-image absolute-full" class="mission__item-image" src="'.$image['750x'].'" alt="'.$image['alt'].'">';
                        echo '</picture>'; 
                    echo '</div>';           
                }
                ?>
                <div class="post-hero__content">
                <?php
                echo '<h5 class="post-hero__byline uppercase" data-aos="smooth-slide-up" data-aos-delay="250" data-aos-duration="450" data-aos-easing="cubic">';
                    echo '<span itemprop="datePublished">'.get_the_date('F j, Y').'</span>';
                    echo isset($author['name']) ? ' | <span itemprop="author">'.$author['name'].'</span>' : '';
                echo '</h5>';
                echo '<h2 class="post-hero__title font-regular" itemprop="name" data-aos="smooth-slide-up" data-aos-delay="350" data-aos-duration="500" data-aos-easing="cubic">'.get_the_title().'</h2>';
                ?>                
                </div>
            </div>
        </section>

        <div class="post__main section-h-padding" data-aos="fade" data-aos-delay="700" data-aos-duration="750" data-aos-easing="cubic" data-aos-anchor="#hero">
            <div class="layout--1080">
                <div class="post__share">
                    <h6>Share!</h6>
                    <?php 
                    get_template_part( 'sections/section-social-links' , null,
                        array( 
                            'data'  => array(
                                'type' => 'post'
                            )
                        ) 
                    ); 
                    ?>
                </div>
                <div class="post__content layout--860">
                    <?php 
                    get_template_part('snippets/post','video');
                    the_content();
                    ?>
                </div>
            </div>
        </div>

        <?php
        if( $post_category->slug != 'publications' ):
            $the_latest = new WP_Query( array(
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'post__not_in' => array($post->ID),
                'category__not_in' => array(get_cat_ID('publications'))
            ));
            wp_reset_postdata();
            get_template_part( 'sections/section-featured-cards', null,
                array( 
                    'data'  => array(
                        'id' => 'the-latest',
                        'display' => true,
                        'heading' => 'The Latest',
                        'items' => $the_latest->posts,
                        'cta' => array(
                            "url" => "/resources/blog-news/",
                            "title" => "See More"
                        )
                    )
                ) 
            );
        endif;
        ?>

    </div>

<?php
endwhile; // End of the loop.

get_footer();
