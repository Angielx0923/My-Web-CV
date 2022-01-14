<?php
/**
 * Template of the HIRE ME link
 * 
 * @package ALM
 */

// On récupère les infos de la page contact via une custom query (via son slug, post_ID est aussi une option possible)
$alm_hireme = new WP_Query([
    'pagename' => 'contact'
]);

if ( $alm_hireme->have_posts() ) : 
    $alm_hireme->the_post(); ?>

    <a href="<?php the_permalink(); ?>" class="hire-me-link">
        <div id="hireMe" class="hire-me-container">
            <img src="<?php echo wp_get_attachment_image_url( ALM_THEME_HIRE_ME ); ?>" alt="" class="hire-me-container__img">
        </div>
    </a>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>