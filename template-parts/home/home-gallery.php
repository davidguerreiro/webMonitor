<?php

/**
 * Home gallery section.
 * 
 * @package template-parts/home
 * @author David Guerreiro
 */

$images_section_1 = [get_template_directory_uri() . '/app/images/gallery/picture1.jpg', get_template_directory_uri() . '/app/images/gallery/picture2.jpg', get_template_directory_uri() . '/app/images/gallery/picture3.jpg'];
$images_section_2 = [get_template_directory_uri() . '/app/images/gallery/picture4.jpg', get_template_directory_uri() . '/app/images/gallery/picture5.jpg', get_template_directory_uri() . '/app/images/gallery/picture6.jpg'];

?>

<section class="home-gallery">
    <h2 class="section-title">Viaje a China</h2>
    <p class="home-gallery__content">
        El Centro Presente es mi proyecto personal que estará compuesto por 3 pilares fundamentales. El primero de ellos será la difusión y la preservación de las artes marciales chinas. El segundo pilar se centrará en la enseñanza de la meditación y de cómo esta puede ser una gran herramienta para ayudarnos a superar nuestras dificultades del día a día. Por último, como tercer pilar, con el Centro Presente quiero aportar un punto de información y ayuda con las adicciones y sus consecuencias.
    </p>

    <div class="gallery-grid">
        <div class="gallery-grid__left-image">
            <img src="<?php echo esc_url($images_section_1[0]); ?>" alt="">
        </div>
        <div class="gallery-grid__right-images">
            <img src="<?php echo esc_url($images_section_1[1]); ?>" alt="">
            <img src="<?php echo esc_url($images_section_1[2]); ?>" alt="">
        </div>
    </div>

</section>