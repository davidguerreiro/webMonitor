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
        <span class="header-book-element__main-text">«El despertar del dragón»</span>
    </div>
    <div class="header-book-element">
        <a href="https://libros.cc/El-despertar-dragon.htm?isbn=9791387602420" class="header-link-button" target="_blank">Ya a la venta</a>
    </div>
</div>