<?php /* Template Name: Contact */ 

get_header();

$alt_heading = get_field('contact-heading');
$sub_heading = get_field('contact-subheading');
$gf = get_field('contact-form');

?>

<div class="contact responsive-font-size">
    <div class="contact__inner main layout--1080">
        <div class="contact__col form">
            <?php 
            
            the_title( '<h1 class="page__title" data-aos="smooth-slide-up" data-aos-delay="550" data-aos-duration="450" data-aos-easing="cubic">', '</h1>' );

            if($sub_heading):
                echo '<h3 class="page__subtitle" data-aos="smooth-slide-up" data-aos-delay="550" data-aos-duration="450" data-aos-easing="cubic">' . $sub_heading . '</h3>';
            endif;

            // if($gf):
                echo '<div class="contact__form">';
                    echo do_shortcode($gf);
                echo '</div>';
            // endif;
            ?>
        </div>
        <div class="contact__col sidebar">
            <div class="sidebar--gutter"></div>
            <div class="sidebar__widgets">
                <?php

                // Check rows existexists.
                if( have_rows('contact-page__widgets') ):

                    // Loop through rows.
                    while( have_rows('contact-page__widgets') ) : the_row();

                        $bg_color = get_sub_field('contact-sidebar-bg-color');
                        $heading = get_sub_field('contact-sidebar-heading');
                        $content = get_sub_field('contact-sidebar-content');
                        $button = get_sub_field('contact-sidebar-button');

                        get_template_part( 'sections/section', 'widget-cta',
                            array( 
                                'data'  => array(
                                    'id' => 'widget-' . get_row_index(),
                                    'color' => $bg_color,
                                    'heading' => $heading,
                                    'content' => $content,
                                    'button' => $button
                                )
                            ) 
                        );

                    // End loop.
                    endwhile;

                endif;

                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>