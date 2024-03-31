<?php

/**
 * Home quote module.
 * 
 * @package template-parts/home
 * @author David Guerreiro
 */

$quote_content  = get_field('home_quote_contenido') ?? '';
$quote_author   = get_field('home_quote_author') ?? '';
$logo_url       = get_template_directory_uri() . '/app/images/logos/imagen-arbol.png';

if ($quote_content) : ?>

<section class="home-quote">
    <div class="home-quote__box-wrapper">
        <img src="<?php echo esc_html($logo_url); ?>" alt="" class="home-quote__logo">
        <p class="home-quote__content"><?php echo esc_html($quote_content); ?></p>
    </div>
    <?php if ($quote_author) : ?>
        <p class="home-quote__author">- <?php echo esc_html($quote_author); ?></p>
    <?php endif; ?>
</section>
<?php endif;

