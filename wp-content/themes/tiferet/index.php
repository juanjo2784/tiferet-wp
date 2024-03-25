<?php
    get_header();
?>

    <h1>desde index.php </h1>
    <main>
        <?php
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); 
                    // Muestra el contenido del post
                    the_title( '<h2>', '</h2>' ); 
                    the_excerpt();
                endwhile; 
            else: 
                _e( 'Lo siento, no hay posts que coincidan con tus criterios.', 'textdomain' ); 
            endif; 
            ?>

    </main>

<?php
    get_footer();
?>