<?php /* Template Name: Become a Member */
get_header();

$heading = get_field('become-member-heading');
$sub_heading = get_field('become-member-subheading');
$content = get_field('become-member-page-content');
$gf = get_field('become-member-form');
$logo_copy = get_field('become-member-logo-heading');
$logos = get_field('member_logos');

?>

<div class="new-member responsive-font-size">
    <?php //get_template_part( 'sections/section','illustration-decoration' , null);
    get_template_part( 'sections/section','header-illustration' , null,); ?>
    <div class="new-member__inner section-h-padding">
        <div class="main layout--1080">
        <?php
        echo $heading || $sub_heading || $content ? '<div class="new-member__content new-member__grid">' : '';

        echo $heading ? '<h1 class="new-member__title page__title" data-aos="smooth-slide-up" data-aos-delay="550" data-aos-duration="450" data-aos-easing="cubic">' . $heading . '</h1>' : '';

        echo $sub_heading ? '<h4 class="new-member__subtitle page__subtitle" data-aos="smooth-slide-up" data-aos-delay="550" data-aos-duration="450" data-aos-easing="cubic">' . $sub_heading . '</h4>' : '';

        echo $content ? '<div class="new-member__content" data-aos="smooth-slide-up" data-aos-delay="550" data-aos-duration="450" data-aos-easing="cubic">'. $content .'</div>' : '';

        echo $heading || $sub_heading || $content ? '</div>' : '';

        if($logos):
            echo '<div class="new-member__logos">';

                echo $logo_copy ? '<div class="logos__copy" data-aos="smooth-slide-up" data-aos-delay="550" data-aos-duration="450" data-aos-easing="cubic">'.$logo_copy.'</div>' : '';

                    get_template_part( 'snippets/logos', null,
                        array(
                            'data'  => array(
                                'section_id' => 'new-member-logos',
                                'items' => $logos,
                                'items_per_row' => array(
                                    'mobile' => 4, // set to 3 or 4
                                    'desktop' => 4 // set to 4 or 5
                                )
                            )
                        )
                    );

            echo '</div>';
        endif; ?>

        <?php
        if($gf):
        echo '<div class="new-member__form new-member__grid" data-aos="smooth-slide-left" data-aos-delay="550" data-aos-duration="450" data-aos-easing="cubic">';
            echo do_shortcode($gf);
        echo '</div>';
        endif;
        ?>
        </div>
    </div>
    <div class="new-member__prefooter">
        <?php
        get_template_part( 'sections/section', 'image-copy',
            array(
                'data'  => array(
                    'id' => 'cta-info',
                    'display' => get_field('cta-info_display'),
                    'vertical_alignment' => get_field('cta-info_vertical_alignment'),
                    'image_alignment' => get_field('cta-info_image_alignment'),
                    'image_mobile_pos' => get_field('cta-info_image_mobile_pos'),
                    'spacing_class' => get_field('cta-info_spacing'),
                    'image' => get_field('cta-info_image'),
                    'image_tile' => get_field('cta-info_image_tile'),
                    'heading_tag' => 'h4',
                    'heading' => get_field('cta-info_heading'),
                    'sub_heading_tag' => 'h4',
                    'sub_heading' => get_field('cta-info_sub_heading'),
                    'content' => get_field('cta-info_content'),
                    'cta' => get_field('cta-info_cta_link'),
                    'bg_color' => get_field('cta-info_bg-color'),
                )
            )
        );
        ?>
    </div>
</div>

<?php get_footer(); ?>