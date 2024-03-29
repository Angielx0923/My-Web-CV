<?php 
    $posts_number =  get_theme_mod(
        'alm_portfolio_number',
        3
    );

    $alm_portfolio = new WP_Query([
        'post_type' => 'post',
        'order'     => 'ASC',
        'posts_per_page' => $posts_number
    ]);

    if ( $alm_portfolio->have_posts() ) :
    ?>
        <div class="portfolio-container">

            <?php
            while ( $alm_portfolio->have_posts() ) :
                $alm_portfolio->the_post();
                ?>
                
                <div class="portfolio-container__block" id="projectItem" style="background-image:url(<?php the_post_thumbnail_url( 'large' ); ?>)">
                    <a href="<?php the_field( 'url' ); ?>" class="portfolio-container__link portfolio-container__link--?">
                        <h3 class="portfolio-container__title"><?php the_title(); ?></h3>
                        <p class="portfolio-container__content"><?php the_field( 'presentation' ); ?></p>
                    </a>
                    <a class="portfolio-container__info-link infoBtn" href="<?php the_permalink(); ?>">
                        <?php the_field( 'info' ); ?>
                    </a>
                </div>
                
                <?php endwhile;
                wp_reset_postdata(); ?>
        </div>
        <?php
    endif;

