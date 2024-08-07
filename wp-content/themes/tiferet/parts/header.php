<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="contenedor barra-navegacion">
            <div>
                <a href="<?php echo site_url('/'); ?>">
                    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logotipo">
                </a>

                <div class="hamburguer-menu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="64"
                        height="64" viewBox="0 0 24 24" stroke-width="2" stroke="#2c3e50" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 6l16 0" />
                        <path d="M4 12l16 0" />
                        <path d="M4 18l16 0" />
                    </svg>
                </div>

            </div>

            <div class="contenedor-menu">

                <div class="redes">
                    <?php $args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav-social',
                    'container_class' => 'menu-redes'); wp_nav_menu($args);?>
                </div>

            </div>
        </div>
  

    </header>