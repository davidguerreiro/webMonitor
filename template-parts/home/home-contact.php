<?php

/**
 * Home contact module.
 * 
 * @package template-parts/home
 * @author David Guerreiro
 */

$email_icon        = get_template_directory_uri() . '/app/images/svg/email.svg';
$instagram_icon    = get_template_directory_uri() . '/app/images/svg/instagram.svg';
$phone_icon        = get_template_directory_uri() . '/app/images/svg/phone.svg';

$email_address     = get_field('webj_email_address', 'option') ?? '';
$instagram_url     = get_field('webj_instagram', 'option') ?? '';
$phone_number      = get_field('webj_phone_number', 'option') ?? '';

// TODO: Agregar instagram name field.

?>

<section class="home-contact">
    <h2 class="section-title">Contacto</h2>

    <div class="home-contact__wrapper">

        <div class="home-contact__item home-contact__item--email">
            <a href="mailto:<?php echo esc_html($email_address); ?>" class="home-contact__wrapper-link">
                <div class="home-contact__image">
                    <img src="<?php echo esc_url($email_icon); ?>" alt="">
                </div>
                <div class="home-contact__contact-value">
                    <p><?php echo esc_html($email_address); ?></p>
                </div>
            </a>
        </div>

        <div class="home-contact__item home-contact__item--instagram">
            <a href="<?php echo esc_url($instagram_url); ?>" class="home-contact__wrapper-link" target="_blank">
                <div class="home-contact__image">
                    <img src="<?php echo esc_url($instagram_icon); ?>" alt="">
                </div>
                <div class="home-contact__contact-value">
                    <p>@jesusinstagramname</p>
                </div>
            </a>
        </div>

        <div class="home-contact__item home-contact__item--phone">
            <a href="tel:<?php echo esc_html($phone_number); ?>" class="home-contact__wrapper-link">
                <div class="home-contact__image">
                    <img src="<?php echo esc_url($phone_icon); ?>" alt="">
                </div>
                <div class="home-contact__contact-value">
                    <p><?php echo esc_html($phone_number); ?></p>
                </div>
            </a>
        </div>

    </div>
</section>