<?php

/**
 * Header top bar module.
 * 
 * @package template-parts/header
 * @author David Guerreiro
 */

 $img_url = get_template_directory_uri() . "/app/images/content/libro-jesus.png";

 ?>

<div class="header-book-banner">
    <div class="header-book-element header-book-element--first">
        <img src="<?php echo esc_url($img_url); ?>" alt="" class="header-book-element__book-image">
    </div>
    <div class="header-book-element">
        <span class="header-book-element__main-text">El Despertar del Dragón</span>
    </div>
    <div class="header-book-element">
        <a href="https://www.caligramaeditorial.com/libro/El-despertar-dragon?isbn=9791387602420" class="header-link-button">Ya a la venta</a>
    </div>
</div>