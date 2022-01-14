<?php 

if ( post_type_exists( 'softskills' ) ) :

    $alm_softskills = new WP_Query([
        'post_type' => 'softskills',
        'order'     => 'ASC'
    ]);

    if ( $alm_softskills->have_posts() ) :
    ?>

        <div class="soft-skills__container">

            <?php
            $nofilter = '';
            while ( $alm_softskills->have_posts() ) :
                $alm_softskills->the_post();

                if ( $alm_softskills->current_post === 1 ) {
                    $nofilter = 'style="filter: none"';
                }
                elseif ( $alm_softskills->current_post === 2 ) {
                    $nofilter = '';
                }
            ?>
                <div class="skills-wrapper">
                    <img src="<?php the_post_thumbnail_url(); ?>" class="soft-skills__img--creativity skills__img icon" <?php echo $nofilter; ?>>
                    <div class="skills-text-container">
                        <p class="soft-skills__text skills__text skills-text-container__content"><?php the_title(); ?></p>
                    </div>
                </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
        <?php
    endif;
endif;
?>