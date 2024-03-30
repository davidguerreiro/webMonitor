<?php

/**
 * Home video module.
 * 
 * @package template-parts/home
 * @author David Guerreiro
 */

$video = get_template_directory_uri() . '/app/videos/video-jesus.mp4';

?>

<section class="home-video">
    <h2 class="section-title">Video</h2>

    <div class="home-video__wrapper">
        <video controls muted>
            <source src="<?php echo esc_url($video); ?>" type="video/mp4">
        </video>
        <p class="home-video__video-desc">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at lectus velit. Suspendisse ut tristique lectus. Nunc rhoncus risus a tellus imperdiet porttitor sed sit amet lacus.
        </p>
    </div>
</section>
