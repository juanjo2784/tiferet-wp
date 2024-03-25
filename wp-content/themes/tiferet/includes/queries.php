<?php

function tiferet_post_type()
{
    ?>

    <ul class="ficha contenedor_tarjetasx3">
        <?php
        $args = array(
            'post_type' => 'post_type_eventos',
            'posts_per_page' => 4
        );
        $evento = new WP_Query($args);
        while ($evento->have_posts()) {
            $evento->the_post();
            ?>
            <li class="tarjeta card">
                <?php the_post_thumbnail(); ?>
                
                <div class="contenido color6">
                    <h2 class="colorclaro"><?php the_title(); ?></h2>
                    <h3>
                        <?php the_field('fecha-evento'); ?>
                        </br><span>Hora: </span>  <?php the_field('hora-evento'); ?>
                    </h3>
                </div>
            </li>
            <?php
        }
        wp_reset_postdata();
        ?>
    </ul>
    <?php
}