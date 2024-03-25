<?php
    get_header();
?>

    <main class="contenedor seccion con-sidebar">
        <section class="contenido-principal">
            <?php
                get_template_part('template-parts/post');
            ?>

        <div class="comentarios">
                    <?php comment_form(); ?>

                <ul class="lista-comentarios">
                    <?php 
                        $comentarios = get_comments( array(
                            'post_id' => $post->ID,
                            'status' => 'approve'
                        ));

                        wp_list_comments( array(
                            'per_page' => 10,
                            'reverse_top_level' => false
                        ), $comentarios);
                    ?>
                </ul>
            </div>
        </section>

        <?php get_sidebar(); ?>
    </main>
    
<?php
    get_footer();
?>