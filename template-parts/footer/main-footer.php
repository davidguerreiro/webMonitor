<?php

/**
 * Main footer template. Called from footer.php
 * 
 * @package template-parts/footer
 * @author David Guerreiro
 */

$logo_url = get_template_directory_uri() . '/app/images/logos/logo.png';

?>

<div class="main-footer">
    <div class="main-footer__logo">
        <img src="<?php echo esc_url($logo_url); ?>" alt="">
    </div>
    <p class="main-footer__text-content">
        Jesús Giráldez Vaquero &copy; 2024
    </p>
</div>
