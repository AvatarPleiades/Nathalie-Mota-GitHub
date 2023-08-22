$(document).ready(function() {

// Apparition/Disparition de la Modale \\

// Le formulaire de contact doit être invisible de base
$('.popup-overlay').hide(); 

// Puis s'ouvrir au clic du bouton Contact
 $('.contact-link').click(function(){
        $('.popup-overlay').show();
});

// Si on se retrouve sur la page Contact, la pop-up s'ouvre aussi
$('#menu-item-13 a').on('click', function(e) {
    e.preventDefault(); // Empêche la redirection par défaut du lien
    
    // Afficher la modale
    $('.popup-overlay').show();
});

// Fonction pour que le formulaire se ferme au clic de la croix
$('.popup-close').click(function(){
    $('.popup-overlay').hide();
    // Remise à zéro des inputs de Contact Form 7
    $form = $('#wpcf7-f5-o1');
    $form[0].reset();
    $form.find('.wpcf7-response-output').empty();
});

// Ajout de la référence de la photo dans la Modale
$('.contact-link').click(function(){
    $reference = $('.reference-photo').text();
    $('input[name="ref"]').val($reference);
});

});