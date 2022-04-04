<?php 

if ( post_type_exists( 'hardskills' ) ) :

    $alm_hardskills = new WP_Query([
        'post_type' => 'hardskills',
        'order'     => 'ASC'
    ]);

    if ( $alm_hardskills->have_posts() ) :
    ?>

        <div class="hard-skills__list">

            <?php
            while ( $alm_hardskills->have_posts() ) :
                $alm_hardskills->the_post();
            ?>
                <div class="hard-skills__item-container">
                    <div class="progress-bar" role="progressbar" aria-label="hard skills" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                        <div class="progress-bar__value"></div>
                    </div>        
                </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
        <?php
    endif;
endif;
?>