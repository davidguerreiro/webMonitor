<?php

/**
 * Home image + text module.
 * 
 * @package template-parts/home
 * @author David Guerreiro
 */

 $logo_url = get_template_directory_uri() . '/app/images/logos/imagen-arbol.png';

?>

<section class="home-image-text">
    <div class="home-image-text__content-wrapper">
        <div class="home-image-text__content">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at lectus velit. Suspendisse ut tristique lectus. Nunc rhoncus risus a tellus imperdiet porttitor sed sit amet lacus. Proin porta lacus consectetur facilisis aliquam. Maecenas cursus quam sit amet velit pulvinar convallis. Curabitur tincidunt tincidunt suscipit.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at lectus velit. Suspendisse ut tristique lectus. Nunc rhoncus risus a tellus imperdiet porttitor sed sit amet lacus. Proin porta lacus consectetur facilisis aliquam. Maecenas cursus quam sit amet velit pulvinar convallis. Curabitur tincidunt tincidunt suscipit.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at lectus velit. Suspendisse ut tristique lectus. Nunc rhoncus risus a tellus imperdiet porttitor sed sit amet lacus. Proin porta lacus consectetur facilisis aliquam. Maecenas cursus quam sit amet velit pulvinar convallis. Curabitur tincidunt tincidunt suscipit.
            </p>
        </div>
        <div class="home-image-text__image">
            <img src="<?php echo esc_html($logo_url); ?>" alt="logo arbol">
        </div>
    </div>
</section>