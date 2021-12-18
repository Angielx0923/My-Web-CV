<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Angelina Lorieux-Machova is a creative French web-developer, currently looking for her dream job in the United States.">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> class="body">

    <?php if ( is_404() ) : ?>
        <div class="error__container">
    <?php elseif ( is_single() ) : ?>
        <div class="project__container">
    <?php else : ?>
        <div class="onepage__container">
    <?php endif ?>

    <?php
        $headerclass = 'header-project-page';
        $logoclass = 'logo__container--project';
        $animation = 'header__scroll-animation--project';
    ?>
        <!-- HEADER -->
        <header class="header <?php if ( is_single() ) : echo $headerclass; endif; ?>" id="header">
            <div class="logo__container <?php if ( is_single() ) : echo $logoclass; endif; ?>">
                <!-- The link is disabled when it's the front-page -->
                <?php if ( ! is_front_page() ) : ?>
                    <a class="logo" href="<?= home_url(); ?>">
                        <?php the_custom_logo(); ?>
                    </a>
                <?php else : ?>
                    <h1 class="logo disabled">
                        <?php the_custom_logo(); ?>
                    </h1>
                <?php endif; ?>
            </div>
            <div class="header__container">

                <div class="burger">
                    <div class="burger__nav">
                        <span class="burger__nav__content"></span>
                    </div>
                    <div id="burger__content" class="burger__content">
                        <nav class="nav">
                            <ul class="nav__list">
                                <li class="nav__list__item is-home active"><a href="<?= home_url(); ?>" class="nav__list__item__link nav__link--home" data-scroll="section-part-home"><img class="nav__list__item__img icon icon--home" src="<?php echo wp_get_attachment_image_url( ALM_THEME_HOME_ICON ); ?>" alt="home button icon"></a></li>
                                <li class="nav__list__item is-profile"><a href="#" class="nav__list__item__link nav__link--profile" data-scroll="section-part-profile">Profil</a></li>
                                <li class="nav__list__item is-skills"><a href="#" class="nav__list__item__link nav__link--skills" data-scroll="section-part-skills">Skills</a></li>
                                <li class="nav__list__item is-education"><a href="#" class="nav__list__item__link nav__link--education" data-scroll="section-part-education">Formations</a></li>
                                <li class="nav__list__item is-formation"><a href="#" class="nav__list__item__link nav__link--formation" data-scroll="section-part-formation">Parcours</a></li>
                                <li class="nav__list__item is-portfolio"><a href="#" class="nav__list__item__link nav__link--portfolio" data-scroll="section-part-portfolio">Portfolio</a></li>
                                <li class="nav__list__item is-contact"><a href="#" class="nav__list__item__link nav__link--contact" data-scroll="section-part-contact">Contact</a></li>
                            </ul>
                            <div id="socialMediaNav" class="nav__social-media">
                                <a href="https://www.linkedin.com/in/a-lx/" class="fa fa-linkedin-square nav__social-media__link nav__social-media__link--linkedin"></a>
                                <a href="https://github.com/Angielx0923" class="fa fa-github nav__social-media__link nav__social-media__link--github"></a>
                            </div>
                        </nav>
                    </div>
                </div>

                <div class="languages-nav" id="dropdown">
                    <button class="languages-nav__button" id="languageBtn">
                        <img class="languages-nav__img icon" src="img/Icons/flag-EN.png" alt="switch language icon">
                    </button>
                    <div class="dropdown-content">
                        <a href="" class="dropdown-content__link">
                            <p class="dropdown-content__language">FR</p>
                            <img src="img/Icons/flag-FR.png" alt="flag" class="dropdown-content__icon">
                        </a>
                    </div>
                </div>
            </div>

            <div id="headerAnim" class="header__scroll-animation <?php if ( is_single() ) : echo $animation; endif; ?>"></div>
        </header>