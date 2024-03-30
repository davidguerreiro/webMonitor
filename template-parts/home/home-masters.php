<?php

/**
 * Home masters.
 * 
 * @package template-parts/home
 * @author David Guerreiro
 */

 $title     = get_field('home_masters_section_title') ?? '';
 $masters   = get_field('home_masters_masters') ?? []; 

if (! empty($masters)): ?>

    <section class="home-masters full-width-module">
        <?php if ($title) : ?>
            <h2 class="section-title"><?php echo esc_html($title); ?></h2>
        <?php endif; 
        
        for ($i = 0; $i < count($masters); $i++) : 
            $even = ($i % 2 == 0); 
        ?>
        
            <div class="home-masters__section-wrapper <?php echo (! $even) ? 'home-masters__section-wrapper--alternative' : ''; ?>">
                <div class="home-masters__section <?php echo (! $even) ? 'home-masters__section--alternative' : ''; ?>">
 
                    <div class="home-masters__image <?php echo (! $even) ? 'home-masters__image--alternative' : ''; ?>">
                        <?php if ($masters[$i]['imagen']) : ?>
                            <img src="<?php echo esc_url($masters[$i]['imagen']); ?>" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="home-masters__content <?php echo (! $even) ? 'home-masters__content--alternative' : ''; ?>">
                        <h3 class="home-masters__content-title"><?php echo esc_html($masters[$i]['nombre']); ?></h3>

                        <?php if ($masters[$i]['disciplinas']) : ?>
                            <ul class="home-masters__list-content">
                                <?php foreach ($masters[$i]['disciplinas'] as $disciplina) : ?>
                                    <li>
                                        <?php echo esc_html($disciplina); ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <div class="home-masters__description">
                            <?php echo $masters[$i]['contenido']; ?>
                        </div>
                    </div>
                </div>
            </div>

        <?php endfor; ?>

    </section>
<?php endif;
