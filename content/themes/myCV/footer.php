<?php
/**
 * Footer Template
 * 
 * @package ALM
 */

?>

</main>

<!-- FOOTER -->
    <!-- PART 7 - INFO -->
    <footer class="footer">
        <section class="section info">

            <div class="info-container">

                <div class="info-main-title-container">
                    <h2 class="info-main-title-container__text titles-section"><?php echo get_theme_mod( 'alm_section_title-info' ); ?></h2>
                </div>
                
                <!-- PARTIE INFORMATIONS -->
                <div class="info-container-panel">
                    
                    <!-- INFORMATIONS PERSONNELLES -->
                    <address class="info-contact">

                        <?php $alm_section_location_active = get_theme_mod( 'alm_section_location_active', false ); 
                            if ( $alm_section_location_active ) :
                        ?> 
                            <div class="info-contact-block">
                                <!-- <img src="img/Icons/pin_mark.png" alt="pin icon" class="info-contact__icon icon"> -->
                                <i class="info-contact__icon fa fa-map-marker" aria-hidden="true"></i>
                                <p class="info-contact__title info-contact__localisation"><?php echo get_theme_mod( 'alm_section_title-location' ); ?><span class="double-dot">:</span></p>
                                <p class="info-contact__content info-contact__city"><?php echo get_theme_mod( 'alm_section_location' ); ?></p>
                            </div>
                        <?php endif; ?>
                        <!-- LINKEDIN -->
                        <div class="info-contact-block">
                            <a href="<?php echo esc_url(get_theme_mod( 'alm_section_linkedin' )); ?>" aria-label="LinkedIn" class="info-links__link info-links__link-linkedin">
                                <i class="info-contact__icon fa fa-linkedin-square" aria-hidden="true"></i>
                                <p class="info-contact__content info-contact__linkedin">LinkedIn - &nbsp;</p>
                                <!-- Faire disparaitre l'url pour la version mobile -->
                                <p class="info-link__url">www.linkedin.com/in/a-lm/</p>
                            </a>
                        </div>
                        <!-- MAIL -->
                        <div class="info-contact-block">
                            <i class="info-contact__icon fa fa-paper-plane" aria-hidden="true"></i>
                            <p class="info-contact__title info-contact__email">Email <span class="double-dot">:</span></p>
                            <a href="mailto:<?php echo get_theme_mod( 'alm_section_email' ); ?>" class="info-contact__content info-contact__email-adress"><?php echo get_theme_mod( 'alm_section_email' ); ?></a>
                        </div>
                    </address>

                    <!-- INFORMATIONS PROFESSIONNELLES (LIENS) -->
                    <div class="info-links">
                        <!-- GITHUB -->
                        <div class="info-link-block">
                            <a href="<?php echo esc_url(get_theme_mod( 'alm_section_github' )); ?>" aria-label="GitHub" class="info-links__link info-links__link-github">
                                <i class="info-link__icon fa fa-github" aria-hidden="true"></i>
                                <p class="info-link__content info-link__github">GitHub - </p>
                                <!-- Faire disparaitre l'url pour la version mobile -->
                                <p class="info-link__url">Angielx0923</p>
                            </a>
                        </div>
                        <!-- CV à télécharger - CHEMIN A REMPLIR -->
                        <?php $alm_download_active = get_theme_mod( 'alm_download_active', false ); 
			
                            if ( $alm_download_active ) :
                            ?>
                                <div class="info-link-block">
                                    <a href="<?php echo get_theme_mod( 'alm_download_upload' ); ?>" download aria-label="Download resume" class="info-links__link info-links__link-cv">
                                        <i class="info-link__icon fa fa-download" aria-hidden="true"></i>
                                        <p class="info-link__content info-link__cv"><?php echo get_theme_mod( 'alm_download_text' ); ?></p>
                                    </a>
                                </div>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- PARTIE COPYRIGHT -->
        <section class="copyright">
            <?php get_template_part( 'template-parts/components/copyrights' ); ?>
        </section>
    </footer>
</div>
<div class="dark-overlay"></div>

<!-- SCRIPTS JS -->
<?php wp_footer(); ?>
</body>
</html>
