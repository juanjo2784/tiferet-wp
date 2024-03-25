<?php
    /*
    * Template Name: Listado articulos
    */
    get_header();
?>
    <main class="seccion contenedor">
    <section class="contenedor seccion">
    <h2 class="text-center text-primary">Nuestro Blog</h2>

    <ul class="ficha contenedor_tarjetasx3">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4
        );
        $blog = new WP_Query($args);
        while ($blog->have_posts()) {
            $blog->the_post();

            get_template_part('template-parts/blog');
        }
        wp_reset_postdata();
        ?>
    </ul>
    <?php the_posts_pagination(); ?>
</section>
</main>

<?php get_footer(); ?>