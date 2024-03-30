<?php

/**
 * Home multiple image text
 * 
 * @package template-parts/home
 * @author David Guerreiro
 */

 $secciones_test = get_template_directory_uri() . '/app/images/content/sectiones-test.jpg';

?>


<section class="home-multiple-image-text">
    <h2 class="section-title">Disciplinas</h2>

    <div class="home-multiple-image-text__section">
        <div class="home-multiple-image-text__image">
            <img src="<?php echo esc_url($secciones_test); ?>" alt="">
        </div>
        <div class="home-multiple-image-text__content">
            <h3 class="home-multiple-image-text__title">SHAOLIN KUNG FU</h3>
            <p class="home-multiple-image-text__text-content">El Shaolin Kung fu es un arte marcial que nace en el monasterio de Shaolin en China.</p>
            <p class="home-multiple-image-text__text-content">Este arte marcial chino nos proporciona una gran defensa personal, un estado físico-mental muy bueno y también nos ayuda a desarrollar muchos factores importantes que luego pueden ayudarnos en nuestras vidas. Como por ejemplo: concentración, capacidad de esfuerzo, paciencia, perseverancia, respeto hacia nosotros y los demás, disciplina, la seguridad en nosotros mismos...</p>
            <p class="home-multiple-image-text__text-content">En general la práctica de este arte marcial se caracteriza por ser muy completa tanto física como mentalmente.</p>
        </div>
    </div>

    <div class="home-multiple-image-text__section home-multiple-image-text__section--alternative">
        <div class="home-multiple-image-text__image">
            <img src="<?php echo esc_url($secciones_test); ?>" alt="">
        </div>
        <div class="home-multiple-image-text__content home-multiple-image-text__content--alternative">
            <h3 class="home-multiple-image-text__title">LOHAN CHI KUNG</h3>
            <p class="home-multiple-image-text__text-content">El Chi kung es una rama de la medicina tradicional china que se enfoca en el cultivo y trabajo de la energía vital.</p>
            <p class="home-multiple-image-text__text-content">La propia palabra Chi (energía) kung (trabajo) ya nos la define muy bien. En el Chi kung se trabaja con el movimiento corporal, la respiración y la intención de la mente. Con su práctica ,en mayor parte, buscamos la prevención de enfermedades mediante el equilibrio y vitalizanción de la energía corporal.</p>
        </div>
    </div>

    <div class="home-multiple-image-text__section">
        <div class="home-multiple-image-text__image">
            <img src="<?php echo esc_url($secciones_test); ?>" alt="">
        </div>
        <div class="home-multiple-image-text__content">
            <h3 class="home-multiple-image-text__title">TAICHI CHUAN</h3>
            <p class="home-multiple-image-text__text-content">El Taichi Chuan ( también conocido como "la meditación en movimiento" ) es un arte marcial chino que se caracteriza por su práctica lenta y de forma relajada. Al contrario de la mayoria de las artes marciales aquí buscamos más el trabajo interno que el externo. Por su forma de práctica es un buen ejercicio para practicar independientemente de la edad.</p>
            <p class="home-multiple-image-text__text-content">Algunos aspectos que nos beneficia la práctica del Taichi Chuan son: el equilibrio, la paciencia, la agilidad, la flexibilidad, la concentración, la vitalidad y también es un buen ejercicio para reducir el estrés.</p>
        </div>
    </div>

</section>
