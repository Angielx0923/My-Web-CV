<?php 

if ( post_type_exists( 'madskills' ) ) :

    $alm_madskills = new WP_Query([
        'post_type' => 'madskills',
        'order'     => 'ASC'
    ]);

    if ( $alm_madskills->have_posts() ) :
    ?>

        <div class="mad-skills__container">

            <?php
            $nofilter = '';
            while ( $alm_madskills->have_posts() ) :
                $alm_madskills->the_post();

                if ( $alm_madskills->current_post === 1 ) {
                    $nofilter = 'style="filter: none"';
                }
                elseif ( $alm_madskills->current_post === 2 ) {
                    $nofilter = '';
                }
            ?>
                <div class="skills-wrapper">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="mad-skills__img--usa skills__img icon" <?php echo $nofilter; ?>>
                    <div class="skills-text-container">
                        <p class="mad-skills__text skills__text skills-text-container__content"><?php the_title(); ?></p>
                    </div>
                </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
        <?php
    endif;
endif;
?>