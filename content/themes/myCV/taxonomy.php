<?php
/**
 * Template Name: Technology
 * Template Post Type: Page
 * 
 * @package ALM
 */

get_header();


if ( have_posts() ) :
?>
<main id="project" class="main-project">
     <!-- Header -->
     <?php get_template_part( 'template-parts/components/project-header' ); ?>
    <div class="portfolio-container project-articles">
    
    
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
                <!-- Articles -->
                <div class="portfolio-container__block" id="projectItem" style="background-image:url(<?php the_post_thumbnail_url( 'large' ); ?>)">
                    <a href="<?php the_field( 'url' ); ?>" class="portfolio-container__link portfolio-container__link--?">
                        <h3 class="portfolio-container__title"><?php the_title(); ?></h3>
                        <p class="portfolio-container__content"><?php the_field( 'presentation' ); ?></p>
                    </a>
                    <a class="portfolio-container__info-link" id="infoBtn" href="<?php the_permalink(); ?>">
                        <?php the_field( 'info' ); ?>
                    </a>
                </div>
                
                <?php endwhile; ?>
        </div>
    <?php
endif;

get_footer( 'alt' );