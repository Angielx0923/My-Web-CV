<?php 

function alm_customize_register( $wp_customize ) {

     // PANEL
     $wp_customize->add_panel(
        'alm_theme_configuration',
        [
            'title'     => 'Configuration du Thème',
            'priority'  => 1
        ]
    );

/*---------------------------------------------
               PROFILE SECTION
---------------------------------------------*/

    $wp_customize->add_section(
        'alm_profile',
        [
            'panel' => 'alm_theme_configuration',
            'title' => 'Profile'
        ]
    );

    // SLOGAN
    $wp_customize->add_setting(
        'alm_slogan', // ID
        [
            'default' => 'Le jour, je design et développe de jolis sites cools et j\'adore ça.<br>La nuit, je poursuis le rêve Américain et cherche un job aux USA.'
        ]
    );

    $wp_customize->add_control(
        'alm_slogan', //ID
        [
            'section' => 'alm_profile',
            'label'   => 'Slogan',
            'type'    => 'textarea'
        ]
    );

    // BACKGROUND IMG
    $wp_customize->add_setting(
        'alm_bg_img', // ID
    );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'alm_bg_img', // ID
        [
            'section'       => 'alm_profile', // Is linked to this section
            'label'         => 'Image de fond',
            'button_labels' =>
            [
                'select' => 'selectionner l\'image',
                'remove' => 'supprimer l\'image',
                'change' => 'changer l\'image'
            ]      
        ]
    ));

    // PROFILE PICTURE
    $wp_customize->add_setting(
        'alm_profile_picture' // ID
    );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,
        'alm_profile_picture', // ID
        [
            'section' => 'alm_profile', // Is linked to this section
            'label'   => 'Photo de profil',
            'button_labels' =>
            [
                'select' => 'selectionner l\'image',
                'remove' => 'supprimer l\'image',
                'change' => 'changer l\'image'
            ]    
        ]
    ));

