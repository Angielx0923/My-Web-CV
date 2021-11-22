<?php get_header(); ?>

 <!-- MAIN -->
    <?php if ( have_posts() ) : ?>
        <main id="project" class="main-project">

        <?php while ( have_posts() ) : 
            the_post();
            if ( ( $current_post + 1 ) == $post_count ) {
                $style = 'style="display: none"';
            }
            ?>
            <header class="project-header">
                <!-- PROJECT HEADER -->
                <div class="project-header__container">
                    <a href="<?php home_url(); ?>" id="backBtn" class="project-header__back-btn">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="project-header__back-btn__text"><?php echo get_theme_mod( 'alm_project_btn' ); ?></span>
                    </a>

                    <div class="project-header__title-container">
                        <div class="project-header__title-block">
                            <h2 class="project-header__title titles-section"><?php echo get_theme_mod( 'alm_project_title' ); ?></h2>
                        </div>
                        <div class="project-header__project-title-block">
                            <h3 class="project-header__project-title"><?php the_title(); ?></h3>
                        </div>
                    </div>

                    <div class="project-header__quote-container">
                        <p class="project-header__quote-container__content quote"><?php the_field( 'quote' ); ?></p>
                    </div>
                </div>
            </header>

            <main class="project-articles">
                <!-- PROFILE MAIN / PRESENTATION & GOALS -->
                <section class="profile-main project-articles__block">
                    <article class="article">
                        <div class="article-project__img-container">
                            <img src="img/portfolio/Capture d’écran 2020-09-12 à 19.37.19.png" alt="illustrations du projet" class="article-project__img">
                        </div>
                        <p class="article__text project-article__text"><?php the_content(); ?>
                        </p>
                    </article>

                    <!-- DIVIDER -->
                    <div class="profile-divider project-divider">
                        <div class="profile-divider__divider" <?php echo $style; ?>></div>
                    </div>
                </section>
                <?php endwhile; ?>
            </main>
        <?php endif; ?>

<?php get_footer( 'alt' ); ?>