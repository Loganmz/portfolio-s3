<?php
// vignettes
add_theme_support( 'post-thumbnails' );
the_post_thumbnail( 'thumbnail' ); 

function register_my_menu(){
    register_nav_menus( array(
        'header-menu' => __( 'Menu De Tete'),
        'footer-menu'  => __( 'Menu De Pied'),
    ) );
}
add_action( 'init', 'register_my_menu', 0 );

function enqueue_styles() {
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/style.css'); // Remplace par le chemin de ton fichier CSS
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function ajouter_script_personnalise() {
    wp_enqueue_script('mon-script', get_template_directory_uri() . '/script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'ajouter_script_personnalise');

function handle_contact_form_submission() {
    // Vérifier si les champs sont présents
    if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['message'])) {
        // Nettoyer les données pour éviter les injections
        $nom = sanitize_text_field($_POST['nom']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);
        
        // Adresse email où le message sera envoyé
        $to = 'logan.martinez68340@gmail.com';  // Remplace par ton adresse email
        $subject = 'Nouveau message de contact';
        $headers = array('Content-Type: text/html; charset=UTF-8');
        
        // Contenu de l'email
        $email_message = "
            <h3>Message de : $nom</h3>
            <p><strong>Email :</strong> $email</p>
            <p><strong>Message :</strong></p>
            <p>$message</p>
        ";
        
        // Envoi de l'email
        wp_mail($to, $subject, $email_message, $headers);
        
        // Redirection après envoi
        wp_redirect(home_url('/merci')); // Redirige vers une page de remerciement
        exit;
    }
}

// Ajouter l'action pour le traitement du formulaire
add_action('admin_post_submit_contact_form', 'handle_contact_form_submission');
add_action('admin_post_nopriv_submit_contact_form', 'handle_contact_form_submission'); // Pour les utilisateurs non connectés