/*---------------------------------------------
                SECTIONS TITLES
---------------------------------------------*/

    $wp_customize->add_section(
        'alm_sections_titles',
        [
            'panel' => 'alm_theme_configuration',
            'title' => 'Titres des sections'
        ]
    );

    // PROFILE
    $wp_customize->add_setting(
        'alm_section_title-profile', // ID
        [
            'default' => 'Profil'
        ]
    );

    $wp_customize->add_control(
        'alm_section_title-profile', //ID
        [
            'section' => 'alm_sections_titles',
            'label'   => 'Titre section profile',
            'type'    => 'textarea'
        ]
    );

    // HARD SKILLS
    $wp_customize->add_setting(
        'alm_section_title-hardskills', // ID
        [
            'default' => 'Hard'
        ]
    );

    $wp_customize->add_control(
        'alm_section_title-hardskills', //ID
        [
            'section' => 'alm_sections_titles',
            'label'   => 'Titre section hard skills',
            'type'    => 'textarea'
        ]
    );

    // HARD SKILLS COLORED
    $wp_customize->add_setting(
        'alm_section_title-hardskills-colored', // ID
        [
            'default' => 'skills'
        ]
    );

    $wp_customize->add_control(
        'alm_section_title-hardskills-colored', //ID
        [
            'section' => 'alm_sections_titles',
            'label'   => 'Titre section hard skills coloré',
            'type'    => 'textarea'
        ]
    );

    // SOFT SKILLS
    $wp_customize->add_setting(
        'alm_section_title-softskills', // ID
        [
            'default' => 'Soft skills'
        ]
    );

    $wp_customize->add_control(
        'alm_section_title-softskills', //ID
        [
            'section' => 'alm_sections_titles',
            'label'   => 'Titre section soft skills',
            'type'    => 'textarea'
        ]
    );

    // MAD SKILLS
    $wp_customize->add_setting(
        'alm_section_title-madskills', // ID
        [
            'default' => 'Mad skills'
        ]
    );

    $wp_customize->add_control(
        'alm_section_title-madskills', //ID
        [
            'section' => 'alm_sections_titles',
            'label'   => 'Titre section mad skills',
            'type'    => 'textarea'
        ]
    );

    // EDUCATION
    $wp_customize->add_setting(
        'alm_section_title-education', // ID
        [
            'default' => 'Mes'
        ]
    );

    $wp_customize->add_control(
        'alm_section_title-education', //ID
        [
            'section' => 'alm_sections_titles',
            'label'   => 'Titre section formations',
            'type'    => 'textarea'
        ]
    );

    // EDUCATION COLORED
    $wp_customize->add_setting(
        'alm_section_title-education-colored', // ID
        [
            'default' => 'formations'
        ]
    );

    $wp_customize->add_control(
        'alm_section_title-education-colored', //ID
        [
            'section' => 'alm_sections_titles',
            'label'   => 'Titre section formations coloré',
            'type'    => 'textarea'
        ]
    );

    // EXPERIENCE
    $wp_customize->add_setting(
        'alm_section_title-experience', // ID
        [
            'default' => 'Mon'
        ]
    );

    $wp_customize->add_control(
        'alm_section_title-experience', //ID
        [
            'section' => 'alm_sections_titles',
            'label'   => 'Titre section parcours',
            'type'    => 'textarea'
        ]
    );

    // EXPERIENCE COLORED
    $wp_customize->add_setting(
        'alm_section_title-experience-colored', // ID
        [
            'default' => 'parcours'
        ]
    );

    $wp_customize->add_control(
        'alm_section_title-experience-colored', //ID
        [
            'section' => 'alm_sections_titles',
            'label'   => 'Titre section parcours coloré',
            'type'    => 'textarea'
        ]
    );

    // PORTFOLIO
    $wp_customize->add_setting(
        'alm_section_title-portfolio', // ID
        [
            'default' => 'Mon'
        ]
    );

    $wp_customize->add_control(
        'alm_section_title-portfolio', //ID
        [
            'section' => 'alm_sections_titles',
            'label'   => 'Titre section portfolio',
            'type'    => 'textarea'
        ]
    );

    // PORTFOLIO COLORED
    $wp_customize->add_setting(
        'alm_section_title-portfolio-colored', // ID
        [
            'default' => 'portfolio'
        ]
    );

    $wp_customize->add_control(
        'alm_section_title-portfolio-colored', //ID
        [
            'section' => 'alm_sections_titles',
            'label'   => 'Titre section portfolio coloré',
            'type'    => 'textarea'
        ]
    );

    // INFORMATIONS
    $wp_customize->add_setting(
        'alm_section_title-info', // ID
        [
            'default' => 'Mes informations'
        ]
    );

    $wp_customize->add_control(
        'alm_section_title-info', //ID
        [
            'section' => 'alm_sections_titles',
            'label'   => 'Titre section informations',
            'type'    => 'textarea'
        ]
    );

/*---------------------------------------------
              DOWNLOAD CV SECTIONS
---------------------------------------------*/

    // DOWNLOAD CV
    $wp_customize->add_section(
        'alm_download',
        [
            'panel' => 'alm_theme_configuration',
            'title' => 'Télécharger le CV'
        ]
    );

    // Show / hide section
    $wp_customize->add_setting(
        'alm_download_active' // ID
    );

    $wp_customize->add_control(
        'alm_download_active', //ID
        [
            'section' => 'alm_download',
            'label'   => 'Activer la section',
            'type'    => 'checkbox'
        ]
    );

    // DOWNLOAD TEXT CONTENT
    $wp_customize->add_setting(
        'alm_download_text' // ID
    );

    $wp_customize->add_control(
        'alm_download_text', //ID
        [
            'section' => 'alm_download',
            'label'   => 'Libélé',
            'type'    => 'textarea'
        ]
    );

