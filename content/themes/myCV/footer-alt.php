       <!-- PROJECT / FOOTER -->
       <?php $errorclass = '--error';
             $style   = 'style="position: relative"';
       ?>

            <footer class="footer-error" <?php if ( is_single() ) : echo $style; endif; ?>>
                <div class="profile-footer">
                    <div class="social-media-container">
                        <div class="social-media-container__link social-media-container__link--linkedin">
                            <a href="http://www.linkedin.com/in/a-lx/" class="fa fa-linkedin-square icon social-media-container__logo<?php if ( is_404() ) : echo $errorclass; endif; ?> social-media-container__logo--linkedin"></a>
                        </div>
                        <div class="social-media-container__link social-media-container__link--github">
                            <a href="https://github.com/" class="fa fa-github icon social-media-container__logo<?php if ( is_404() ) : echo $errorclass; endif; ?> social-media-container__logo--github"></a>
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