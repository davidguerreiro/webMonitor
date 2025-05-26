<?php

/**
 * Header top bar module.
 * 
 * @package template-parts/header
 * @author David Guerreiro
 */

 $text = get_field('top_header_banner_text', 'option') ?? '';
 $link = get_field('top_header_banner_link', 'option') ?? [];

 ?>

<div class="header-book-banner">
    <div class="header-book-element header-book-element--first">
    </div>
    <div class="header-book-element">
        <span class="header-book-element__main-text"><?php echo esc_html($text); ?></span>
    </div>
    <div class="header-book-element">
        <?php if (! empty($link)) : ?>
            <a href="<?php echo esc_url($link['url']); ?>" class="header-link-button" target="<?php echo esc_attr($link['target']); ?>">
                <?php echo esc_html($link['title']); ?>
            </a>
        <?php endif; ?>
    </div>
</div>