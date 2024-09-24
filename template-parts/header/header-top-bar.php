<?php

/**
 * Header top bar module.
 * 
 * @package template-parts/header
 * @author David Guerreiro
 */

 $email_icon        = get_template_directory_uri() . '/app/images/svg/email.svg';
 $instagram_icon    = get_template_directory_uri() . '/app/images/svg/instagram.svg';
 $phone_icon        = get_template_directory_uri() . '/app/images/svg/phone.svg';

 $email_address     = get_field('webj_email_address', 'option') ?? '';
 $instagram_url     = get_field('webj_instagram', 'option') ?? '';
 $phone_number      = get_field('webj_phone_number', 'option') ?? '';

 // remove instagram in update 24-09-2024.
 $instagram_url     = null;

?>

<div class="header-top-bar">
    <nav class="header-top-bar__social">
        <ul>
            <?php if ($email_address) : ?>
                <li class="header-top-bar__element">
                    <a href="mailto:<?php echo esc_html($email_address ); ?>" target="_blank">
                        <img src="<?php echo esc_url($email_icon); ?>" alt="email-icon" class="header-top-bar__social-icon">
                    </a>
                </li>
            <?php endif; 
            
            if ($instagram_url) : ?>
                <li class="header-top-bar__element header-top-bar__element--instagram-link">
                    <a href="<?php echo esc_url($instagram_url); ?>" target="_blank">
                        <img src="<?php echo esc_url($instagram_icon); ?>" alt="instagram-icon" class="header-top-bar__social-icon header-top-bar__social-icon--instagram">
                    </a>
                </li>
            <?php endif; 
            
            if ($phone_number) : ?>
                <li class="header-top-bar__element">
                    <a href="tel:<?php echo esc_html($phone_number); ?>" target="_blank">
                        <img src="<?php echo esc_url($phone_icon); ?>" alt="email-icon" class="header-top-bar__social-icon header-top-bar__social-icon--phone">
                        <span class="header-top-bar__phone-number"><?php echo esc_html($phone_number); ?></span>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</div>