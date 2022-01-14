<?php
/**
 * Template Name: Archive
 * Template Post Type: Page
 * 
 * @package ALM
 */

 get_header();

$alm_projects = new WP_Query([
    'post_type' => 'post',
    'order'     => 'ASC'
]);

if ( $alm_projects->have_posts() ) :
?>
<main id="project" class="main-project">
    <!-- Header -->
    <?php get_template_part( 'template-parts/components/project-header' ); ?>
    <div class="portfolio-container project-articles">
    
    
        <?php
        while ( $alm_projects->have_posts() ) :
            $alm_projects->the_post();
            ?>
                <!-- Articles -->
                <div class="portfolio-container__block" id="projectItem" style="background-image:url(<?php the_post_thumbnail_url( 'large' ); ?>)">
                    <a href="<?php the_field( 'url' ); ?>" class="portfolio-container__link portfolio-container__link--?">
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

get_footer( 'alt' );