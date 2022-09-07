<?php /* Template Name: Style Guide */ ?>
<?php get_header(); ?>

<div class="page page__style-guide layout--100">
    <div class="page__inner layout--1920">
        <div class="page__header layout--1080">
            <h1 class="header">Typography</h1>    
            <h1>Heading 1</h1>
            <h2>Heading 2</h2>
            <h3>Heading 3</h3>
            <h4>Heading 4</h4>
            <h5>Heading 5</h5>
            <h6>Heading 6</h6>
        </div>
        <div class="page__content layout--1080">
            <p>Paragraph 1 <a href="">lorem ipsum dolor sit amet</a>, consectetur adipiscing elit. Sed ornare arcu molestie porta cursus. Donec fermentum libero vitae efficitur consequat.</p>
            <p class="paragraph--sm">Paragraph 2 lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare arcu molestie porta cursus. Donec fermentum libero vitae efficitur consequat.</p>
            <p class="paragraph--xs">Paragraph 3 lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare arcu molestie porta cursus. Donec fermentum libero vitae efficitur consequat.</p>

            <ul>
                <li>Incididunt veniam id dolore aliqua sint aliquip eiusmod laborum eiusmod ea dolore.</li>
                <li>Ipsum amet ipsum ea ea ex velit est veniam sint esse sunt qui.</li>
                <li>Id dolore dolore tempor ad irure sit.</li>
            </ul>

            <ol>
                <li>Incididunt veniam id dolore aliqua sint aliquip eiusmod laborum eiusmod ea dolore.</li>
                <li>Ipsum amet ipsum ea ea ex velit est veniam sint esse sunt qui.</li>
                <li>Id dolore dolore tempor ad irure sit.</li>
            </ol>

            <h1 class="header">Buttons</h1>

            <div style="display:block;border:thin solid #C3D7D9;background-color:transparent;padding:20px;width:fit-content;margin:20px 0;">
                <a href="#" class="button">Click Me</a>
                <button type="submit" class="button">Submit</button>
                <a href="#" class="button button--secondary">Click Me</a>
                <button type="submit" class="button button--secondary">Submit</button>
            </div>

            <div style="display:block;border:thin solid #C3D7D9;background-color:transparent;padding:20px;width:fit-content;margin:20px 0;">
                <a href="#" class="button button--accent button--accent-dark">Click Me</a>
                <button type="submit" class="button button--accent button--accent-dark">Submit</button>
            </div>

            <div style="display:block;background-color:#010F3A;padding:20px;width:fit-content;margin:20px 0;">
                <a href="#" class="button button--accent button--accent-light">Click Me</a>
                <button type="submit" class="button button--accent button--accent-light">Submit</button>
            </div>

            <div style="display:block;border:thin solid #C3D7D9;padding:20px;width:fit-content;margin:20px 0;">
                <a href="#" class="button button--alt">Click Me</a>
                <button type="submit" class="button button--alt">Submit</button>
            </div>

            <div style="display:block;border:thin solid transparent;background:#C3D7D9;padding:20px;width:fit-content;margin:20px 0;">
                <a href="#" class="button button--alt button--alt-dark">Click Me</a>
                <button type="submit" class="button button--alt button--alt-dark">Submit</button>
            </div>

            <div style="display:block;border:thin solid transparent;background-color:#010F3A;padding:20px;width:fit-content;margin:20px 0;">
                <a href="#" class="button button--alt button--alt-invert">Click Me</a>
                <button type="submit" class="button button--alt button--alt-invert">Submit</button>
            </div>

            <h1 class="header">Form Inputs</h1>

            <form>
                <!-- Render textfield component -->
                <div class="text-field-container">
                    <div class="mdc-text-field text-field mdc-text-field--outlined" data-mdc-auto-init="MDCTextField">
                        <input type="text" id="text-field-outlined"
                            class="mdc-text-field__input" aria-describedby="text-field-outlined-helper-text">
                        <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch" style=""><label class="mdc-floating-label"
                                    for="text-field-outlined" style="">First Name</label></div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                    <div class="mdc-text-field-helper-line">
                        <p class="mdc-text-field-helper-text mdc-text-field-helper-text--persistent mdc-text-field-helper-text--validation-msg"
                            id="text-field-outlined-helper-text">Helper text goes here</p>
                    </div>
                </div>

                <div class="mdc-form-field">
                    <div class="mdc-radio">
                        <input class="mdc-radio__native-control" type="radio" id="radio-1" name="radios" checked>
                        <div class="mdc-radio__background">
                        <div class="mdc-radio__outer-circle"></div>
                        <div class="mdc-radio__inner-circle"></div>
                        </div>
                        <div class="mdc-radio__ripple"></div>
                    </div>
                    <label for="radio-1">Radio 1</label>
                </div>
                <div class="mdc-form-field">
                    <div class="mdc-radio">
                        <input class="mdc-radio__native-control" type="radio" id="radio-2" name="radios" checked>
                        <div class="mdc-radio__background">
                        <div class="mdc-radio__outer-circle"></div>
                        <div class="mdc-radio__inner-circle"></div>
                        </div>
                        <div class="mdc-radio__ripple"></div>
                    </div>
                    <label for="radio-2">Radio 2</label>
                </div>
                <div class="mdc-form-field">
                    <div class="mdc-radio">
                        <input class="mdc-radio__native-control" type="radio" id="radio-3" name="radios" checked>
                        <div class="mdc-radio__background">
                        <div class="mdc-radio__outer-circle"></div>
                        <div class="mdc-radio__inner-circle"></div>
                        </div>
                        <div class="mdc-radio__ripple"></div>
                    </div>
                    <label for="radio-3">Radio 3</label>
                </div>

                <div class="mdc-form-field">
                    <div class="mdc-checkbox">
                        <input type="checkbox"
                            class="mdc-checkbox__native-control"
                            id="checkbox-1"/>
                        <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark"
                            viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path"
                                fill="none"
                                d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                        </div>
                        <div class="mdc-checkbox__ripple"></div>
                    </div>
                    <label for="checkbox-1">Checkbox 1</label>
                </div>
                <div class="mdc-form-field">
                    <div class="mdc-checkbox">
                        <input type="checkbox"
                            class="mdc-checkbox__native-control"
                            id="checkbox-2"/>
                        <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark"
                            viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path"
                                fill="none"
                                d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                        </div>
                        <div class="mdc-checkbox__ripple"></div>
                    </div>
                    <label for="checkbox-2">Checkbox 2</label>
                </div>
                <div class="mdc-form-field">
                    <div class="mdc-checkbox">
                        <input type="checkbox"
                            class="mdc-checkbox__native-control"
                            id="checkbox-3"/>
                        <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark"
                            viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path"
                                fill="none"
                                d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                        </div>
                        <div class="mdc-checkbox__ripple"></div>
                    </div>
                    <label for="checkbox-3">Checkbox 3</label>
                </div>

                <div class="mdc-select mdc-select--outlined">
                    <div class="mdc-select__anchor" aria-labelledby="outlined-select-label">
                        <span class="mdc-notched-outline">
                        <span class="mdc-notched-outline__leading"></span>
                        <span class="mdc-notched-outline__notch">
                            <span id="outlined-select-label" class="mdc-floating-label">Pick a Food Group</span>
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
                        <ul class="mdc-list">
                        <li class="mdc-list-item" data-value="">
                            <span class="mdc-list-item__ripple"></span>
                        </li>
                        <li class="mdc-list-item" data-value="grains">
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
                        </li>
                        </ul>
                    </div>
                </div>

            </form>

            <h1 class="header">Slider Toggles</h1>

                <!-- Slider main container -->
                <div class="swiper swiper-quote-carousel">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide quote-slide">
                            <div class="quote-slide-inner">
                                <div class="quote-slide-copy">
                                    <div class="quote-slide-quote">
                                        <p>Ea nostrud et amet laboris laborum amet. Irure dolore aliqua sit ea enim esse cillum elit ut veniam labore proident officia incididunt. Consectetur qui do magna deserunt aliqua sunt sunt incididunt elit incididunt. Incididunt aute aliqua nisi ea deserunt laboris ad. Pariatur sit excepteur reprehenderit ut adipisicing laboris eu do. Sint dolor id pariatur pariatur amet. Sunt in ea ullamco esse commodo nostrud et tempor veniam laborum quis dolor ullamco.</p>
                                    </div>
                                    <h5 class="quote-slide-author">Lisa Singh, Managing Director, Global Benefits<span>Silicon Valley Bank</span></h5>
                                </div>
                                <div class="quote-slide-portrait"></div>
                            </div>
                        </div>
                        <div class="swiper-slide quote-slide">
                            <div class="quote-slide-inner">
                                <div class="quote-slide-copy">
                                    <div class="quote-slide-quote">
                                        <p>Consectetur pariatur irure sint elit pariatur consectetur amet ea nisi culpa incididunt sint magna. Magna enim ut dolor sunt ipsum elit. Velit culpa et anim et. Reprehenderit anim laboris commodo ad ad officia laborum esse sint irure. Ullamco sunt mollit cupidatat sint consequat minim.</p>
                                    </div>
                                    <h5 class="quote-slide-author">Bruce Wayne, Managing Director, Global Benefits<span>Silicon Valley Bank</span></h5>
                                </div>
                                <div class="quote-slide-portrait"></div>
                            </div>
                        </div>
                        <div class="swiper-slide quote-slide">
                            <div class="quote-slide-inner">
                                <div class="quote-slide-copy">
                                    <div class="quote-slide-quote">
                                        <p>Sit aliqua nostrud ad in. Excepteur nostrud commodo pariatur sint ut velit sit minim dolore irure officia consequat tempor. In est aliqua officia quis cillum. Id id laboris cupidatat sit fugiat commodo. Id do et qui commodo magna tempor veniam nostrud incididunt aliqua est aliquip.</p>
                                    </div>
                                    <h5 class="quote-slide-author">Robert Red, Managing Director, Global Benefits<span>Silicon Valley Bank</span></h5>
                                </div>
                                <div class="quote-slide-portrait"></div>
                            </div>
                        </div>
                        <div class="swiper-slide quote-slide">
                            <div class="quote-slide-inner">
                                <div class="quote-slide-copy">
                                    <div class="quote-slide-quote">
                                        <p>Irure eu sit nulla adipisicing ex minim consectetur id. Amet aliquip exercitation qui ex excepteur laboris incididunt ex adipisicing. Non veniam in mollit commodo do proident enim adipisicing tempor nostrud labore eu. Velit cupidatat ea laboris incididunt id anim enim.</p>
                                    </div>
                                    <h5 class="quote-slide-author">Jane Doe, Assistant Director, Global Benefits<span>Silicon Valley Bank</span></h5>
                                </div>
                                <div class="quote-slide-portrait"></div>
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <!-- <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div> -->

                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
                </div>
        </div>
    </div>
    
