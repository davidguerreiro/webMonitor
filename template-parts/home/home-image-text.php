<?php

/**
 * Home image + text module.
 * 
 * @package template-parts/home
 * @author David Guerreiro
 */

 $content   = get_field('home_image_text_content') ?? '';
 $logo_url  = get_field('home_image_text_image') ?? '';

?>

<section class="home-image-text">
    <div class="home-image-text__content-wrapper">
        <div class="home-image-text__content">
            <?php echo $content; ?>
        </div>
        <div class="home-image-text__image">
            <?php if ($logo_url) : ?>
                <img src="<?php echo esc_url($logo_url); ?>" alt="logo arbol">
            <?php endif; ?>
        </div>
    </div>
</section>