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
}

add_action( 'customize_register', 'alm_customize_register' );