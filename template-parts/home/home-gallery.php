<?php

/**
 * Home gallery section.
 * 
 * @package template-parts/home
 * @author David Guerreiro
 */

$title      = get_field('home_gallery_title') ?? '';
$content_1  = get_field('home_gallery_text_content_1') ?? '';
$content_2  = get_field('home_gallery_text_content_2') ?? '';
$gallery    = get_field('home_gallery_gallery') ?? [];

$first_gallery  = array_slice($gallery, 0, 3);
$second_gallery = array_slice($gallery, 3, 3);

?>

<section class="home-gallery">
    <?php if ($title) : ?>
        <h2 class="section-title"><?php echo esc_html($title); ?></h2>
    <?php endif; 
    
    if ($content_1) : ?>
        <p class="home-gallery__content">
            <?php echo esc_html($content_1); ?>
        </p>
    <?php endif; 
    
    if ($content_2) : ?>
        <p class="home-gallery__content">
            <?php echo esc_html($content_2); ?>
        </p>
    <?php endif; ?>

    <div class="home-gallery__grid-wrapper">
        <div class="gallery-grid">
            <div class="gallery-grid__left-image">
                <img src="<?php echo esc_url($first_gallery[0]); ?>" alt="">
            </div>
            <div class="gallery-grid__right-images">
                <img src="<?php echo esc_url($first_gallery[1]); ?>" alt="">
                <img src="<?php echo esc_url($first_gallery[2]); ?>" alt="">
            </div>
        </div>

        <hr class="home-gallery__separator"/>

        <div class="gallery-grid">
            <div class="gallery-grid__right-images">
                <img src="<?php echo esc_url($second_gallery[1]); ?>" alt="">
                <img src="<?php echo esc_url($second_gallery[2]); ?>" alt="">
            </div>
            <div class="gallery-grid__left-image">
                <img src="<?php echo esc_url($second_gallery[0]); ?>" alt="">
            </div>
        </div>
    </div>

</section>