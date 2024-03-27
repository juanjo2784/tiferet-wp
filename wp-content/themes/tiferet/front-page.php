<?php
get_template_part('parts/header')
?>


<main>
    <article class="color0  p-3">
        <div class="container-fluid pt-3 mlr-3">
            <?php require get_template_directory() . '/parts/services.php';?>
        </div>
    </article>

    <article class="color3 p-3">
        <h2 class="text-center display-4" >HaShavua</h2>
        <div class="container-fluid ">
            <?php require get_template_directory() . '/parts/hashavua.php';?>
        </div>
    </article>

    <article>
    <h2 class="text-center display-4 m-5" >Eventos</h2>
      <div class="container">
        <?php  tiferet_post_type(); ?>
      </div>  
    </article>


    <article class='color0'>
      <div class="container p-4">

    <div class="container p-5">
    <?php echo do_shortcode('[smartslider3 slider="2"]'); ?>
    </div>
      

      <h2 class="text-center display-4 m-5" >Apoyanos</h2>
        <h3 class="font-italic text-center ">"Si hiciéramos todas las cosas que somos capaces de hacer, nos sorprenderíamos a nosotros mismos". <small>Thomas Edison</small>
        </h3>
          <div class="d-flex p-3 justify-content-center">
          <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button">
          </div>
       </div>
      </article>

    <article id="contact" class="contact color3">


      <div class="container">
        <div class="contact-icon">
          <i class="material-icons md50 cfi7 pt-4">local_post_office</i>
        </div>
        
        <div class="contact-text">
          <h3 class="text-justify tcontacto pt-4">Nos puedes escribir a nuestro <a class="correo" href="mailto:tiferetnashim@gmail.com?&subject=Información%20adicional&body=Móvil:%0d%0aNombre:%0d%0a" title="Link de acceso para enviar correo electrónico" tabindex="14">e-mail</a>, también puedes llenar el formulario de CONTACTANOS y además puedes llamarnos, estamos presto a contestar tus preguntas, ten presente que también puedes ser parte de la solución. </h3>
        </div>

      </div>
             

      <div class="container p4">
        <h2 class="text-center display-4 m5">Escribenos</h2>
        <?php tiferet_contacto_shortcode(); ?>
      </div>

    </article>
      
</main>

<?php
get_template_part('parts/footer')
?>