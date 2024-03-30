<?php

/**
 * Home hero module.
 * 
 * @package template-parts/home
 * @author David Guerreiro
 */

 $title         = get_field('home_hero_title') ?? '';
 $description   = get_field('home_hero_description') ?? '';
 $logo_url      = get_field('home_hero_logo') ?? '';

?>

<section class="home-hero">
    <div class="home-hero__content-wrapper">
        <div>
            <img src="<?php echo esc_url($logo_url); ?>" alt="site logo" class="home-hero__logo">
        </div>
        <div class="home-hero__title-wrapper">
            <h1 class="home-hero__title">
                <?php echo esc_html($title); ?>
            </h1>
            <p class="home-hero__description">
               <?php echo esc_html($description); ?>
            </p>
        </div>
    </div>
</section>
 