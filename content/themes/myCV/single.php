<?php
/**
 * Portfolio Template / contenu des articles 
 * 
 * @package ALM
 */

?>

<?php get_header(); ?>

 <!-- MAIN -->
    <?php if ( have_posts() ) : ?>
        <main id="project" class="main-project">
        <?php get_template_part( 'template-parts/components/hireme' ); ?>

        <?php while ( have_posts() ) : 
            the_post();
            ?>
            <!-- Header -->
            <?php get_template_part( 'template-parts/components/project-header' ); ?>

            <!-- Articles -->
            <main class="project-articles">
                <!-- PROJECT MAIN -->
                <section class="profile-main project-articles__block">
                        <?php the_content(); ?>
                </section>
                <?php endwhile; ?>
            </main>
        <?php endif; ?>

<?php get_footer( 'alt' ); ?>