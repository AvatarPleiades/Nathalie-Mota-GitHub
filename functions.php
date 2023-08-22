<?php 

// Liens avec les styles et les scripts du thème enfant

function nathaliemota_style_script() {
    
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0');
    wp_enqueue_style('header', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/assets/css/footer.css');
    wp_enqueue_style('modale-contact', get_template_directory_uri() . '/assets/css/modale-contact.css');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_style('page', get_template_directory_uri() . '/assets/css/page.css');
    wp_enqueue_style('single', get_template_directory_uri() . '/assets/css/single.css');
    wp_enqueue_style('front-page', get_template_directory_uri() . '/assets/css/front-page.css');
    wp_enqueue_style('lightbox', get_template_directory_uri() . '/assets/css/lightbox.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', true);
    wp_enqueue_script('lightbox-script', get_template_directory_uri() . '/assets/js/lightbox.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'nathaliemota_style_script');


// Liens avec les menus créer en amont dans WordPress

register_nav_menus( array(
    'header' => 'Menu Header',
    'footer' => 'Menu Footer',
));

// Ajout des Thumbnails

add_theme_support('post-thumbnails');

// Fonction du bouton "Charger plus"

function more() {
    $more = new WP_Query([
        'post_type' => 'photo',
        'posts_per_page'=> 12,
        'orderby' => 'date',
        'order' => 'ASC',
        'paged' => $_POST['paged'], 
    ]);

    $return = ''; 

    if( $more->have_posts() ) : while( $more->have_posts() ) : $more->the_post();
        $return .= 
        '<div class="container-gallery">
            <img class="photo" src="'.get_the_post_thumbnail_url(get_the_ID(),"full").'" alt="'.get_the_title().'">
            <div class="hover-img">
                <img class="icon-fullscreen icon-lightbox" src="'.get_template_directory_uri().'/assets/images/fullscreen.svg" alt="icône plein écran">
                <a href="'.get_permalink().'"><img class="hover-eye" src="'.get_template_directory_uri().'/assets/images/eye.svg" alt="icône oeil"> </a>
                <h2 class="reference">'.get_field('reference').'</h2>
                <h3 class="categorie">'.get_the_terms(get_the_ID(), 'categorie')[0]->name.'</h3>
            </div>
        </div>';
        endwhile;
        wp_reset_postdata();
        else :
        $return = '';
        endif;
        
        echo $return;
        exit;
};

add_action('wp_ajax_more', 'more');
add_action('wp_ajax_nopriv_more', 'more');
