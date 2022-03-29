<?php
/**
 * Home-Page Template
 * 
 * @package ALM
 */

?>

<?php get_header(); ?>

        <!-- MAIN -->
        <!-- PART 1 - PROFILE -->
        <main id="home" class="main-index">
            <?php get_template_part( 'template-parts/components/hireme' ); ?>
            
            <section class="profile">

                <!-- HOME PICTURE - NAME - JOB TITLE -->
                <section data-anchor="section-part-home" class="profile__container profile__container--home container">

                    <div class="profile-content">

                        <div class="bg-container" id="bg-profile" style="background-image:url(<?php echo get_theme_mod( 'alm_bg_img' ); ?>);">
                            <div id="idContainer" class="ID-container rellax" data-rellax-speed="-1.5"
                            data-rellax-percentage=".8">
                                <h1 class="section-part ID-container__my-name">Angelina Lorieux-Machova</h1>
                                <p class="ID-container__job-title"><?php echo get_theme_mod( 'alm_slogan' ); ?></p>
                            </div>
                            <!-- PROFIL PICTURE -->
                            <div class="section-part picture-container">
                                <img src="<?php echo get_theme_mod( 'alm_profile_picture' ); ?>" alt="picture of Angelina Lorieux-Machova" class="picture-container__img">
                            </div>
                        </div>
                    </div>
                </section>


                <section class="profile__container profile__container--content container" id="profile">

                    <!-- PROFILE HEADER -->
                    <div class="profile-header">
                        <div class="quote-container">
                            <p id="helloWorld" class="quote-container__content">Hello World!</p>
                        </div>
                        <div class="profile-content__title-block">
                            <h2 id="profilTitle" class="profile-content__title-block__main-title titles-section"><?php echo get_theme_mod( 'alm_section_title-profile' ); ?></h2>
                        </div>
                    </div>


                    <!-- PROFILE MAIN / PRESENTATION & GOALS -->
                    <?php get_template_part( 'template-parts/presentation' ); ?>


                    <!-- PROFILE / FOOTER -->
                    <div class="profile-footer">
                        <div class="social-media-container">
                            <a href="<?php echo esc_url(get_theme_mod( 'alm_section_linkedin' )); ?>" class="fa fa-linkedin-square icon social-media-container__logo social-media-container__logo--linkedin"></a>

                            <?php $alm_download_active = get_theme_mod( 'alm_download_active', false ); 
			
                                if ( $alm_download_active ) :
                                ?>
                                    <a href="<?php echo get_theme_mod( 'alm_download_upload' ); ?>" class="social-media-container__link social-media-container__link--download btn-download" download>
                                        <img class="icon social-media-container__logo social-media-container__logo--download" src="<?php echo wp_get_attachment_image_url( ALM_THEME_DOWNLOAD_ICON ); ?>" alt="Download CV icon">
                                        <p class="social-media-container__link--text"><?php echo get_theme_mod( 'alm_download_text' ); ?></p>
                                    </a>
                                <?php endif; ?>
                                <a href="<?php echo esc_url(get_theme_mod( 'alm_section_github' )); ?>" class="fa fa-github icon social-media-container__logo social-media-container__logo--github"></a>
                                    
                        </div>
                    </div>
                </section>

            </section>

        <!-- PART 2 - SKILLS -->
            <section data-anchor="section-part-skills" class="section-part skills" id="skills">

                <div class="skills-container container">
                    <div class="skills-container--left">
                        <!-- HARD SKILLS -->
                        <section class="skills-section hard-skills">

                            <h2 class="skills-section__main-title skills-section__main-title--hard titles-section"><?php echo get_theme_mod( 'alm_section_title-hardskills' ); ?> <span class="colored-title"><?php echo get_theme_mod( 'alm_section_title-hardskills-colored' ); ?></span></h2>
                            
                            <!-- PROGRESS BAR HARD SKILL LIST (Animated) -->
                            <div class="hard-skills__list">

                            <?php get_template_part( 'template-parts/hardskills' ); ?>
                                
                            </div>

                        </section>
                    </div>

                    <div class="skills-container--right">

                        <!-- SOFT SKILLS -->
                        <section class="skills-section soft-skills">
                            <div class="skills-section__title-container soft-skills__title-container">
                                <h2 class="skills-section__main-title soft-skills__title titles-section"><?php echo get_theme_mod( 'alm_section_title-softskills' ); ?></h2>
                            </div>
                            
                            <?php get_template_part( 'template-parts/softskills' ); ?>
                                                            
                        </section>

                        <!-- MAD SKILLS -->
                        <section class="skills-section mad-skills">
                            <div class="skills-section__title-container mad-skills__title-container">
                                <h2 class="skills-section__main-title mad-skills__title titles-section"><?php echo get_theme_mod( 'alm_section_title-madskills' ); ?></h2>
                            </div>
                            
                            <?php get_template_part( 'template-parts/madskills' ); ?>

                        </section>
                    </div>
                        
                </div>

            </section>

        <!-- PART 3 - EDUCATION -->
            <section data-anchor="section-part-education" class="section-part education" id="education">

                <div class="education__main-title-container">
                    <h2 class="education__main-title titles-section"><?php echo get_theme_mod( 'alm_section_title-education' ); ?> <span class="colored-title"><?php echo get_theme_mod( 'alm_section_title-education-colored' ); ?></span></h2>
                </div>

                <div class="education__container">

                    <!-- LIST -->
                    <ul id="educationList" class="education-timeline">
                    
                        <!-- 2018 - 2019 / OCLOCK -->
    
                        <!-- TEXT TOP -->
                        <li class="show education-list-item education-list-item--top education-list-item--oclock education-list-item--oclock--top">
                            <div class="education-list-item__dates-panel-container education-list-item__dates-panel-container--top">
                                <div class="education-list-item__date-container education-list-item__date-container--top education-list-item__date-container--2019 education-list-item__date-container--formation">
                                    <p class="education-list-item__date-content education-list-item__date-content--formation">2019</p>
                                </div>
                            </div>
                            <div class="education-list-item__text-panel-container education-list-item__text-panel-container--formation education-list-item__text-panel-container--top">
                                <div class="education-list-item__content education-list-item__content--top education-list-item__content--top--formation">
                                    <p class="education-list-item__title"><?php echo get_theme_mod( 'alm_education_oclock-top' ); ?></p>
                                </div>
                            </div>
                        </li>

                        <!-- TEXT BOTTOM -->
                        <li class="show education-list-item education-list-item--bottom education-list-item--oclock">
                            <div class="education-list-item__text-panel-container education-list-item__text-panel-container--bottom">
                                <div class="education-list-item__content education-list-item__content--bottom education-list-item__content--bottom--formation">
                                    <p class="education-list-item__text"><?php echo get_theme_mod( 'alm_education_oclock-bottom' ); ?> <strong><?php echo get_theme_mod( 'alm_education_oclock-bottom-tag' ); ?></strong> <br><?php echo get_theme_mod( 'alm_education_oclock-bottom-label' ); ?></p>
                                </div>
                            </div>
                            <div class="education-list-item__dates-panel-container education-list-item__dates-panel-container--bottom">
                                <div class="education-list-item__date-container education-list-item__date-container--bottom education-list-item__date-container--2018 education-list-item__date-container--formation">
                                    <p class="education-list-item__date-content education-list-item__date-content--formation">2018</p>
                                </div>
                            </div>
                        </li>

                        <!-- 2015 / ESEC DIPLOMA EDITING -->
                        
                        
                        <!-- TEXT TOP -->
                        <li class="show education-list-item education-list-item--top education-list-item--esec">
                            <div class="education-list-item__dates-panel-container education-list-item__dates-panel-container--top">
                                <div class="education-list-item__date-container education-list-item__date-container--top education-list-item__date-container--2015 education-list-item__date-container--diploma">
                                    <p class="education-list-item__date-content education-list-item__date-content--diploma">2015</p>
                                </div>
                            </div>
                            <div class="education-list-item__text-panel-container education-list-item__text-panel-container--top">
                                <div class="education-list-item__content education-list-item__content--top education-list-item__content--top--diploma">
                                    <p class="education-list-item__title"><?php echo get_theme_mod( 'alm_education_esec-top' ); ?></p>
                                </div>
                            </div>
                        </li>

                        <!-- TEXT BOTTOM -->
                        <li class="show education-list-item education-list-item--bottom education-list-item--esec">
                            <div class="education-list-item__text-panel-container education-list-item__text-panel-container--bottom">
                                <div class="education-list-item__content education-list-item__content--bottom education-list-item__content--bottom--esec education-list-item__content--bottom--diploma">
                                    <p class="education-list-item__text"><?php echo get_theme_mod( 'alm_education_esec-bottom' ); ?></p>
                                </div>
                            </div>
                        </li>

                        <!-- 2010 - 2011 / EF NY -->
                        
                        <!-- TEXT TOP -->
                        <li class="show education-list-item education-list-item--top education-list-item--ef">
                            <div class="education-list-item__dates-panel-container education-list-item__dates-panel-container--top">
                                <div class="education-list-item__date-container education-list-item__date-container--top education-list-item__date-container--2011 education-list-item__date-container--formation">
                                    <p class="education-list-item__date-content education-list-item__date-content--formation">2011</p>
                                </div>
                            </div>
                            <div class="education-list-item__text-panel-container education-list-item__text-panel-container--formation education-list-item__text-panel-container--top">
                                <div class="education-list-item__content education-list-item__content--top education-list-item__content--top--formation">
                                    <p class="education-list-item__title"><?php echo get_theme_mod( 'alm_education_ef-top' ); ?></p>
                                </div>
                            </div>
                        </li>

                        <!-- TEXT BOTTOM -->
                        <li class="show education-list-item education-list-item--bottom education-list-item--ef">
                            <div class="education-list-item__text-panel-container education-list-item__text-panel-container--bottom">
                                <div class="education-list-item__content education-list-item__content--bottom education-list-item__content--bottom--formation">
                                    <p class="education-list-item__text"><?php echo get_theme_mod( 'alm_education_ef-bottom' ); ?></p>
                                </div>
                            </div>
                            <div class="education-list-item__dates-panel-container education-list-item__dates-panel-container--bottom">
                                <div class="education-list-item__date-container education-list-item__date-container--bottom education-list-item__date-container--2010-ef education-list-item__date-container--formation">
                                    <p class="education-list-item__date-content education-list-item__date-content--formation">2010</p>
                                </div>
                            </div>
                        </li>

                    <!-- 2010 / BAC - HIGH SCHOOL DIPLOMA -->
                        
                        <!-- TEXT TOP -->
                        <li class="show education-list-item education-list-item--top education-list-item--bac">
                            <div class="education-list-item__text-panel-container education-list-item__text-panel-container--top">
                                <div class="education-list-item__content education-list-item__content--top education-list-item__content--top--bac education-list-item__date-content--top--diploma">
                                    <p class="education-list-item__title"><?php echo get_theme_mod( 'alm_education_bac-top' ); ?></p>
                                </div>
                            </div>
                        </li>

                        <!-- TEXT BOTTOM -->
                        <li class="show education-list-item education-list-item--bottom education-list-item--bac">
                            <div class="education-list-item__text-panel-container education-list-item__text-panel-container--bottom">
                                <div class="education-list-item__content education-list-item__content--bottom education-list-item__content--bottom--diploma">
                                    <p class="education-list-item__text"><?php echo get_theme_mod( 'alm_education_bac-bottom' ); ?></p>
                                </div>
                            </div>
                            <div class="education-list-item__dates-panel-container education-list-item__dates-panel-container--bottom">
                                <div class="education-list-item__date-container education-list-item__date-container--bottom education-list-item__date-container--2010-bac education-list-item__date-container--diploma">
                                    <p class="education-list-item__date-content education-list-item__date-content--diploma">2010</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

        <!-- PART 4 - PROFESSIONNAL EXPERIENCE -->
            <section data-anchor="section-part-formation" class="section-part formation" id="formation">
                <h2 class="formation__main-title titles-section"><?php echo get_theme_mod( 'alm_section_title-experience' ); ?> <span class="colored-title"><?php echo get_theme_mod( 'alm_section_title-experience-colored' ); ?></span></h2>

                <section class="formation-timeline">
                    <div class="formation-timeline__container container">

                        <!-- CURRENTLY -->
                        <div class="formation-currently">
                            <h4 class="show formation-currently__title"><?php echo get_theme_mod( 'alm_experience_now' ); ?></h4>
                            <p class="show formation-currently__content"><?php echo get_theme_mod( 'alm_experience_content' ); ?></p>
                            <img src="<?php echo wp_get_attachment_image_url( ALM_THEME_ARROW_HEAD ); ?>" alt="" class="formation-currently__icon-arrow icon">
                        </div>

                        <!-- LIST -->
                        <?php get_template_part( 'template-parts/experience' ); ?>
                            

                        <div class="arrow-end-container">
                            <div class="arrow-end-container__content"></div>
                        </div>
                    </div>
                </section>
            </section>

        <!-- PART 5 - PORTFOLIO -->
            <section data-anchor="section-part-portfolio" class="section-part portfolio" id="portfolio">

                <h2 class="portfolio__main-title titles-section"><span class="colored-title--white"><?php echo get_theme_mod( 'alm_section_title-portfolio' ); ?> </span><span class="colored-title"><?php echo get_theme_mod( 'alm_section_title-portfolio-colored' ); ?></span></h2>

                <!-- PORTFOLIO ITEMS -->
                <?php get_template_part( 'template-parts/portfolio' ); ?>

                <?php
                
                // Récupération du contenu de la page archive via son id au cas ou le slug change à cause de la version anglaise
                $alm_archive = new WP_Query([
                    'page_id' => 239
                ]); 

                if ( $alm_archive->have_posts() ) :
                    $alm_archive->the_post();

                    $alm_more_btn_active = get_theme_mod( 'alm_portfolio_btn_active', true );
                    if ( $alm_more_btn_active ) :
                ?>
                    <div class="portfolio__more-projects-container">
                        <a href="<?php the_permalink(); ?>" class="portfolio__more-projects-container__link">+</a>
                    </div>
                <?php wp_reset_postdata(); ?>
                    <?php endif ?>
                <?php endif ?>

            </section>

        <!-- PART 6 - CONTACT -->
            <!-- V2 -->
            <section data-anchor="section-part-contact" class="section-part contact" id="contact">
                
                <h2 class="contact-main-title titles-section">Contact</h2>
                <aside class="contact-aside">
                    <div class="contact-aside__block">
                        <p class="contact-aside__content">
                            <?php echo get_theme_mod( 'alm_section_aside' ); ?>
                        </p>
                    </div>
                </aside>

                <!-- CONTACT FORM -->
                <div class="form-container">
                    <?php get_template_part( 'template-parts/form' ); ?>
                </div>
            </section>

<?php get_footer(); ?>