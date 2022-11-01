<?php 
/* Template Name: Blog */ 
get_header(); 

$categories = get_categories(array(
    'exclude' => array(24,18)
));

?>
<main class="blog responsive-font-size">
    <?php
    get_template_part( 'sections/section-header-illustration', null,
        array( 
            'data'  => array(
                'id' => 'blog',
                'heading' => get_the_title()
            )
        ) 
    );
    ?>

    <div class="post-list section-h-padding section-v-margin" data-type="posts" data-bank-size="12">
        <div class="layout--1080">
            
            <div class="filters filters--1-option">
                <h6 class="filters__results"></h6>


                <div id="filters-sort" class="filters__sort" data-sort="<?php echo isset($_GET['sort']) ? $_GET['sort'] : 'asc';?>">
                    <h6>
                        Sort By: 
                        <span class="filters__sort-value" data-sort="asc">Newest to Oldest</span>
                        <span class="filters__sort-value" data-sort="desc">Oldest to Newest</span>
                    </h6>
                    <div class="filters__sort-buttons">
                        <button data-sort="asc">
                            <img src="<?php echo get_bloginfo('url');?>/wp-content/themes/one-mind-at-work/assets/img/dropdown-arrow.png" alt="">
                        </button>
                        <button data-sort="desc">
                            <img src="<?php echo get_bloginfo('url');?>/wp-content/themes/one-mind-at-work/assets/img/dropdown-arrow.png" alt="">
                        </button>
                    </div>

                </div>
                <?php
                echo '<div class="filters__filters">';
                if($categories){
                    
                    echo '<div class="filters__select custom-select">';
                        echo '<select id="category" name="category">';
                        echo '<option value="" disabled="" '.( isset($_GET['category']) ? '' : 'selected=""' ).'>Select a type</option>';
                        foreach( $categories as $category ){
                            echo '<option value="'.$category->slug.'" '.( $_GET['category'] == $category->slug ? 'selected=""': '').'>'.$category->name.'</option>';
                        }
                        echo '</select>';
                    echo '</div>';
         
                }
                echo '</div>';
                ?>    
                <div class="filters__clear">
                    <button>Clear Filters</button>
                </div>
            </div>
            
            <div id="post-list" class="cards post-list__cards-wrapper"></div>
            
            <div class="pagination">
                <button class="pagination__prev-button disabled" data-tabs="'.$section_id.'-tabs" data-index="prev">
                <?php get_template_part( 'snippets/icon-left-arrow'); ?>
                </button>
                <div class="pagination__page-buttons">
                    <?php /* ?>
                    <button class="pagination__button pagination__button--active">1</button>
                    <button class="pagination__button">2</button>
                    <button class="pagination__button">3</button>   
                    <?php */ ?>                    
                </div>
                <button class="pagination__next-button" data-tabs="'.$section_id.'-tabs" data-index="next">
                <?php get_template_part( 'snippets/icon-left-arrow'); ?>
                </button>
            </div>
            
        </div>    
    </div>

</main>
<?php get_footer(); ?>