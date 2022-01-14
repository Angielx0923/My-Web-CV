<header class="project-header">
    <!-- PROJECT HEADER -->
    <div class="project-header__container">
        <a href="<?= home_url(); ?>" id="backBtn" class="project-header__back-btn">
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