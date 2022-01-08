<?php
/**
 * 404 error page Template
 * 
 * @package ALM
 */

?>

<?php get_header(); ?>

    <!-- MAIN -->
    <main id="404" class="main-error">
        <div class="error-content"></div>
        <p class="error-content_title">404</p>
        <p class="error-content_text">Oops, cette page n'existe pas.</p>
        <div class="project-header__container">
            <button id="backBtn" class="project-header__back-btn">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="project-header__back-btn__text">Retour</span>
            </button>
        </div>

<?php get_footer( 'alt' ); ?>