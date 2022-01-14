<?php

/**
 * Template Name: Contact
 * Template Post Type: Page
 * 
 * @package ALM
 */
?>

<?php get_header(); ?>


<main id="contactPage">
    <div class="contact-page-container">
        <a href="<?php echo get_theme_mod( 'alm_section_linkedin' ); ?>">
            <div class="contact-page-container__item fa fa-linkedin"></div>
        </a>
        <a href="mailto:<?php echo get_theme_mod( 'alm_section_email' ); ?>">
            <div class="contact-page-container__item fa fa-paper-plane"></div>
        </a>
    </div>

<div class="form-container form-container--contact-page">
<?php get_template_part( 'template-parts/form' ); ?>

<?php
 get_footer( 'alt' );