</div>

<script>
    var swiper = new Swiper(".swiper", {
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            return '<span data-pager="' + (index + 1) + '" class="bullet-pb-off ' + className + '">' + (index + 1) + '</span>';
        },
    },
    // navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev',
    // },
    breakpoints: {
        // when window width is >= 480px
        480: {
            direction: 'horizontal',
        },
        // when window width is >= 640px
        640: {
            direction: 'vertical',
        }
    }
    });
    swiper.on('slideChange',function(){
        // console.log('slide changed:: #' + (swiper.activeIndex + 1));
        // change bullet-pb-off to bullet-pb-on for current slide
        var pager = document.querySelector('.bullet-pb-off.swiper-pagination-bullet-active');
        var current = swiper.activeIndex + 1;
        if(pager){
            // console.log(current + ' On');
            pager.classList.remove('bullet-pb-off');
            pager.classList.add('bullet-pb-on');
        } else {
            var prev = swiper.activeIndex + 2;
            // console.log(prev + ' Off');
            pager = document.querySelector('.bullet-pb-on:nth-of-type(' + prev + ')');
            pager.classList.remove('bullet-pb-on');
            pager.classList.add('bullet-pb-off');
        }
    });
    swiper.on('reachBeginning',function(){
        // console.log('last slide::');
        // reset pager, change bullet-pb-on to bullet-pb-off for all slides
        var pagers = document.querySelectorAll('.bullet-pb-on');
        pagers.forEach(el => {
            el.classList.remove('bullet-pb-on');
            el.classList.add('bullet-pb-off');
        });
    });
</script>
<!-- <script>
    const swiperV = new Swiper('.swiper.swiper--v', {
        // Optional parameters
        direction: 'vertical',

        // If we need pagination
        pagination: {
            el: '.swiper-pagination.swiper--v',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (index + 1) + "</span>";
            },
        },

        // // Navigation arrows
        // navigation: {
        //     nextEl: '.swiper-button-next',
        //     prevEl: '.swiper-button-prev',
        // },

        // // And if we need scrollbar
        // scrollbar: {
        //     el: '.swiper-scrollbar',
        // },
    });

</script> -->

<?php get_footer(); ?>