<?php 

if ( post_type_exists( 'presentation' ) ) :

    $alm_presentation = new WP_Query([
        'post_type' => 'presentation',
        'order'     => 'ASC'
    ]);

    if ( $alm_presentation->have_posts() ) :
    ?>
        <section data-anchor="section-part-profile" class="profile-main">

            <?php
            while ( $alm_presentation->have_posts() ) :
                $alm_presentation->the_post();
                    $class = 'article';
                    // check if its the last post. If yes add a class to the last post et a style
                    if ( ( $alm_presentation->current_post + 1 ) == $alm_presentation->post_count ) {
                        $class .= '--goals';
                        $style = 'style="display: none"';
                    }
                ?>
                
            <article class="article <?php echo $class; ?>">
                <h4 class="show article__title article__title--about"><?php the_title(); ?></h4>
                <p class="show article__text article__text--about"><?php the_content(); ?></p>
                <p class="show article__quote quote"><?php the_field( 'quote' ); ?><br> <span class="article__quote__author quote__author"><?php the_field( 'author' ); ?></span></p>
            </article>
            
            <div class="profile-divider">
                <div class="profile-divider__divider" <?php echo $style; ?>></div>
            </div>
                
                <?php endwhile;
                wp_reset_postdata(); ?>
                <!-- DIVIDER -->
        </section>
        <?php
    endif;
endif;
