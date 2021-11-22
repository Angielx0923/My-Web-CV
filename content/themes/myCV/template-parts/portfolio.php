<?php 



    $alm_portfolio = new WP_Query([
        'post_type' => 'post',
        'order'     => 'ASC'
    ]);

    if ( $alm_portfolio->have_posts() ) :
    ?>
        <div class="portfolio-container">

            <?php
            while ( $alm_portfolio->have_posts() ) :
                $alm_portfolio->the_post();
                ?>
                
                <div class="portfolio-container__block" id="projectItem" style="background-image:url(<?php the_post_thumbnail_url( 'large' ); ?>)">
                    <a href="#" class="portfolio-container__link portfolio-container__link--?">
                        <h3 class="portfolio-container__title"><?php the_title(); ?></h3>
                        <p class="portfolio-container__content"><?php the_field( 'presentation' ); ?></p>
                    </a>
                    <a class="portfolio-container__info-link" id="infoBtn" href="<?php the_permalink(); ?>">
                        <p class="portfolio-container__info-link__text"><?php the_field( 'info' ); ?></p>
                    </a>
                </div>
                
                <?php endwhile;
                wp_reset_postdata(); ?>
        </div>
        <?php
    endif;

