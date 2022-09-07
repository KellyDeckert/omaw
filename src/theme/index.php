<?php get_header(); ?>

    <div class="page page__blog">
        <div class="layout--1080">
        
            <?php get_template_part( 'sections/section-page-header' ); ?>

            <!-- featured blog post -->

            <div class="blog__filters">
                <div class="blog__results">
                    <?php
                        $count_posts = wp_count_posts();
                        if ( $count_posts ) {
                            $published_posts = $count_posts->publish;
                            echo $published_posts . ' Results';
                        }
                    ?>
                </div>

                <div class="blog__sort sort_by_filter">
                    <form method="GET" id="blog__sort_by" class="sort_by_filter__form">
                        <label class="sort_by_filter__label" for="orderby">Sort&nbsp;By:</label>
                        <select name="orderby" id="orderby" class="sort_by_filter__select select-inline">
                            <option value="date">Newest to Oldest</option>
                            <option value="title">Alphabetical</option>
                        </select>
                        <!-- <button type="submit">Apply</button> -->
                    </form>
                </div>

                <!-- <div class="blog__type"></div> -->
            </div>

            <div class="blog__posts">
                <?php
                /* Start the Loop */
                while ( have_posts() ) :

                    the_post();
                    get_template_part( 'sections/section-post-card' );

                    // If comments are open or there is at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }
                endwhile; // End of the loop.
                ?>
            </div>
            <div class="blog__pagination">
                <?php 
                    the_posts_pagination(
                        array(
                            'prev_text' => __( '<', 'textdomain' ),
                            'next_text' => __( '>', 'textdomain' ),
                        )
                    ); 
                ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>