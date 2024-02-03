<?php
/**
  Plugin Name: mes shortcodes
  Description: Plugin fournissant des shortcodes
  Author: Fred
  Version: 1.0.4
 */
 
 // Exit if accessed directly
if ( ! defined( 'ABSPATH') ) {
	exit;
}

//----CSS global du plugin
function fred_add_css(){
     wp_register_style('mes-shortcode', plugins_url('style.css',__FILE__));
	 wp_enqueue_style('mes-shortcode');
}

add_action('wp_enqueue_scripts','fred_add_css');

// --------------------------------affiche demande devis

 function shortcode_devis(){

    return "<p class='button4' style='font-size:14px'>
<a href='/demande-de-devis/'>Demander un devis personnalisé</a></p>";
}

add_shortcode('devis', 'shortcode_devis');

// --------------------------------affiche horaires

 function shortcode_horaires(){

    return "<span style='background-color:#cf037f5c;padding:10px;border-radius:5px;margin-right:15px'><a href='/tarifs-prestation-pao'>Service Graphique</a></span><span style='background-color:#f07d0169;padding:10px;border-radius:5px;margin-right:10px;'><a href='/contact'>Contact</a></span> <span style='background-color:#71b02873;padding:10px;border-radius:5px;'><a href='/photocopie'>Tarifs Boutique</a> </span>";
}

add_shortcode('horaires', 'shortcode_horaires');

// --------------------------------Affichage prénom si connecté 

/*function shortcode_logged()
{
    global $current_user;
     //get_currentuserinfo();
  wp_get_current_user();
     
     if (is_user_logged_in()) {
         return 'Bonjour ' . $current_user->user_firstname . "";}
      
else{ }
 
}
add_shortcode('logged', 'shortcode_logged');*/

// ------------------------------------short code pour la pages produit meta description


function shortcode_desc() {
 
 return '<div class="hr"><span class="desc_panel_titre">En apprendre un peu plus sur le produit</span></div>';
}
add_shortcode('D1', 'shortcode_desc');


function shortcode_carateristique() {
 return '<div class="hr"><span class="desc_panel_titre">Caractristiques</span></div>';
}
add_shortcode('C1', 'shortcode_carateristique');

function shortcode_QR() {
 return '<div class="hr"><span class="desc_panel_titre">Questions/Rponses</span></div>';
}
add_shortcode('Q1', 'shortcode_QR');

function shortcode_Fichier_fournir() 

{
 return '<div class="hr"><span class="desc_panel_titre">Fichiers  fournir</span></div>';
}
add_shortcode('F1', 'shortcode_Fichier_fournir');

function shortcode_gabarit() {
 return '<div class="hr"><span class="desc_panel_titre">Gabarits</span></div>';
}
add_shortcode('G1','shortcode_gabarit');



// ------------------------------------------Texte sous le titre categorie
function wp_promo_fred(  ) { 
	
 if (is_product_category()) {
	echo '<span>', get_field('description'), '</span>';
	}
   
} 

add_action( 'woocommerce_shop_loop_item_title', 'wp_promo_fred', 20 );



// -------------------------------------------Lien vers liste d'envie (page produits)
/*function wp_liste_fred(  ) { 
	echo '<p><span style="font-size:20px"> &#x1F441;</span> <a style="padding-left:2px;" href="/wishlist">Voir ma liste</a></p>';
} 
add_action( 'woocommerce_after_add_to_cart_button', 'wp_liste_fred', 20 );*/



require 'reliure.php';
require 'Flyer.php';
require 'Ticket.php';
require 'pvc.php';
//require 'dibond.php';
require 'vinyle.php';
require 'vernis_3D.php';
require 'these.php';
require 'akilux.php';
require 'test.php';
require 'cdv.php';
//require 'technique.php';
//require'pdf_to_print.php';
//require'delais.php';
require'option_finition_affiche.php';
require'depliant_63_30.php';
require'livre.php';
//require'cdv1000.php';
require'ddl_produits.php';
//require'devis.php';
require'query.php';
require'lettrage.php';
require'plexi.php';
require'mailing.php';
require'global_jquery_fac.php';
require'plaque_de_rue.php';
require'vitrophanie.php';
require'tampon.php';
require'surface.php';
//require'guide-pao.php';
require'Google_shopping_qt.php';