/*---------------------------------------------
              EDUCATION SECTION
---------------------------------------------*/

    $wp_customize->add_section(
        'alm_education',
        [
            'panel' => 'alm_theme_configuration',
            'title' => 'Mes formations'
        ]
    );

    // BAC - TOP
    $wp_customize->add_setting(
        'alm_education_bac-top', // ID
        [
            'default' => 'BAC Professionnel<br>Commerce'
        ]
    );

    $wp_customize->add_control(
        'alm_education_bac-top', //ID
        [
            'section' => 'alm_education',
            'label'   => 'Titre',
            'type'    => 'textarea'
        ]
    );

    // BAC - BOTTOM
    $wp_customize->add_setting(
        'alm_education_bac-bottom', // ID
        [
            'default' => 'Mention Bien'
        ]
    );

    $wp_customize->add_control(
        'alm_education_bac-bottom', //ID
        [
            'section' => 'alm_education',
            'label'   => 'Détails',
            'type'    => 'textarea'
        ]
    );

    // EF - TOP
    $wp_customize->add_setting(
        'alm_education_ef-top', // ID
        [
            'default' => 'Formation linguistique à<br>l\'étranger (NYC-USA)'
        ]
    );

    $wp_customize->add_control(
        'alm_education_ef-top', //ID
        [
            'section' => 'alm_education',
            'label'   => 'Titre',
            'type'    => 'textarea'
        ]
    );

    // EF - BOTTOM
    $wp_customize->add_setting(
        'alm_education_ef-bottom', // ID
        [
            'default' => '9 mois à EF New York<br>Anglais niveau C2'
        ]
    );

    $wp_customize->add_control(
        'alm_education_ef-bottom', //ID
        [
            'section' => 'alm_education',
            'label'   => 'Détails',
            'type'    => 'textarea'
        ]
    );

    // ESEC - TOP
    $wp_customize->add_setting(
        'alm_education_esec-top', // ID
        [
            'default' => 'Diplôme de montage vidéo,<br>trucages & effets spéciaux'
        ]
    );

    $wp_customize->add_control(
        'alm_education_esec-top', //ID
        [
            'section' => 'alm_education',
            'label'   => 'Titre',
            'type'    => 'textarea'
        ]
    );

    // ESEC - BOTTOM
    $wp_customize->add_setting(
        'alm_education_esec-bottom', // ID
        [
            'default' => 'École de cinéma ESEC - Paris<br>Mention Bien'
        ]
    );

    $wp_customize->add_control(
        'alm_education_esec-bottom', //ID
        [
            'section' => 'alm_education',
            'label'   => 'Détails',
            'type'    => 'textarea'
        ]
    );

    // O'CLOCK - TOP
    $wp_customize->add_setting(
        'alm_education_oclock-top', // ID
        [
            'default' => 'Formation Développeur web<br>Spécialisation Wordpress'
        ]
    );

    $wp_customize->add_control(
        'alm_education_oclock-top', //ID
        [
            'section' => 'alm_education',
            'label'   => 'Titre',
            'type'    => 'textarea'
        ]
    );

    // O'CLOCK - BOTTOM
    $wp_customize->add_setting(
        'alm_education_oclock-bottom', // ID
        [
            'default' => '700h avec'
        ]
    );

    $wp_customize->add_control(
        'alm_education_oclock-bottom', //ID
        [
            'section' => 'alm_education',
            'label'   => 'Détails',
            'type'    => 'textarea'
        ]
    );

    // O'CLOCK - BOTTOM / STRONG TAG
    $wp_customize->add_setting(
        'alm_education_oclock-bottom-tag', // ID
        [
            'default' => 'O\'Clock'
        ]
    );

    $wp_customize->add_control(
        'alm_education_oclock-bottom-tag', //ID
        [
            'section' => 'alm_education',
            'label'   => 'Détails',
            'type'    => 'textarea'
        ]
    );

    // O'CLOCK - BOTTOM / LABEL
    $wp_customize->add_setting(
        'alm_education_oclock-bottom-label', // ID
        [
            'default' => 'Labellisée Grande École du Numérique'
        ]
    );

    $wp_customize->add_control(
        'alm_education_oclock-bottom-label', //ID
        [
            'section' => 'alm_education',
            'label'   => 'Détails',
            'type'    => 'textarea'
        ]
    );

}

add_action( 'customize_register', 'alm_customize_register' );