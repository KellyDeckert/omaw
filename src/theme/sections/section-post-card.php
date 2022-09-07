<div class="mdc-card post-card">
    <div class="mdc-card__primary-action">
        <div class="mdc-card__media mdc-card__media--square">
            <div class="mdc-card__media-content">
            <?php 
            get_template_part( 'snippets/placeholder-img', null,
                array( 
                    'data'  => array(
                        'size' => '307x160',
                    )
                ) 
            );
            ?>
            </div>
        </div>
        <div class="mdc-card-wrapper__text-section">
            <div class="demo-card__title">
                <?php the_title( '<h3 class="post-card__title">', '</h3>' ); ?>
            </div>
            <!-- <div class="demo-card__subhead">Secondary text</div> -->
        </div>
        <!-- ... additional primary action content ... -->
        <div class="mdc-card__ripple"></div>
    </div>
    <div class="mdc-card__actions">
        <div class="mdc-card__action-buttons">
            <?php
            $url = get_permalink();

            get_template_part( 'snippets/button', null,
                array( 
                    'class' => 'button--alt',
                    'data'  => array(
                        'url' => $url,
                        'copy' => 'Read More'
                    ),
                ) 
            );
            
            ?>
            <!-- <button class="mdc-button mdc-card__action mdc-card__action--button">
                <div class="mdc-button__ripple"></div>
                <span class="mdc-button__label">Action 1</span>
            </button>
            <button class="mdc-button mdc-card__action mdc-card__action--button">
                <div class="mdc-button__ripple"></div>
                <span class="mdc-button__label">Action 2</span>
            </button> -->
        </div>
        <!-- <div class="mdc-card__action-icons">
            <button class="material-icons mdc-icon-button mdc-card__action mdc-card__action--icon"
                title="Share">share</button>
            <button class="material-icons mdc-icon-button mdc-card__action mdc-card__action--icon"
                title="More options">more_vert</button>
        </div> -->
    </div>
</div>