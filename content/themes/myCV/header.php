<?php
/**
 * Header Template
 * 
 * @package ALM
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Angelina Lorieux-Machova is a creative French web-developer, currently looking for her dream job in the United States.">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> class="body">

<!-- Classes of the div containing the content of the entire page (GRID layouts) -->
    <?php if ( is_404() ) : ?>
        <div class="error__container">
    <?php elseif ( is_single() ) : ?>
        <div class="project__container">
    <?php elseif ( is_page( 'contact' ) ) : ?>
        <div class="contact-page">
    <?php elseif ( is_page_template( 'archive.php' ) ) : ?>
        <div class="archive-projects__container">
    <?php else : ?>
        <div class="onepage__container">
    <?php endif ?>

    <?php
        $headerclass     = 'header-project-page';
        $logoclass       = 'logo__container--hidden';
        $animation       = 'header__scroll-animation--project';
        $showsocialmedia = 'nav__social-media--visible';
        $opacity         = 'style="opacity: 0"'
    ?>
        <!-- HEADER -->
        <header class="header <?php if ( ! is_front_page() ) : echo $headerclass; endif; ?>" id="header">
             <!-- FIX for the back btn not working with z-index in the project-header -->
            <a href="<?= home_url(); ?>" id="backBtn" class="back-btn__container project-header__back-btn" <?php if ( is_front_page() || is_page( 'contact' ) ) : echo $opacity; endif; ?>>
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="project-header__back-btn__text"><?php echo get_theme_mod( 'alm_project_btn' ); ?></span>
            </a>

            <div class="logo__container <?php if ( is_single() || is_404() || is_page_template( 'archive.php' ) || is_tax() ) : echo $logoclass; endif; ?>">
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
                    <!-- Menu of the header -->
                    <?php
                        get_template_part( 'template-parts/components/menus' );
                    ?> <!-- End menu of the header -->
                            
                            <div id="socialMediaNav" class="nav__social-media <?php if ( ! is_front_page() ) : echo $showsocialmedia; endif; ?>">
                                <a href="<?php echo esc_url(get_theme_mod( 'alm_section_linkedin' )); ?>" class="fa fa-linkedin-square nav__social-media__link nav__social-media__link--linkedin"></a>
                                <a href="<?php echo esc_url(get_theme_mod( 'alm_section_github' )); ?>" class="fa fa-github nav__social-media__link nav__social-media__link--github"></a>
                            </div>
                        </nav>
                    </div>
                </div>

                <?php $alm_language_btn_active = get_theme_mod( 'alm_language_btn_active', false );
                    if ( $alm_language_btn_active ) : get_template_part( 'template-parts/components/menu-language' ); endif;
                ?>
            </div>

            <div id="headerAnim" class="header__scroll-animation <?php if ( ! is_front_page() ) : echo $animation; endif; ?>"></div>
        </header>