<?php
/**
 * Footer Alternative Template
 * 
 * @package ALM
 */

?>
       
       <!-- PROJECT / FOOTER -->
       <?php $errorclass  = '--yellow';
             $black       = '--black';
             $style       = 'style="position: relative"';
             $socialmedia = 'style="display: none"';
       ?>

            <footer class="footer-error<?php if ( is_page_template( 'archive.php' ) || is_tax() ) : echo $black; endif; ?>" <?php if ( !is_404() ) : echo $style; endif; ?>>
                <div class="profile-footer">
                    <div class="social-media-container" <?php if ( is_page( 'contact' ) ) : echo $socialmedia; endif; ?>>
                        <div class="social-media-container__link social-media-container__link--linkedin">
                            <a href="<?php echo esc_url(get_theme_mod( 'alm_section_linkedin' )); ?>" class="fa fa-linkedin-square icon social-media-container__logo<?php if ( is_404() || is_page_template( 'archive.php' ) ) : echo $errorclass; endif; ?> social-media-container__logo--linkedin"></a>
                        </div>
                        <div class="social-media-container__link social-media-container__link--github">
                            <a href="<?php echo esc_url(get_theme_mod( 'alm_section_github' )); ?>" class="fa fa-github icon social-media-container__logo<?php if ( is_404() || is_page_template( 'archive.php' ) ) : echo $errorclass; endif; ?> social-media-container__logo--github"></a>
                        </div>
                    </div>
                </div>
            </footer>
        </main>

    <!-- FOOTER -->
        <!-- PART 7 - INFO -->
        <footer class="footer">
                    <!-- PARTIE COPYRIGHT -->
            <section class="copyright copyright--project">

                <div class="copyright-container">
                    <!-- Dynamiser et rendre automatique le changement de date -->
                    <p class="copyright__content">&copy; Copyright <?= date( 'Y' ) ?> - Angelina Lorieux-Machova. Tous droits réservés</p>
                </div>

            </section>
        </footer>
    </div>
    <div class="dark-overlay"></div>
    <?php wp_footer(); ?>
</body>
</html>