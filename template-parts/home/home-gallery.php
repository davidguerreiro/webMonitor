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
        En agosto de 2025 viajé a China formando parte de la delegación de la escuela Wujia Shaolin Chan Canary Center.
        En este viaje tuvimos la oportunidad de practicar y obtener varios certificados de maestros de las artes marciales chinas. Uno de ellos de la Chinese Wushu Association de Chongqing y otro de Emei Zhongfeng Martial Arts en Emeishan.
    </p>
    <p class="home-gallery__content">
        Durante el viaje pudimos disfrutar de la cultura china en su propia esencia. Visitando lugares emblemáticos como la Muralla China, la Ciudad Prohibida y el Monte sagrado de Emei. 
        Para completar el viaje acudimos a actividades tradicionales como la caligrafía china y la ceremonia del té.
    </p>

    <div class="home-gallery__grid-wrapper">
        <div class="gallery-grid">
            <div class="gallery-grid__left-image">
                <img src="<?php echo esc_url($images_section_1[0]); ?>" alt="">
            </div>
            <div class="gallery-grid__right-images">
                <img src="<?php echo esc_url($images_section_1[1]); ?>" alt="">
                <img src="<?php echo esc_url($images_section_1[2]); ?>" alt="">
            </div>
        </div>

        <hr class="home-gallery__separator"/>

        <div class="gallery-grid">
            <div class="gallery-grid__right-images">
                <img src="<?php echo esc_url($images_section_2[1]); ?>" alt="">
                <img src="<?php echo esc_url($images_section_2[2]); ?>" alt="">
            </div>
            <div class="gallery-grid__left-image">
                <img src="<?php echo esc_url($images_section_2[0]); ?>" alt="">
            </div>
        </div>
    </div>

</section>