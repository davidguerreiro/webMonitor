<?php

/**
 * Home book module.
 * 
 * @package template-parts/home
 * @author David Guerreiro
 */

 $img_url = get_template_directory_uri() . "/app/images/content/libro-jesus.png";

?>

<section class="home-book">
    <h2 class="section-title">Una historia que merece la pena contar</h2>
    <div class="home-book__main-section">
        <div>
            <img src="<?php echo esc_url($img_url); ?>" alt="" class="home-book__book-image">
        </div>
        <div class="home-book__details-wrapper">
            <h3 class="home-book__main-section-title">«El despertar del dragón»</h3>
            <p class="home-book__description">
                Una novela de superación basada en una historia real. La historia de un niño débil, inseguro y miedoso que se crio condicionado por una situación familiar muy adversa. Este niño acabó siendo dependiente de varias adicciones que le afectaban a su desarrollo. Las cosas pintaban muy mal para él hasta que descubrió la meditación y las artes marciales. Su vida cambió por completo. Ahora dedica su vida a entrenarse para vivir en armonía consigo mismo y seguir los pasos de su maestro Shaolin.
            </p>
            <div class="home-book__links-container">
                <nav class="home-book__links">
                    <ul>
                        <li>
                            <a href="https://www.caligramaeditorial.com/entrevista/jesus-giraldez-vaquero-autor-de-el-despertar-del-dragon" class="header-link-button header-link-button--main-section" target="_blank">Ver entrevista</a>
                        </li>
                        <li>
                            <a href="https://libros.cc/El-despertar-dragon.htm?isbn=9791387602420" class="header-link-button header-link-button--main-section" target="_blank">Comprar</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>