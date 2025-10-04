<?php

/**
 * Home multiple image text
 * 
 * @package template-parts/home
 * @author David Guerreiro
 */

 $title     = get_field('home_multiple_images_with_text_section_title') ?? '';
 $sections  = get_field('home_multiple_images_with_text_sections') ?? [];
 $length    = count($sections);

if (! empty($sections)) : ?>

    <section class="home-multiple-image-text">
        <?php if ($title) : ?>
            <h2 class="section-title"><?php echo esc_html($title); ?></h2>
        <?php endif; ?>

        <?php for ($i = 0; $i < $length; $i++) : 
            $even = ($i % 2 == 0);    
        ?>
            <div class="home-multiple-image-text__section <?php echo (! $even) ? 'home-multiple-image-text__section--alternative' : ''; ?>">
                <div class="home-multiple-image-text__image">
                    <?php if (isset($sections[$i]['home_multiple_images_with_text_image']) && $sections[$i]['home_multiple_images_with_text_image']) : ?>
                        <img src="<?php echo esc_url($sections[$i]['home_multiple_images_with_text_image']); ?>" alt="">
                    <?php endif; ?>
                </div>  
                <div class="home-multiple-image-text__content <?php echo (! $even) ? 'home-multiple-image-text__content--alternative' : ''; ?>">
                <?php if (isset($sections[$i]['name']) && $sections[$i]['name']) : ?>
                    <h3 class="home-multiple-image-text__title"><?php echo esc_html($sections[$i]['name']); ?></h3>
                <?php endif; ?>
                    <div class="home-multiple-image-text__text-content">
                    <?php if (isset($sections[$i]['content']) && $sections[$i]['content']) :
                        echo $sections[$i]['content'];
                    endif; ?>
                    </div>
                </div>
            </div>
        <?php endfor; ?>

    </section>
    
<?php endif;

