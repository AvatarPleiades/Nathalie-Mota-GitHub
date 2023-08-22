<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <?php wp_head(); ?> 
    </head>
    <body <?php body_class(); ?> >
        <?php wp_body_open(); ?> 
        
        <header>
            <div class="mota-logo">
                <a href="http://localhost/nathalie-mota-photographe/">
                <img src="<?php echo get_template_directory_uri() .'/assets/images/mota-logo.png';?>" alt="Logo de Nathalie Mota Photographe"></a>
            </div>
            <nav>
                <ul>
                    <?php 
                        wp_nav_menu ([
                            'theme_location' => 'header',
                            'container' => false,
                            'container_aria_label' => 'menu du header',])
                    ?>  
                </ul>
            </nav>
            <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            </div>
        </div>
        </header>
        <main>