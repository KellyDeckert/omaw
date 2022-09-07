<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>

<div class="page">

    <div class="page__inner">

        <?php 
            get_template_part( 'sections/section-page-header' );
            get_template_part( 'sections/section-page-content' );
        ?>

    </div>

</div>

<?php

/* Start the Loop */
while ( have_posts() ) :
	the_post();

endwhile; // End of the loop.

get_footer();
