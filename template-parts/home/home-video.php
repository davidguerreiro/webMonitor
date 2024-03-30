<?php

/**
 * Home video module.
 * 
 * @package template-parts/home
 * @author David Guerreiro
 */

$title      = get_field('home_video_title') ?? '';
$video      = get_field('home_video_video') ?? [];
$caption    = get_field('home_video_caption') ?? '';

if (! empty($video)) : ?>

<section class="home-video">
    <?php if ($title) : ?>
        <h2 class="section-title"><?php echo esc_html($title); ?></h2>
    <?php endif; ?>

    <div class="home-video__wrapper">
        <video controls muted>
            <source src="<?php echo esc_url($video['url']); ?>" type="<?php echo esc_html($video['mime_type']); ?>">
        </video>

        <?php if ($caption) : ?>
            <p class="home-video__video-desc">
                <?php echo esc_html($caption); ?>
            </p>
        <?php endif; ?>
    </div>
</section>
<?php endif;
