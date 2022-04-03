<header class="project-header">
        <!-- PROJECT HEADER -->
        <div class="project-header__container">

            <div class="project-header__title-container">
                <div class="project-header__title-block">
                    <h2 class="project-header__title titles-section"><?php if ( is_single() ) : echo get_theme_mod( 'alm_project_title' ); else : echo get_theme_mod( 'alm_archive_title' ); endif; ?></h2>
                </div>
                <div class="project-header__project-title-block">
                    <h3 class="project-header__project-title"><?php if ( is_tax() ) : echo 'All'; else : the_title(); endif; ?></h3>
                </div>
            </div>

            <div class="project-header__quote-container">
                <p class="project-header__quote-container__content quote"><?php the_field( 'quote' ); ?></p>
            </div>
        </div>
    </header>