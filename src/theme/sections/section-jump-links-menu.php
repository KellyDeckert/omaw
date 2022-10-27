<?php
$display = isset($args['data']['display']) ? $args['data']['display'] : true;
if( $display):
?>

<section class="quick-links" id="quick-links-menu"  data-aos="smooth-slide-up" data-aos-delay="250" data-aos-duration="500" data-aos-easing="cubic">
    <div class="quick-links__inner layout--1080 desktop" data-scrollable="h">
        <ul class="quick-links__menu menu">

            <!-- These links are dynamically added by looking for Sections with IDs on the page. 
            The Name of the menu can be edited via each ACF tab in the WP Admin  -->

        </ul>
    </div>
    <div class="quick-links__inner mobile">

        <div class="mdc-select mdc-select--outlined quick-links-mobile__menu">
            <div class="mdc-select__anchor" aria-labelledby="outlined-select-label">
                <span class="mdc-notched-outline">
                <span class="mdc-notched-outline__leading"></span>
                <span class="mdc-notched-outline__notch">
                    <span id="outlined-select-label" class="mdc-floating-label">Jump to a Section</span>
                </span>
                <span class="mdc-notched-outline__trailing"></span>
                </span>
                <span class="mdc-select__selected-text-container">
                <span id="demo-selected-text" class="mdc-select__selected-text"></span>
                </span>
                <span class="mdc-select__dropdown-icon">
                <svg
                    class="mdc-select__dropdown-icon-graphic"
                    viewBox="7 10 10 5" focusable="false">
                    <polygon
                        class="mdc-select__dropdown-icon-inactive"
                        stroke="none"
                        fill-rule="evenodd"
                        points="7 10 12 15 17 10">
                    </polygon>
                    <polygon
                        class="mdc-select__dropdown-icon-active"
                        stroke="none"
                        fill-rule="evenodd"
                        points="7 15 12 10 17 15">
                    </polygon>
                </svg>
                </span>
            </div>

            <!-- Other elements from the select remain. -->
            <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                <ul class="mdc-list mobile-quick-menu">
                    <li class="mdc-list-item" data-value="">
                        <span class="mdc-list-item__ripple">-</span>
                    </li>
                    <!-- <li class="mdc-list-item" data-value="grains">
                        <span class="mdc-list-item__ripple"></span>
                        <span class="mdc-list-item__text">Bread, Cereal, Rice, and Pasta</span>
                    </li>
                    <li class="mdc-list-item mdc-list-item--selected" data-value="vegetables" aria-selected="true">
                        <span class="mdc-list-item__ripple"></span>
                        <span class="mdc-list-item__text">Vegetables</span>
                    </li>
                    <li class="mdc-list-item" data-value="fruit">
                        <span class="mdc-list-item__ripple"></span>
                        <span class="mdc-list-item__text">Fruit</span>
                    </li> -->
                </ul>
            </div>
        </div>

    </div>
</section>

<?php 
endif;
?>