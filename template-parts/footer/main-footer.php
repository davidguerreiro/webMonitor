<?php

/**
 * Main footer template. Called from footer.php
 * 
 * @package template-parts/footer
 * @author David Guerreiro
 */

$main_text      = get_field('footer_big_text', 'option') ?? '';
$secondary_text = get_field('footer_secondary_text', 'option') ?? '';

$logo_url       = get_template_directory_uri() . '/app/images/logos/centro-presente.png';

?>

<div class="main-footer">
    <div class="main-footer__logo">
        <img src="<?php echo esc_url($logo_url); ?>" alt="">
    </div>
    <?php if ($main_text) : ?>
        <p class="main-footer__main-name">
            <?php echo esc_html($main_text); ?>
        </p>
    <?php endif; ?>
    <p class="main-footer__disclaimer">
        &copy; <?php echo date('Y') . ' ' . esc_html($secondary_text); ?>
    </p>
</div>

