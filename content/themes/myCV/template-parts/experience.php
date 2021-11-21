<?php 

if ( post_type_exists( 'experience' ) ) :

    $alm_experience = new WP_Query([
        'post_type' => 'experience',
        'order'     => 'ASC'
    ]);

    if ( $alm_experience->have_posts() ) :
    ?>
        <ul class="formation-timeline-list">

            <?php
            while ( $alm_experience->have_posts() ) :
                $alm_experience->the_post();
                $left = '--left';
                $right = '--right';
                
                // check if it's the fourth object to not show the date (same year)
                if ( $alm_experience->current_post == 3 ) {
                    $hide = 'style="display: none"';
                }
                else { $hide = 'style="display: block"'; }
                ?>
            
                    <li class="formation-timeline-list__item formation-timeline-list__item--date" <?php echo $hide; ?>>
                        <div class="formation-timeline-date-block formation-timeline-date-block--2020">
                            <time class="show formation-timeline-date-block__content formation-timeline-date-block__content--2020" datetime="2020"><?php the_field( 'year' ); ?></time>
                        </div>
                    </li>

                    <!-- LEFT -->
                    <li class="show formation-timeline-list__item formation-timeline-list__item">
                        <!-- Check the odds and even to alternate them on left and right -->
                        <div class="formation-timeline-panel-container formation-timeline-panel-container<?php if ( $alm_experience->current_post%2 == 1 ) { echo $right; }  else { echo $left; }; ?> 
                            formation-timeline-panel-container--hypnose">
                            <div class="formation-timeline-panel-date-block">
                                <p class="formation-timeline-panel-date-block__content"><?php the_field( 'date' ); ?></p>
                            </div>
                            <div class="formation-timeline-panel-content">
                                <h5 class="formation-timeline-panel-content__job-title"><?php the_title(); ?></h5>
                                <div class="formation-timeline-panel-content__info-block">
                                    <p class="formation-timeline-panel-content__time-length"><?php the_content(); ?></p>
                                </div>
                            </div>
                        </div>
                    </li>                
            <?php endwhile;
            wp_reset_postdata(); ?>
        </ul>
    <?php
    endif;
endif;
