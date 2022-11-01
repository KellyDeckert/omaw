<?php /* Template Name: Members */ 

get_header();

$industry_terms = get_terms([
    'taxonomy' => 'industry',
    'hide_empty' => false,
]);

$region_terms = get_terms([
    'taxonomy' => 'region-of-engagement',
    'hide_empty' => false,
]);

?>

<div class="members responsive-font-size">

    <?php
    get_template_part( 'sections/section-image-copy', null,
        array( 
            'data'  => array(
                'id' => 'our-members',
                'display' => get_field('hero_display'),
                'vertical_alignment' => get_field('hero_vertical_alignment'),
                'image_alignment' => get_field('hero_image_alignment'),
                'spacing_class' => get_field('hero_spacing'),
                'additional_classes' => 'image-copy--wide-content',
                'image' => get_field('hero_image'),
                'image_tile' => get_field('hero_image_tile'),
                'heading_tag' => 'h1',
                'heading' => get_field('hero_heading'),
                'sub_heading_tag' => 'h3',
                'sub_heading' => get_field('hero_sub_heading'),
                'content' => get_field('hero_content'),
                'cta' => get_field('hero_cta_link')
            )
        ) 
    );
    ?>

    <div class="post-list section-h-padding section-v-margin" data-type="members"  data-bank-size="20">
        <div class="layout--1080">
            
            <div class="filters filters--2-option">
                <h6 class="filters__results"></h6>
                <div class="filters__council">
                    <div class="filters__council mdc-form-field">
                    <div class="mdc-checkbox mdc-checkbox--upgraded mdc-ripple-upgraded mdc-ripple-upgraded--unbounded mdc-checkbox--selected" style="--mdc-ripple-fg-size: 24px; --mdc-ripple-fg-scale: 1.6666666666666667; --mdc-ripple-left: 8px; --mdc-ripple-top: 8px;">
                        <input type="checkbox" class="mdc-checkbox__native-control" id="guiding-council" autocomplete ="off" <?php echo $_GET['council'] == 'true' ? 'checked' : '';?>>
                        <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                        </div>
                        <div class="mdc-checkbox__ripple"></div>
                    </div>
                    <label for="guiding-council">Guiding Council</label>
                </div>
            
                </div>
                <div id="filters-sort" class="filters__sort" data-sort="<?php echo isset($_GET['sort']) ? $_GET['sort'] : 'asc';?>">
                    <h6>
                        Sort By: 
                        <span class="filters__sort-value" data-sort="asc">A-Z</span>
                        <span class="filters__sort-value" data-sort="desc">Z-A</span>
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
                if($industry_terms){
                    
                    echo '<div class="filters__select custom-select">';
                        echo '<select id="industry" name="industry">';
                        echo '<option value="" disabled="" '.( isset($_GET['industry']) ? '' : 'selected=""' ).'>Select an industry</option>';
                        foreach ($industry_terms as $term){
                            echo '<option value="'.$term->slug.'" '.( $_GET['industry'] == $term->slug ? 'selected=""': '').'>'.$term->name.'</option>';
                        }
                        echo '</select>';
                    echo '</div>';
         
                }
                if($region_terms){
           
                    echo '<div class="filters__select custom-select">';
                        echo '<select id="region" name="region">';
                        echo '<option value="" disabled="" '.( isset($_GET['region']) ? '' : 'selected=""' ).'>Select an Region of Engagement</option>';
                        foreach ($region_terms as $term){
                            echo '<option value="'.$term->slug.'" '.( $_GET['region'] == $term->slug ? 'selected=""': '').'>'.$term->name.'</option>';
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
            
            <div class="post-list__member-table-wrapper">
                <div class="post-list__member-table-scroller">
                    <table id="members-list" class="post-list-table">
                        <thead>
                            <tr>
                                <th>
                                    <p class="paragraph--xs"><strong>Name</strong></p>
                                </th>
                                <th>
                                <p class="paragraph--xs"><strong>Guiding Council</strong></p>
                                </th>
                                <th>
                                <p class="paragraph--xs"><strong>Industry</strong></p>
                                </th>
                                <th>
                                <p class="paragraph--xs"><strong>Region of Engagement</strong></p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($x=0;$x < 0; $x++): ?>
                            <tr>
                                <td>
                                    <strong>Company Name</strong>
                                </td>
                                <td>
                                    <strong>Guiding Council</strong>
                                </td>
                                <td>
                                    Industry,  Industry,  Industry
                                </td>
                                <td>
                                    Region of engagement
                                </td>
                            </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>                
                </div>
            </div>
            
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

</div>

<?php get_footer(); ?>

