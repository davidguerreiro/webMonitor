<?php

/**
 * Home book module.
 * 
 * @package template-parts/home
 * @author David Guerreiro
 */

$section_title      = get_field('home_section_title') ?? '';
$img_url            = get_field('home_book_image') ?? '';
$book_title         = get_field('home_book_title') ?? '';
$book_description   = get_field('home_book_description') ?? '';
$first_link         = get_field('home_first_link') ?? [];
$second_link        = get_field('home_second_link') ?? [];

?>

<section class="home-book">
    <h2 class="section-title"><?php echo esc_html($section_title); ?></h2>
    <div class="home-book__main-section">
        <div>
            <?php if ($img_url) : ?>
                <img src="<?php echo esc_url($img_url); ?>" alt="" class="home-book__book-image">
            <?php endif; ?>
        </div>
        <div class="home-book__details-wrapper">
            <h3 class="home-book__main-section-title"><?php echo esc_html($book_title); ?></h3>
            <p class="home-book__description">
                <?php echo esc_html($book_description); ?>
            </p>
            <div class="home-book__links-container">
                <nav class="home-book__links">
                    <ul>
                        <?php if ($first_link): ?>
                            <li>
                                <a href="<?php echo esc_url($first_link['url']); ?>" class="header-link-button header-link-button--main-section" target="<?php echo esc_attr($first_link['target']); ?>">
                                    <?php echo esc_html($first_link['title']); ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if ($second_link): ?>
                            <li>
                                <a href="<?php echo esc_url($second_link['url']); ?>" class="header-link-button header-link-button--main-section" target="<?php echo esc_attr($second_link['target']); ?>">
                                    <?php echo esc_html($second_link['title']); ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>