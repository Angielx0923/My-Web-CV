<?php get_header(); ?>

        <!-- MAIN -->
        <!-- PART 1 - PROFILE -->
        <main id="home" class="main-index">
            
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
                            <a href="http://www.linkedin.com/in/a-lx/" class="fa fa-linkedin-square icon social-media-container__logo social-media-container__logo--linkedin"></a>

                            <?php $alm_download_active = get_theme_mod( 'alm_download_active', false ); 
			
                                if ( $alm_download_active ) :
                                ?>
                                    <a href="/chemin/vers/mon/fichier.jpg" class="social-media-container__link social-media-container__link--download btn-download">
                                        <img class="icon social-media-container__logo social-media-container__logo--download" src="<?php echo wp_get_attachment_image_url( ALM_THEME_DOWNLOAD_ICON ); ?>" alt="Download CV icon">
                                        <p class="social-media-container__link--text"><?php echo get_theme_mod( 'alm_download_text' ); ?></p>
                                    </a>
                                <?php endif; ?>
                                <a href="https://github.com/" class="fa fa-github icon social-media-container__logo social-media-container__logo--github"></a>
                                    
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
                            <h4 class="show formation-currently__title">Actuellement</h4>
                            <p class="show formation-currently__content">En recherche active d'un super job dans le dev aux USA !</p>
                            <img src="<?php echo wp_get_attachment_image_url( ALM_THEME_ARROW_HEAD ); ?>" alt="" class="formation-currently__icon-arrow icon">
                        </div>

                    <!-- LIST -->
                        <ul class="formation-timeline-list">

                            <!-- 2021 -->
                            <li class="formation-timeline-list__item formation-timeline-list__item--date">
                                <div class="formation-timeline-date-block formation-timeline-date-block--2020">
                                    <time class="show formation-timeline-date-block__content formation-timeline-date-block__content--2020" datetime="2020">2021</time>
                                </div>
                            </li>

                            <!-- LEFT -->
                            <li class="show formation-timeline-list__item formation-timeline-list__item">
                                <div class="formation-timeline-panel-container formation-timeline-panel-container--left formation-timeline-panel-container--hypnose">
                                    <div class="formation-timeline-panel-date-block">
                                        <p class="formation-timeline-panel-date-block__content">Été 2021</p>
                                    </div>
                                    <div class="formation-timeline-panel-content">
                                        <h5 class="formation-timeline-panel-content__job-title">Design et développement du site mariemachova.com</h5>
                                        <div class="formation-timeline-panel-content__info-block">
                                            <p class="formation-timeline-panel-content__time-length"><span class="formation-inner-title">Durée :</span> 2.5 mois</p>
                                            <p class="formation-timeline-panel-content__type"><span class="formation-inner-title">Type :</span> Site professionnel pour un cabinet d'hypnose</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- 2020 -->
                            <li class="formation-timeline-list__item formation-timeline-list__item--date">
                                <div class="formation-timeline-date-block formation-timeline-date-block--2020">
                                    <time class="show formation-timeline-date-block__content formation-timeline-date-block__content--2020" datetime="2020">2020</time>
                                </div>
                            </li>

                            <!-- RIGHT -->
                            <li class="show formation-timeline-list__item formation-timeline-list__item">
                                <div class="formation-timeline-panel-container formation-timeline-panel-container--right formation-timeline-panel-container--mycv">
                                    <div class="formation-timeline-panel-date-block">
                                        <p class="formation-timeline-panel-date-block__content">Mai 2020 &rarr; Sept. 2020</p>
                                    </div>
                                    <div class="formation-timeline-panel-content">
                                        <h5 class="formation-timeline-panel-content__job-title">Design et développement de mon site web personnel</h5>
                                        <div class="formation-timeline-panel-content__info-block">
                                            <p class="formation-timeline-panel-content__time-length"><span class="formation-inner-title">Durée :</span> 3.5 mois</p>
                                            <p class="formation-timeline-panel-content__type"><span class="formation-inner-title">Type :</span> CV online / Portfolio</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- 2019 -->
                            <li class="show formation-timeline-list__item formation-timeline-list__item--date">
                                <div class="formation-timeline-date-block formation-timeline-date-block--2019">
                                    <time class="formation-timeline-date-block__content formation-timeline-date-block__content--2020" datetime="2019">2019</time>
                                </div>
                            </li>

                            <!-- LEFT -->
                            <li class="show formation-timeline-list__item formation-timeline-list__item">
                                <div class="formation-timeline-panel-container formation-timeline-panel-container--left formation-timeline-panel-container--oroadtrip">
                                    <div class="formation-timeline-panel-date-block">
                                        <p class="formation-timeline-panel-date-block__content">Mai 2019</p>
                                    </div>
                                    <div class="formation-timeline-panel-content">
                                        <h5 class="formation-timeline-panel-content__job-title">Développement du site O'Roadtrip</h5>
                                        <div class="formation-timeline-panel-content__info-block">
                                            <p class="formation-timeline-panel-content__time-length"><span class="formation-inner-title">Durée :</span> 1 mois</p>
                                            <p class="formation-timeline-panel-content__type"><span class="formation-inner-title">Type :</span> Projet de fin de formation</p>
                                            <p class="formation-timeline-panel-content__team"><span class="formation-inner-title">Équipe :</span> 4 développeurs</p>
                                            <p class="formation-timeline-panel-content__role"><span class="formation-inner-title">Mon rôle :</span> Product Owner</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- RIGHT -->
                            <li class="show formation-timeline-list__item formation-timeline-list__item">
                                <div class="formation-timeline-panel-container formation-timeline-panel-container--right formation-timeline-panel-container--intermittence">
                                    <div class="formation-timeline-panel-date-block">
                                        <p class="formation-timeline-panel-date-block__content">Sept. 2016 &rarr; Mai 2019</p>
                                    </div>
                                    <div class="formation-timeline-panel-content">
                                        <h5 class="formation-timeline-panel-content__job-title">Intermittente du spectacle : Monteuse vidéo / assistante de post-production</h5>
                                        <div class="formation-timeline-panel-content__info-block">
                                            <p class="formation-timeline-panel-content__time-length"><span class="formation-inner-title">Durée :</span> 3.5 ans</p>
                                            <p class="formation-timeline-panel-content__field"><span class="formation-inner-title">Secteurs :</span> Publicité, institutionnel & courts-métrages</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- 2016 -->
                            <li class="show formation-timeline-list__item formation-timeline-list__item--date">
                                <div class="formation-timeline-date-block formation-timeline-date-block--2016">
                                    <time class="formation-timeline-date-block__content formation-timeline-date-block__content--2016" datetime="2016">2016</time>
                                </div>
                            </li>

                            <!-- LEFT -->
                            <li class="show formation-timeline-list__item formation-timeline-list__item">
                                <div class="formation-timeline-panel-container formation-timeline-panel-container--left formation-timeline-panel-container--editor">
                                    <div class="formation-timeline-panel-date-block">
                                        <p class="formation-timeline-panel-date-block__content">Fév. 2016 &rarr; Août 2016</p>
                                    </div>
                                    <div class="formation-timeline-panel-content">
                                        <h5 class="formation-timeline-panel-content__job-title">Monteuse vidéo</h5>
                                        <div class="formation-timeline-panel-content__info-block">
                                            <p class="formation-timeline-panel-content__time-length"><span class="formation-inner-title">Durée :</span> 6 mois</p>
                                            <p class="formation-timeline-panel-content__field"><span class="formation-inner-title">Secteur :</span> Publicité</p>
                                            <p class="formation-timeline-panel-content__boss"><span class="formation-inner-title">Employeur :</span> RITA Production (BETC)</p>
                                            <p class="formation-timeline-panel-content__localisation"><span class="formation-inner-title">Lieu :</span> Paris 10e puis Pantin</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- 2015 -->
                            <li class="show formation-timeline-list__item formation-timeline-list__item--date">
                                <div class="formation-timeline-date-block formation-timeline-date-block--2015">
                                    <time class="formation-timeline-date-block__content formation-timeline-date-block__content--2015" datetime="2015">2015</time>
                                </div>
                            </li>

                            <!-- RIGHT -->
                            <li class="show formation-timeline-list__item formation-timeline-list__item">
                                <div class="formation-timeline-panel-container formation-timeline-panel-container--right formation-timeline-panel-container--editing-internship">
                                    <div class="formation-timeline-panel-date-block">
                                        <p class="formation-timeline-panel-date-block__content">Juin 2015 &rarr; Déc. 2015</p>
                                    </div>
                                    <div class="formation-timeline-panel-content">
                                        <h5 class="formation-timeline-panel-content__job-title">Stage Montage vidéo / assistante de post-production</h5>
                                        <div class="formation-timeline-panel-content__info-block">
                                            <p class="formation-timeline-panel-content__time-length"><span class="formation-inner-title">Durée :</span> 6 mois</p>
                                            <p class="formation-timeline-panel-content__field"><span class="formation-inner-title">Secteur :</span> Publicité</p>
                                            <p class="formation-timeline-panel-content__boss"><span class="formation-inner-title">Employeur :</span> RITA Production (BETC)</p>
                                            <p class="formation-timeline-panel-content__localisation"><span class="formation-inner-title">Lieu :</span> Paris 10e</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- 2014 -->  
                            <li class="show formation-timeline-list__item formation-timeline-list__item--date">
                                <div class="formation-timeline-date-block formation-timeline-date-block--2014">
                                    <time class="formation-timeline-date-block__content formation-timeline-date-block__content--2014" datetime="2014">2014</time>
                                </div>
                            </li>

                            <!-- LEFT -->
                            <li class="show formation-timeline-list__item formation-timeline-list__item">
                                <div class="formation-timeline-panel-container formation-timeline-panel-container--left formation-timeline-panel-container--monoprix">
                                    <div class="formation-timeline-panel-date-block">
                                        <p class="formation-timeline-panel-date-block__content">2012 &rarr; 2014</p>
                                    </div>
                                    <div class="formation-timeline-panel-content">
                                        <h5 class="formation-timeline-panel-content__job-title">Responsable adjointe vente</h5>
                                        <div class="formation-timeline-panel-content__info-block">
                                            <p class="formation-timeline-panel-content__time-length"><span class="formation-inner-title">Durée :</span> 2 ans / CDI temps partiel</p>
                                            <p class="formation-timeline-panel-content__field"><span class="formation-inner-title">Secteur :</span> Grande distribution</p>
                                            <p class="formation-timeline-panel-content__boss"><span class="formation-inner-title">Employeur :</span> Monoprix</p>
                                            <p class="formation-timeline-panel-content__localisation"><span class="formation-inner-title">Lieu :</span> Fontenay-sous-bois (94)</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
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
                <div class="portfolio-container">

                    <div class="portfolio-container__block" id="projectItem" style="background-image:url(img/5-desktop.jpg)">
                        <a href="#" class="portfolio-container__link portfolio-container__link--?">
                            <h3 class="portfolio-container__title">ALM</h3>
                            <p class="portfolio-container__content">Mon site web personnel</p>
                        </a>
                        <a class="portfolio-container__info-link" id="infoBtn" href="project.html">
                            <p class="portfolio-container__info-link__text">+ d'infos</p>
                        </a>
                    </div>

                    <div class="portfolio-container__block " id="bg-oroadtrip" style="background-image:url(img/portfolio/oroadtrip-desktop.jpg)">
                        <a href="#" class="portfolio-container__link portfolio-container__link--oroadtrip">
                            <h3 class="portfolio-container__title">O'Roadtrip</h3>
                            <p class="portfolio-container__content">Projet de fin de formation</p>
                        </a>
                        <a class="portfolio-container__info-link" href="project.html">
                            <p class="portfolio-container__info-link__text">+ d'infos</p>
                        </a>
                    </div>

                    <div class="portfolio-container__block" id="bg-hypnosis" style="background-image:url(img/portfolio/hypnose/hypnose-desktop.jpg)">
                        <a href="#" class="portfolio-container__link portfolio-container__link--?">
                            <h3 class="portfolio-container__title">Site hypnose</h3>
                            <p class="portfolio-container__content">Projet Professionnel</p>
                        </a>
                        <a class="portfolio-container__info-link" href="project.html">
                            <p class="portfolio-container__info-link__text">+ d'infos</p>
                        </a>
                    </div>
                </div>

                <div class="portfolio__more-projects-container">
                    <a href="archive.html" class="portfolio__more-projects-container__link">+</a>
                </div>

            </section>

        <!-- PART 6 - CONTACT -->
            <!-- V2 -->
            <section data-anchor="section-part-contact" class="section-part contact" id="contact">
                
                <h2 class="contact-main-title titles-section">Contact</h2>
                <aside class="contact-aside">
                    <div class="contact-aside__block">
                        <p class="contact-aside__content">Un commentaire ?</p>
                        <p class="contact-aside__content">Un conseil ? Une question ?</p>
                        <p class="contact-aside__content contact-aside__content">Toute suggestion est la bienvenue !</p>
                    </div>
                </aside>

                <div class="form-container">
                    <!-- Page de renvoi et méthode à définir -->
                    <form action="/" method="" class="contact-form">

                        <!-- NAME -->
                        <div class="contact-form__block">
                            <input type="text" id="name" name="user-name" placeholder="Ross Geller" class="contact-form__input">
                            <label for="name" class="contact-form__label">Nom</label>
                        </div>

                        <!-- EMAIL -->
                        <div class="contact-form__block">
                            <input type="email" id="mail" name="user-mail" placeholder="gellerosor@paleontologist.com" class="contact-form__input">
                            <label for="mail" class="contact-form__label">Email</label>
                        </div>

                        <!-- SUBJECT -->
                        <div class="contact-form__block">
                            <input type="text" id="subject" name="user-subject" placeholder="Who ate my sandwich?" class="contact-form__input">
                            <label for="subject" class="contact-form__label">Sujet</label>
                        </div>

                        <!-- MESSAGE -->
                        <div class="contact-form__block">
                            <textarea id="msg" name="user-message" class="contact-form__input contact-form__textarea"></textarea>
                            <label for="msg" class="contact-form__label">Message</label>
                        </div>
                        <button type="submit" value="submit" class="contact-form__button btn">Envoyer</button>
                    </form>
                </div>
            </section>

<?php get_footer(); ?>